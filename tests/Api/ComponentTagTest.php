<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Api;

/**
 * This is the component tag test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class ComponentTagTest extends AbstractApiTestCase
{
    public function testGetTags()
    {
        $tags = factory('CachetHQ\Cachet\Models\ComponentTag', 3)->create();

        $this->get('/api/v1/components/tags');
        $this->seeJson(['id' => $tags[0]->id]);
        $this->seeJson(['id' => $tags[1]->id]);
        $this->seeJson(['id' => $tags[2]->id]);
        $this->assertResponseOk();
    }

    public function testGetInvalidTag()
    {
        $this->get('/api/v1/components/tags/1');
        $this->assertResponseStatus(404);
    }

    public function testPostTagUnauthorized()
    {
        $this->post('/api/v1/components/tags');

        $this->assertResponseStatus(401);
    }

    public function testPostTagNoData()
    {
        $this->beUser();

        $this->post('/api/v1/components/tags');
        $this->assertResponseStatus(400);
    }

    public function testPostTag()
    {
        $this->beUser();

        $component = factory('CachetHQ\Cachet\Models\Component')->create();
        $tag = factory('CachetHQ\Cachet\Models\Tag')->create();

        $this->post('/api/v1/components/tags', [
            'component_id' => $component->id,
            'tag_id'       => $tag->id,
        ]);
        $this->seeJson(['component_id' => $component->id, 'tag_id' => $tag->id]);
        $this->assertResponseOk();
    }

    public function testGetNewTag()
    {
        $tag = factory('CachetHQ\Cachet\Models\ComponentTag')->create();

        $this->get('/api/v1/components/tags/1');
        $this->seeJson(['tag_id' => $tag->id]);
        $this->assertResponseOk();
    }

    public function testDeleteTag()
    {
        $this->beUser();
        $tag = factory('CachetHQ\Cachet\Models\ComponentTag')->create();

        $this->delete('/api/v1/components/tags', [
            'component_id' => $tag->component_id,
            'tag_id'       => $tag->tag_id,
        ]);
        $this->assertResponseStatus(204);
    }
}
