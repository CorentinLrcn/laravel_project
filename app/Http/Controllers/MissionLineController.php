<?php

namespace App\Http\Controllers;

use App\Models\MissionLine;
use Illuminate\Http\Request;

class MissionLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function show(MissionLine $missionLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionLine $missionLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MissionLine $missionLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissionLine  $missionLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissionLine $missionLine)
    {
        //
    }

    public function missionLines()
    {
        $missionLines = MissionLine::with('mission')->get();
        return view('missionLines')->with('missionLines', $missionLines);
    }

    public function ajoutLignesMission()
    {
        $missionLines = new MissionLine;
        $missionLines->mission_id = request('id');
        $missionLines->title = request('title');
        $missionLines->quantity = request('quantity');
        $missionLines->price = request('price');
        $missionLines->unity = request('unity');

        $missionLines->save();

        return 'Ligne de mission ajoutée';
    }

    public function voirLignesMission() {
        $missionLines = MissionLine::where('mission_id', request('id'))->get();
        return view('voirMissionLines')->with(['missionLines' => $missionLines, 'mission_id' => request('id')]);
    }
}
