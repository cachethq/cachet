<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use CachetHQ\Cachet\Models\Component;
use Illuminate\Database\Seeder;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeding.
     */
    public function run()
    {
        $defaultComponents = [
            [
                'name'        => 'API',
                'description' => 'Used by third-parties to connect to us',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => '',
            ], [
                'name'        => 'Documentation',
                'description' => 'Kindly powered by Readme.io',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => 'https://docs.cachethq.io',
            ], [
                'name'        => 'Website',
                'description' => '',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => 'https://cachethq.io',
            ], [
                'name'        => 'Blog',
                'description' => 'The Cachet HQ blog.',
                'status'      => 1,
                'order'       => 0,
                'group_id'    => 0,
                'link'        => 'https://blog.cachethq.io',
            ],
        ];

        Component::truncate();

        foreach ($defaultComponents as $component) {
            Component::create($component);
        }
    }
}
