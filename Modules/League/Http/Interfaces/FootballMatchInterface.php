<?php

namespace Modules\League\Http\Interfaces;

Interface FootballMatchInterface 
{
   public function index();
   public function create();
   public function store($request);

}

?>