<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    //@var array

    protected $fillable = [
        'name', 'country', 'rank', 'flag'
    ];
    public function stats()
    {
        return $this->hasOne('App\Statsteam');
    }

    public function matches()
    {
        return $this->hasMany('App\Match');
    }
}
