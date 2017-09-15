<?php

namespace Tests\Feature;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentUpdate;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Carbon\Carbon;
use function foo\func;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Illuminate\Support\Facades\DB;
use PHPUnit_Framework_TestCase as TestCase;



class UpTimesTests extends AbstractTestCase
{


    use DatabaseTransactions;

    const N_GROUPS = 1;

    const N_COMPONENTS_PER_GROUPS = 1;

    const MAX_N_FAKE_INCIDENTS_PER_GROUPS = 1;

    const MAX_N_UPDATES_PER_INCIDENTS = 3;

    public function testUpTimesPercentagesAreCorrect(){

        $groups = $this->createFakeComponentsWithGroup();

        $this->createFakeIncidentsOverTime($groups);
    }

    private function createFakeComponentsWithGroup(){


        $groups = factory('CachetHQ\Cachet\Models\ComponentGroup', self::N_GROUPS)
            ->create(['visible' => ComponentGroup::VISIBLE_GUEST])
            ->each(function($u) {

                foreach (range(0,self::N_COMPONENTS_PER_GROUPS) as $i)
                    $u->components()
                        ->save(
                            factory(Component::class)->make()
                        );
            });

        return $groups;

    }

    private function createFakeIncidentsOverTime($groups){
        $groups->each(function($g){

            $g->components()
                ->each(function($c){


                $nIncidents = random_int(0, self::MAX_N_FAKE_INCIDENTS_PER_GROUPS);

                foreach(range(0, $nIncidents) as $_){
                    $c->incidents()
                        ->save(factory(Incident::class)->make([
                            "component_status" => random_int(1,4)
                        ]));
                }


                $c->incidents()
                    ->each(function ($i){
                        $nUpdates = random_int(0, self::MAX_N_UPDATES_PER_INCIDENTS);

                        foreach (range(0, $nUpdates) as $_){
                            $i->updates()
                                ->save(factory(IncidentUpdate::class)
                                ->make([
                                    "updated_at" => Carbon::now()->subHours(random_int(1,48))
                                ]));
                        }

                });

            });
        });
    }

    private function checkIncidentsPercentages(){

    }


}
