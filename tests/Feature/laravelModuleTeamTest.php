<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Modules\League\Entities\Team;
class laravelModuleTeamTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_team_page_open()
    {
        $response = $this->get('/team');
        $response->assertOk()
        ->assertSee('Team');
    }

    public function test_create_team_page_open()
    {
        $response = $this->get('/team/create');
        $response->assertOk()
        ->assertSee('Create Team');
    }

    public function test_store_team_in_database()
    {
        $team = Team::create([
            'name' => 'sameh'
        ]);

        $this->call('POST',route('team.store'),[
            'name' => $team->name,
        ]);

        $this->assertDatabaseHas('teams',[
            'name' => $team->name,
        ]);

    }
}
