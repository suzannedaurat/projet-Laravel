<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams=Team::all();
        return view('team',compact('teams')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createteam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('flag'))
        {
           $file = $request->file('flag');
           
           $flag=time().$file->getClientOriginalExtension();
           $file->move(public_path().'/images/', $flag);
       
        }
       $teams= new \App\Team;
       $teams->name=$request->get('name');
       $teams->country=$request->get('country');
       $teams->rank=$request->get('rank');
       $teams->flag=$flag;
       $teams->save();
       
      return redirect('createteam')->with('success', 'Information has been added');  //
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
    public function editeam($id)
    {
        //
        return view('createteam');
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
    public function destroyteam($id)
    {
        //
        $teams = \App\Team::find($id);
        $teams->delete();
        return redirect('createteam')->with('success','Information has been  deleted'); 
    }
}
