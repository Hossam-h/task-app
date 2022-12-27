<?php

namespace Modules\League\Http\Repositories;
use Modules\League\Http\Interfaces\FootballMatchInterface;
use  Modules\League\Entities\FootballMatch;
use  Modules\League\Entities\Team;

Class FootballMatchRepository  implements FootballMatchInterface
{
   
    private $team;
    private $footballMatch;

   public function __construct(FootballMatch $footballMatch, Team $team)
   {
     $this->footballMatch = $footballMatch;
     $this->team          = $team;
   }

    public function index(){
       $matches = $this->footballMatch::all();
        return view('league::pages.football_match.index',compact('matches'));

   }

   public function create(){

    $teams   = $this->team::all();

    return view('league::pages.football_match.create',compact('teams'));

   }

   public function store($request)
   {	
    
   
    $this->footballMatch::create([
          'first_team_score'  =>$request->f_team_score,
          'first_team_id'     =>$request->f_team_id,
          'second_team_score' =>$request->s_team_score,
          'second_team_id'     =>$request->s_team_id,
        ]);

        return  redirect()->back()->with('flash-message','Football Match created success');  

   }

}

?>