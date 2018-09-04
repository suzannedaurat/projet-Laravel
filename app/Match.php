<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function team()
    {
        return $this->belongsToMany('App\Team', 'team_id_one');
    }
}
