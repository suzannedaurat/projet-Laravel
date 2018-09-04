<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Match;

class MatchController extends Controller
{
    function getMatches($teamid)
    {        
    $teams = Team::all();//to find to team's details in the view
    $matches = Match::where('team_id_one',$teamid)
                            ->orwhere('team_id_two',$teamid)->get();//to join the teams and matches db tables

    return view('matches', compact('teams', 'matches'));  
    }
}