<?php

namespace Modules\League\Http\Repositories;
use Modules\League\Http\Interfaces\TeamInterface;
use  Modules\League\Entities\Team;

Class TeamRepository  implements TeamInterface
{
    private $team;
   public function __construct(Team $team)
   {
     $this->team = $team;
   }
   
    public function index()
    {
        $teams =  $this->team::all();
        return view('league::pages.team.index',compact('teams'));
    }

   public function create(){

    return view('league::pages.team.create');

   }
   
   public function store($request)
   {
    $this->team::create([
        'name'  =>$request->name,
      
      ]);
      return  redirect()->back()->with('flash-message','Team created success');  

   }

}

?>