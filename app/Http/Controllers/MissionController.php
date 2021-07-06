<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\MissionLine;
use App\Models\Organisation;
use Illuminate\Http\Request;

class MissionController extends Controller
{

    public function missions() {
        $missions = Mission::with('organisation')->get();
        return view('missions')->with('missions', $missions);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create() {
        $mission = new Mission;
        $mission->reference = request('reference');
        $mission->organisation_id = request('id');
        $mission->title = request('title');
        $mission->comment = request('comment');
        $mission->deposit = request('deposit');
        $mission->ended_at = request('ended_at');

        $mission->save();

        return 'Votre mission a bien été ajoutée';        
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
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }

    public function voirMissionForId () {
        $missionsForId = Mission::all()->where('organisation_id', request('id'));
        return view('voirMissionsForId')->with('missionsForId', $missionsForId);
    }

    public function getInfoMissionForDevis() {
        $missionInfo = Mission::find(request('id_mission'));
        $organisationInfo = Organisation::find($missionInfo->organisation_id);
        $missionLinesInfo = MissionLine::where('mission_id', request('id_mission'))->get();
        $sum_total = 0;
        foreach ($missionLinesInfo as $mission) {
            $sum_total = $sum_total + $mission->price * $mission->quantity;
        }

        return view('imprimerDevis')->with(['missionInfo' => $missionInfo, 'organisationInfo' => $organisationInfo, 'missionLinesInfos' => $missionLinesInfo, 'sum_total' => $sum_total]);
    }

    public function getInfoMissionForDeposit() {
        $missionInfo = Mission::find(request('id_mission'));
        $organisationInfo = Organisation::find($missionInfo->organisation_id);
        $missionLinesInfo = MissionLine::where('mission_id', request('id_mission'))->get();
        
        return view('imprimerFactureAccompte')->with(['missionInfo' => $missionInfo, 'organisationInfo' => $organisationInfo, 'missionLinesInfos' => $missionLinesInfo]);
    }

    public function getInfoMissionForSolde() {
        $missionInfo = Mission::find(request('id_mission'));
        $organisationInfo = Organisation::find($missionInfo->organisation_id);
        $missionLinesInfo = MissionLine::where('mission_id', request('id_mission'))->get();
        $sum_total = 0;
        foreach ($missionLinesInfo as $mission) {
            $sum_total = $sum_total + $mission->price * $mission->quantity;
        }
        $solde = $sum_total - $missionInfo->deposit;
        
        return view('imprimerFactureSolde')->with(['missionInfo' => $missionInfo, 'organisationInfo' => $organisationInfo, 'missionLinesInfos' => $missionLinesInfo, 'solde' => $solde]);
    }

    public function getInfoMissionForInvoice() {
        $missionInfo = Mission::find(request('id_mission'));
        $organisationInfo = Organisation::find($missionInfo->organisation_id);
        $missionLinesInfo = MissionLine::where('mission_id', request('id_mission'))->get();
        $sum_total = 0;
        foreach ($missionLinesInfo as $mission) {
            $sum_total = $sum_total + $mission->price * $mission->quantity;
        }

        return view('imprimerFacture')->with(['missionInfo' => $missionInfo, 'organisationInfo' => $organisationInfo, 'missionLinesInfos' => $missionLinesInfo, 'sum_total' => $sum_total]);
    }
}
