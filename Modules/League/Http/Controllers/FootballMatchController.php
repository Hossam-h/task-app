<?php

namespace Modules\League\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\League\Http\Requests\FootballMatchRequest;
use Illuminate\Routing\Controller;
use Modules\League\Http\Interfaces\FootballMatchInterface;

class FootballMatchController extends Controller
{
    
    private $footballMatchInterface;

    public function __construct(FootballMatchInterface $footballMatchInterface)
    {
        $this->footballMatchInterface = $footballMatchInterface;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return $this->footballMatchInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return $this->footballMatchInterface->create();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(FootballMatchRequest $request)
    {
        return $this->footballMatchInterface->store($request);
    }

   
   
}
