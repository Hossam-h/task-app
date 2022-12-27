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

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('league::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('league::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
