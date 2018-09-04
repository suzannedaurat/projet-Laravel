<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statsteam extends Model
{
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
