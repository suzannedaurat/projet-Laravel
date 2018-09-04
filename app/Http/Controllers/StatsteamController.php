<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statsteam;
use App\Team;

class StatsteamController extends Controller
{
    function getStats($teamid)
    {  
        
    $teams = Team::all();//to find to team's details in the view
    $stats = Team::find($teamid)->stats;//to join the teams and stats db tables
    return view('statsteam', ['stats'=>$stats], ['teams'=>$teams]);  
    }

}
