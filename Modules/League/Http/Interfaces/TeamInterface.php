<?php

namespace Modules\League\Http\Interfaces;

Interface TeamInterface 
{
   public function index();
   public function create();
   public function store($request);

}

?>