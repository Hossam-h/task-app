<?php

namespace Modules\League\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\League\Http\Requests\TeamRequest;
use Illuminate\Routing\Controller;
use Modules\League\Http\Interfaces\TeamInterface;

class TeamController extends Controller
{  
    
    private $teamInterface;

    public function __construct(TeamInterface $teamInterface){
        $this->teamInterface = $teamInterface;
    }


    public function index()
    {
        return $this->teamInterface->index();
    }

    
    public function create()
    {
        return $this->teamInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(TeamRequest $request)
    {
        return $this->teamInterface->store($request);
    }

   
}
