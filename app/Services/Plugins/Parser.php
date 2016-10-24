<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins;

use CachetHQ\Cachet\Services\Plugins\Contracts\Parser as ParserContract;
use CachetHQ\Cachet\Services\Plugins\Definition\Author;
use CachetHQ\Cachet\Services\Plugins\Definition\Dependency;
use CachetHQ\Cachet\Services\Plugins\Definition\Plugin;
use CachetHQ\Cachet\Services\Plugins\Definition\Provider as PluginProvider;
use CachetHQ\Cachet\Services\Plugins\Definition\Version;
use Exception;
use Illuminate\Contracts\Filesystem\Filesystem;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

/**
 * This is the plugin parser.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Parser implements ParserContract
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
     * Parse all valid plugins.
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Plugin[]
     */
    public function from(array $possible)
    {
        return array_reduce($possible, [$this, 'reducePlugin'], []);
    }

    /**
     * Reduce a plugin.
     *
     * @param \CachetHQ\Cachet\Services\Plugins\Definition\Plugin[] $parsed
     * @param string                                                $directory
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Plugin[]
     */
    protected function reducePlugin(array $parsed, $directory)
    {
        $plugin = $this->parsePlugin($directory);

        if ($plugin instanceof Plugin) {
            $parsed[] = $plugin;
        }

        return $parsed;
    }

    /**
     * Parse a plugin.
     *
     * @param string $directory
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Plugin
     */
    protected function parsePlugin($directory)
    {
        $config = $this->files->get("{$directory}/plugin.yml");

        try {
            $config = Yaml::parse($config);
        } catch (ParseException $e) {
            return null;
        }

        try {
            return $this->parsePluginDefinition($directory, $config);
        } catch (Exception $e) {
            return null;
        }
    }

    /**
     * Parse the plugin definition.
     *
     * @param string $directory
     * @param array  $config
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Plugin
     */
    protected function parsePluginDefinition($directory, array $config)
    {
        $plugin = explode('/', $directory);

        $vendor = $plugin[0];
        $name = $plugin[1];

        $authors = array_map([$this, 'parseAuthor'], array_get($config, 'authors', []));
        $authors = array_filter($authors);

        $version = $this->parseVersion(array_get($config, 'version'));

        $providers = array_map([$this, 'parseProvider'], array_get($config, 'providers', []));
        $providers = array_filter($providers);

        $dependencies = array_map([$this, 'parseDependency'], array_get($config, 'dependencies', []));
        $dependencies = array_filter($dependencies);

        return new Plugin(
            $vendor,
            $name,
            $authors,
            $version,
            $providers,
            $dependencies,
            true
        );
    }

    /**
     * Parse an author.
     *
     * @param array $author
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Author
     */
    protected function parseAuthor(array $author)
    {
        $name = array_get($author, 'name');
        $email = array_get($author, 'email');

        if (empty($name) || empty($email)) {
            return null;
        }

        return new Author($name, $email);
    }

    /**
     * Parse a version.
     *
     * @param string $version
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Version
     */
    protected function parseVersion($version)
    {
        return new Version(1, 0, 0, 'dev');
    }

    /**
     * Parse an provider.
     *
     * @param string $provider
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Provider
     */
    protected function parseProvider($provider)
    {
        return new PluginProvider($provider);
    }

    /**
     * Parse an dependency.
     *
     * @param array $dependency
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Dependency
     */
    protected function parseDependency(array $dependency)
    {
        $vendor = array_get($author, 'vendor');
        $name = array_get($author, 'name');
        $constraint = array_get($author, 'constraint');
        $version = array_get($author, 'version');

        if (empty($vendor) || empty($name) || empty($constraint) || empty($version)) {
            return null;
        }

        return new Dependency($vendor, $name, $constraint, $this->parseVersion($version));
    }
}
