<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Models\MissionLine;
use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{

    public function organisations()
    {
        $organisations = Organisation::all();
        return view('organisations')->with('organisations', $organisations);
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
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $organisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $organisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organisation  $organisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        //
    }

    public function addOrganisation()
    {
        $organisation = new Organisation;
        $organisation->name = request('name');
        $organisation->slug = request('slug');
        $organisation->email = request('email');
        $organisation->tel = request('tel');
        $organisation->address = request('address');
        $organisation->type = request('type');

        $organisation->save();

        $organisations = Organisation::all();

        return view('organisations')->with('organisations', $organisations);
    }

    public function organisationFormUpdate()
    {
        $organisation = Organisation::find(request('id'));
        return view('formUpdateOrganisation')->with('organisation', $organisation);
    }

    public function updateOrganisation()
    {
        $organisation = Organisation::find(request('id'));
        $organisation->name = request('name');
        $organisation->slug = request('slug');
        $organisation->email = request('email');
        $organisation->tel = request('tel');
        $organisation->address = request('address');
        $organisation->type = request('type');
        $organisation->save();

        $organisations = Organisation::all();

        return view('organisations')->with('organisations', $organisations);
    }

    public function deleteOrganisation()
    {
        $organisation = Organisation::find(request('id'));
        $missions = Mission::where('organisation_id', request('id'))->get();
        foreach ($missions as $mission) {
            $missionLines = MissionLine::where('mission_id', $mission->id)->get();
            foreach($missionLines as $missionLine) {
                $missionLine->delete();
            }
            $mission->delete();
        }
        $organisation->delete();

        $organisations = Organisation::all();

        return view('organisations')->with('organisations', $organisations);
    }
}
