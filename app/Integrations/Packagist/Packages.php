<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Integrations\Packagist;

use CachetHQ\Cachet\Integrations\Contracts\Packages as PackagesContract;
use CachetHQ\Cachet\Integrations\Exceptions\Packages\IncorrectPackageTypeException;
use CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageAlreadyDownloadedException;
use CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageDownloadErrorException;
use CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageNotFoundException;
use CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageVersionUnsatisfiedException;
use Composer\Semver\Semver;
use GuzzleHttp\Client;
use GuzzleHttp\GuzzleException;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Contracts\Filesystem\Filesystem;
use ZipArchive;

class Packages implements PackagesContract
{
    /**
     * The default url.
     *
     * @var string
     */
    const URL = 'https://packagist.org/packages/%s/%s.json';

    /**
     * The default link url.
     *
     * @var string
     */
    const LINK = 'https://packagist.org/packages/%s#%s';

    /**
     * The cache repository instance.
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Contracts\Filesystem\Filesystem
     */
    protected $filesystem;

    /**
     * The url to use.
     *
     * @var string|null
     */
    protected $url;

    /**
     * The link url to use.
     *
     * @var string|null
     */
    protected $link;

    /**
     * Creates a new releases instance.
     *
     * @param \Illuminate\Contracts\Cache\Repository      $cache
     * @param \Illuminate\Contracts\Filesystem\Filesystem $filesystem
     * @param string|null                                 $url
     * @param string|null                                 $link
     *
     * @return void
     */
    public function __construct(Repository $cache, Filesystem $filesystem, $url = null, $link = null)
    {
        $this->cache = $cache;
        $this->filesystem = $filesystem;
        $this->url = $url ?: static::URL;
        $this->link = $link ?: static::LINK;
    }

    /**
     * Finds a specific package.
     *
     * @param string $vendor
     * @param string $package
     * @param string $version
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\IncorrectPackageTypeException
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageNotFoundException
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageVersionUnsatisfiedException
     *
     * @return array
     */
    public function find($vendor, $package, $version)
    {
        $url = sprintf($this->url, urlencode($vendor), urlencode($package));
        $package = $this->getPackagistResource($url, null);

        if ($package === null || !isset($package['package'])) {
            throw new PackageNotFoundException();
        }

        $package = $package['package'];

        $versions = array_keys($package['versions']);
        $versions = Semver::rsort($versions);
        $versions = Semver::satisfiedBy($versions, $version);

        if (empty($versions)) {
            throw new PackageVersionUnsatisfiedException();
        }

        $package = $package['versions'][$versions[0]];

        if ($package['type'] !== 'cachet-plugin') {
            throw new IncorrectPackageTypeException();
        }

        $package['link'] = sprintf($this->link, $package['name'], urlencode($package['version']));

        return $package;
    }

    /**
     * Downloads a package to a folder.
     *
     * @param array $package
     *
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageAlreadyDownloadedException
     * @throws \CachetHQ\Cachet\Integrations\Exceptions\Packages\PackageDownloadErrorException
     *
     * @return void
     */
    public function download(array $package)
    {
        $dir = "disabled/{$package['name']}";
        if (
            $this->filesystem->exists("enabled/{$package['name']}") ||
            $this->filesystem->exists($dir)
        ) {
            throw new PackageAlreadyDownloadedException();
        }

        // Currently only support zip.
        if ($package['dist']['type'] !== 'zip') {
            throw new PackageDownloadErrorException();
        }

        $temp = tmpfile();

        try {
            fwrite($temp, (new Client())->get($package['dist']['url'])->getBody());
        } catch (GuzzleException $e) {
            fclose($temp);

            throw new PackageDownloadErrorException();
        }

        $this->filesystem->createDir(dirname($dir));

        fseek($temp, 0);

        $meta = stream_get_meta_data($temp);
        $path = $meta['uri'];

        with($zip = new ZipArchive())->open($path);

        $root = $zip->getNameIndex(0);

        $zip->extractTo(plugin_path(false, dirname($package['name'])).DIRECTORY_SEPARATOR);
        $zip->close();

        fclose($temp);

        $this->filesystem->move(dirname($dir).DIRECTORY_SEPARATOR.$root, $dir);
    }

    /**
     * Get a packagist resource.
     *
     * @param string $url
     * @param int    $cache
     *
     * @return array|null
     */
    protected function getPackagistResource($url, $cache = 15)
    {
        try {
            return $this->cache->remember("packagist:${url}", $cache, function () use ($url) {
                $headers = ['Accept' => 'application/vnd.github.v3+json', 'User-Agent' => defined('CACHET_VERSION') ? 'cachet/'.constant('CACHET_VERSION') : 'cachet'];

                return json_decode((new Client())->get($url)->getBody(), true);
            });
        } catch (GuzzleException $e) {
            return;
        }
    }
}
