<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins\Installation;

use CachetHQ\Cachet\Services\Plugins\Contracts\Installation\Extractor as ExtractorContract;
use CachetHQ\Cachet\Services\Plugins\Definition\Plugin;
use Illuminate\Contracts\Filesystem\Filesystem;
use PharData;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

/**
 * This is the plugin installation extractor.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Extractor implements ExtractorContract
{
    /**
     * The filesystem.
     *
     * @var \Illuminate\Contracts\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new finder object.
     *
     * @param \Illuminate\Contracts\Filesystem\Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * Extract a specific plugin archive.
     *
     * @todo make this exception based
     *
     * @param string                                              $archive
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin $plugin
     *
     * @return bool
     */
    public function from($archive, Plugin $plugin)
    {
        $destination = sprintf(
            '%s/%s',
            $plugin->getVendor(),
            $plugin->getName()
        );

        if ($this->files->exists($destination)) {
            return false;
        }

        $this->extract($archive, $destination);
    }

    /**
     * Extract an archive to a destination.
     *
     * @param string $archive
     * @param string $destination
     *
     * @return bool
     */
    protected function extract($archive, $destination)
    {
        $archive = new PharData($archive);
        $archive->decompressFiles();

        $base = "phar://{$archive}";

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($base),
            RecursiveIteratorIterator::SELF_FIRST
        );

        $prefix = null;
        foreach ($iterator as $file) {
            $name = substr(
                $file->getPathName(),
                strlen($base)
            );

            if ($prefix === null) {
                $prefix = $name;

                continue;
            }

            $name = substr($name, strlen($prefix));
            if (
                $file->isDir() ||
                ends_with($name, ['/.', '/..']) ||
                starts_with($name, '/.git')
            ) {
                continue;
            }

            $fp = fopen($file->getPathName(), 'r');
            $this->files->put("{$destination}{$name}", $fp);
            fclose($fp);
        }

        // @unlink($archive);
    }
}
