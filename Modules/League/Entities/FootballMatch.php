<?php

namespace Modules\League\Entities;
use Modules\League\Entities\Team;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    protected $fillable = ['first_team_id','second_team_id','first_team_score','second_team_score'];
    protected $table = "football_matchs";

    public function first_team()
    {
        return $this->belongsTo(Team::class,'first_team_id');
    }

    public function second_team()
    {
        return $this->belongsTo(Team::class,'second_team_id');
    }
}
