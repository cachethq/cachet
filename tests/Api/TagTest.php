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
 * This is the tag test class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TagTest extends AbstractApiTestCase
{
    public function testGetTags()
    {
        $tags = factory('CachetHQ\Cachet\Models\Tag', 3)->create();

        $this->get('/api/v1/tags');
        $this->seeJson(['id' => $tags[0]->id]);
        $this->seeJson(['id' => $tags[1]->id]);
        $this->seeJson(['id' => $tags[2]->id]);
        $this->assertResponseOk();
    }

    public function testGetInvalidTag()
    {
        $this->get('/api/v1/tags/1');
        $this->assertResponseStatus(404);
    }

    public function testPostTagUnauthorized()
    {
        $this->post('/api/v1/tags');

        $this->assertResponseStatus(401);
    }

    public function testPostTagNoData()
    {
        $this->beUser();

        $this->post('/api/v1/tags');
        $this->assertResponseStatus(400);
    }

    public function testPostTag()
    {
        $this->beUser();

        $this->post('/api/v1/tags', [
            'name' => 'Foo',
            'slug' => 'foo',
        ]);
        $this->seeJson(['name' => 'Foo', 'slug' => 'foo']);
        $this->assertResponseOk();
    }

    public function testGetNewTag()
    {
        $tag = factory('CachetHQ\Cachet\Models\Tag')->create();

        $this->get('/api/v1/tags/1');
        $this->seeJson(['name' => $tag->name]);
        $this->assertResponseOk();
    }

    public function testPutTag()
    {
        $this->beUser();
        $tag = factory('CachetHQ\Cachet\Models\Tag')->create();

        $this->put('/api/v1/tags/1', [
            'name' => 'Lorem Ipsum Tagous',
        ]);
        $this->seeJson(['name' => 'Lorem Ipsum Tagous']);
        $this->assertResponseOk();
    }

    public function testDeleteTag()
    {
        $this->beUser();
        $tag = factory('CachetHQ\Cachet\Models\Tag')->create();

        $this->delete('/api/v1/tags/1');
        $this->assertResponseStatus(204);
    }
}
