<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Plugins\Definition;

use Composer\Semver\VersionParser;

/**
 * This is the plugin version class.
 *
 * @author Connor S. Parks <contact@connorvg.tv>
 */
class Version
{
    /**
     * The version string extractor regex.
     *
     * @var string
     */
    const MATCHER = '/(?<=^[Vv]|^)(?:(?<major>(?:0|[1-9](?:(?:0|[1-9])+)*))[.](?<minor>(?:0|[1-9](?:(?:0|[1-9])+)*))[.](?<patch>(?:0|[1-9](?:(?:0|[1-9])+)*))[.](?<internal>(?:0|[1-9](?:(?:0|[1-9])+)*))(?:-(?<meta>(?:(?:(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?|(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?)|(?:0|[1-9](?:(?:0|[1-9])+)*))(?:[.](?:(?:(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?|(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?)|(?:0|[1-9](?:(?:0|[1-9])+)*)))*))?(?:[+](?<build>(?:(?:(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?|(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?)|(?:(?:0|[1-9])+))(?:[.](?:(?:(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?|(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)(?:[A-Za-z]|-)(?:(?:(?:0|[1-9])|(?:[A-Za-z]|-))+)?)|(?:(?:0|[1-9])+)))*))?)$/';

    /**
     * The major version part.
     *
     * @var int
     */
    protected $major;

    /**
     * The minor version part.
     *
     * @var int
     */
    protected $minor;

    /**
     * The patch version part.
     *
     * @var int
     */
    protected $patch;

    /**
     * The meta version part.
     *
     * @var string
     */
    protected $meta;

    /**
     * Create a new version object.
     *
     * @param int    $major
     * @param int    $minor
     * @param int    $patch
     * @param string $meta
     */
    public function __construct($major, $minor, $patch, $meta)
    {
        $this->major = $major;
        $this->minor = $minor;
        $this->patch = $patch;
        $this->meta = $meta;
    }

    /**
     * Get the major version part.
     *
     * @return int
     */
    public function getMajor()
    {
        return $this->major;
    }

    /**
     * Get the minor version part.
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->minor;
    }

    /**
     * Get the patch version part.
     *
     * @return int
     */
    public function getPatch()
    {
        return $this->patch;
    }

    /**
     * Get the meta version part.
     *
     * @return string
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Get the version as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            '%d.%d.%d-%s',
            $this->major,
            $this->minor,
            $this->patch,
            $this->meta
        );
    }

    /**
     * Extract the version from a string.
     *
     * @param string $version
     *
     * @return \CachetHQ\Cachet\Services\Plugins\Definition\Version|null
     */
    public static function from($version)
    {
        $version = self::normalize($version);

        if ($version === null) {
            return;
        }

        $matches = [];

        if (preg_match(self::MATCHER, $version, $matches) !== 1) {
            return;
        }

        return new self(
            $matches['major'],
            $matches['minor'],
            $matches['patch'],
            $matches['meta']
        );
    }

    /**
     * Normalizes a version string.
     *
     * @param string $version
     *
     * @return string|null
     */
    protected static function normalize($version)
    {
        $parser = new VersionParser();

        try {
            return $parser->normalize($version);
        } catch (UnexpectedValueException $e) {
            // ...
        }
    }
}
