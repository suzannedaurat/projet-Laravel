<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $players=Player::all();
        return view('player',compact('players')); 
    }

   /*  public function select()
    {
        $teams = DB::table('teams')->get();
        $select = [];
        foreach($teams as $team)
        {
            $select[$team->name] = $team->name;
        }

        return view('player', compact('select'));
    } */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('editplayer');
        } //

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if($request->hasfile('photo'))
             {
                $file = $request->file('photo');
                
                $photo=time().$file->getClientOriginalExtension();
                $file->move(public_path().'/images/', $photo);
             }
            $players= new \App\Player;
            $players->name=$request->get('name');
            $players->team=$request->get('team');
            $players->rank=$request->get('rank');
            $players->position=$request->get('position');
            $players->nationality=$request->get('nationality');
            $players->photo=$photo;
            $players->save();
            
            return redirect('editplayer')->with('success', 'Information has been added');
        
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('editplayer');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $players = \App\Player::find($id);
        $players->delete();
        return redirect('editplayer')->with('success','Information has been  deleted'); //
    }
}

