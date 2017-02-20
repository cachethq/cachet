<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Services\Markdown\Twitter;

use League\CommonMark\Extension\Extension as CommonMarkExtension;

/**
 * This is the extension class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class Extension extends CommonMarkExtension
{
    /**
     * The alfie parser.
     *
     * @var \BlueBayTravel\Warehouse\Extensions\Markdown\Alfie\Parser
     */
    protected $parser;

    /**
     * Create a new extension instance.
     *
     * @param \CachetHQ\Cachet\Services\Markdown\URL\Parser $parser
     *
     * @return void
     */
    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * Returns a list of inline parses to add to the existing list.
     *
     * @return \League\CommonMark\Inline\Parser\InlineParserInterface[]
     */
    public function getInlineParsers()
    {
        return [$this->parser];
    }
}
