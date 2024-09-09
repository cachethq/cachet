<?php
namespace Tests\Feature;

use CachetHQ\Tests\Cachet\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class MaintenanceViewTest extends TestCase
{
    /**
     * Test if the maintenance index view is working correctly.
     *
     * @return void
     */
    public function testMaintenanceIndexView()
    {
        $response = $this->get('/dashboard/schedule');

        $response->assertStatus(200);
        $response->assertViewIs('maintenance.index');
        $response->assertSeeText('All Events');
        $response->assertSeeText('Unstable Events');
    }

}
?>