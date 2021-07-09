<?php

namespace App\Http\Controllers;

use App\Models\Mission;
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
        $mission_id = request('id');
        $mission = Mission::find(request('id'));
        $organisation_id = $mission->organisation_id;
        $missionLines->title = request('title');
        $missionLines->quantity = request('quantity');
        $missionLines->price = request('price');
        $missionLines->unity = request('unity');

        $missionLines->save();

        $missionLines = MissionLine::where('mission_id', $mission_id)->get();
        return view('voirMissionLines')->with(['missionLines' => $missionLines, 'mission_id' => $mission_id, 'organisation_id' => $organisation_id]);
    }

    public function voirLignesMission() {
        $mission = Mission::find(request('id'));
        $organisation_id = $mission->organisation_id;
        $missionLines = MissionLine::where('mission_id', request('id'))->get();
        return view('voirMissionLines')->with(['missionLines' => $missionLines, 'mission_id' => request('id'), 'organisation_id' => $organisation_id]);
    }

    public function missionLineFormUpdate() {
        $missionLine = MissionLine::find(request('id'));
        return view('formUpdateMissionLines')->with(['missionLine' => $missionLine]);
    }

    public function updateMissionLine() {
        $missionLine = MissionLine::find(request('id'));
        $mission_id = $missionLine->mission_id;
        $mission = Mission::find($mission_id);
        $organisation_id = $mission->organisation_id;
        $missionLine->title = request('title');
        $missionLine->quantity = request('quantity');
        $missionLine->price = request('price');
        $missionLine->unity = request('unity');
        $missionLine->save();

        $missionLine = MissionLine::where('mission_id', $mission_id)->get();
        return view('voirMissionLines')->with(['missionLines' => $missionLine, 'mission_id' => $mission_id, 'organisation_id' => $organisation_id]);
    }

    public function deleteMissionLine() {
        $missionLine = MissionLine::find(request('id'));
        $mission_id = $missionLine->mission_id;
        $mission = Mission::find($mission_id);
        $organisation_id = $mission->organisation_id;
        $missionLine->delete();
        $missionLine = MissionLine::where('mission_id', $mission_id)->get();
        return view('voirMissionLines')->with(['missionLines' => $missionLine, 'mission_id' => $mission_id, 'organisation_id' => $organisation_id]);
    }
}
