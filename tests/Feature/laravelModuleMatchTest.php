<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Modules\League\Entities\FootballMatch;

class laravelModuleMatchTest extends TestCase
{

    public function test_index_football_match_page_open()
    {
        $response = $this->get('/football_match');
        $response->assertOk()
        ->assertSee('first team score');
    }

    public function test_create_football_match_page_open()
    {
        $response = $this->get('/football_match/create');
        $response->assertOk()
        ->assertSee('second team score');
    }

    public function test_store_football_match_in_database()
    {
        $footballMatch = FootballMatch::create([
            'first_team_score'  =>3,
            'first_team_id'     =>1,
            'second_team_score' =>4,
            'second_team_id'    =>2,
        ]);

        $this->call('POST',route('football_match.store'),[
            'first_team_score' => $footballMatch->first_team_score,
        ]);

        $this->assertDatabaseHas('football_matchs',[
            'first_team_score' => $footballMatch->first_team_score,
        ]);

    }
}
