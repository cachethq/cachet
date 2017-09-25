<?php

namespace Tests\Feature;

use CachetHQ\Cachet\Models\Component;
use CachetHQ\Cachet\Models\ComponentGroup;
use CachetHQ\Cachet\Models\Incident;
use CachetHQ\Cachet\Models\IncidentUpdate;
use CachetHQ\Tests\Cachet\AbstractTestCase;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UpTimesTests extends AbstractTestCase
{


    use DatabaseTransactions;

    const N_GROUPS = 1;

    const N_COMPONENTS_PER_GROUPS = 1;

    const MAX_N_FAKE_INCIDENTS_PER_GROUPS = 1;

    const N_HOURS = 48;

    const SCENARIOS = [
        25,
        50,
        75,
    ];

    private $baseDate;

    private $scenariosMapping = [];

    public function testUpTimesPercentagesAreCorrect(){

        $this->baseDate = Carbon::now()->subHours(30);

        $groups = $this->createFakeComponentsWithGroup();

        $this->createFakeIncidentsOverTime($groups);

        $this->checkIncidentsPercentages($groups);
    }

    private function createFakeComponentsWithGroup(){


        $groups = factory('CachetHQ\Cachet\Models\ComponentGroup', self::N_GROUPS)
            ->create(['visible' => ComponentGroup::VISIBLE_GUEST])
            ->each(function($u) {

                foreach (range(0,self::N_COMPONENTS_PER_GROUPS-1) as $i)
                    $u->components()
                        ->save(
                            factory(Component::class)->make()
                        );
            });

        return $groups;

    }

    private function createFakeIncidentsOverTime($groups){
        $groups->each(function($g){

            $scenario = array_random(self::SCENARIOS);

            $this->scenariosMapping[$g->id] = $scenario;

            $nHoursToBeDown = self::N_HOURS * ($scenario/100);

            echo "Hours to be down ".$nHoursToBeDown."\n";

            $nHoursToBeDownPerComponent = $nHoursToBeDown / $g->components()->count();

            echo "Hours to be down per component ".$nHoursToBeDownPerComponent."\n";

            $g->components()
                ->each(function($c) use ($nHoursToBeDownPerComponent) {

                $nIncidents = random_int(1, self::MAX_N_FAKE_INCIDENTS_PER_GROUPS);

                $nHoursToBeDownPerIncidents = $nHoursToBeDownPerComponent / $nIncidents;

                echo "Hours to be down per incident ".$nHoursToBeDownPerIncidents."\n";

                foreach(range(0, $nIncidents-1) as $_){
                    $c->incidents()
                        ->save(factory(Incident::class)->make([
                            "component_status" => 4,
                            "occurred_at" => $this->baseDate
                        ]));
                }


                $c->incidents()
                    ->each(function ($i) use ($nHoursToBeDownPerIncidents) {

                        $date = clone $this->baseDate;
                        $date->addHours($nHoursToBeDownPerIncidents);

                        echo $this->baseDate->toDateTimeString()."\n";
                        echo $date->toDateTimeString();
                        echo "\n================";

                        $i->updates()
                            ->save(factory(IncidentUpdate::class)->make([
                                    "created_at" => $date,
                                    "updated_at" => $date
                                ]));
                });

            });

        });
    }

    private function checkIncidentsPercentages($groups){

        $sum = 0;

        $groups->each(function($g) use ($sum) {

            $groupData = $this->getJson("uptimes_group/".$g->id)->decodeResponseJson();

            $items = $groupData["data"]["items"];

            $downTimeToBeExpectedPerc = $this->scenariosMapping[$g->id];

            //Checks that values are conform percentages
            array_map(function($i){
                $this->assertGreaterThanOrEqual(0, $i);
                $this->assertLessThanOrEqual(100, $i);
            }, $items);

            //print_r($items);

            $percentageUp = array_sum($items) / count($items);

            $this->assertEquals($downTimeToBeExpectedPerc, 100.0 - $percentageUp);

        });

    }


}
