<?php

namespace Modules\League\Entities;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name'];
    protected $table = "teams";
}
