<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\Ville;
use App\Models\Mission;
use Illuminate\Http\Request;
use App\Models\Entreprise_ig;
use App\Rules\APaysControlle;
use App\Http\Controllers\Controller;
// use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMissionRequest;
use App\Http\Requests\UpdateMissionRequest;
use App\Http\Requests\StoreEntrepriseRequest;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions_attente = Mission::where('user_id', Auth::user()->id)->where('status', '<', 5 )->get();
        $missions_add = Mission::where('user_id', Auth::user()->id)->where('status', 5)->get();

        return view('missions.index', compact('missions_attente', 'missions_add'));
    }

    public function editMission(){
        $pays = Pays::all();
        $villes = Ville::all();
        $entreprises = Entreprise_ig::all();
        return view('missions.add-mission', compact('pays', 'villes', 'entreprises'));
    }
    public function editMission1(){
        $mission = Mission::orderBy('id', 'DESC')->first();
        return view('missions.add-mission2', compact('mission'));
    }

    public function create_mission(Request  $request){
        $request->validate([
            'dville' => 'required',
            'aville' => 'required',
            'apays' => 'required',
            'dpays' => 'required',
            // 'dpays' => new APaysControlle($request->input('apays')),
            'aentreprise' => 'required',
            'dentreprise' => 'required',
        ]);
        // dd(Auth::user()->id);
        $mission = new Mission([
            'dVille' => $request->get('dville'),
            'aVille' => $request->get('aville'),
            'aPays' => $request->get('apays'),
            'dPays' => $request->get('dpays'),
            'user_id' => Auth::user()->id,
            'entreprise_id' => Auth::user()->entreprise->id,
            'aEntreprise' => $request->get('aentreprise'),
            'dEntreprise' => $request->get('dentreprise'),
            'status' => 0,
            
        ]);
        $mission->save();
        // dd('ok');
        return redirect()->route('missions.part2.add', $mission->id);
    }

    public function create_mission1(Request $request, Mission $mission){
        $request->validate([
            "gttm" => 'required|integer',
            "peage" => 'required|integer',
            "carburant" => 'required|integer',
            "ammende" => 'required|integer',
            "autre" => 'required|integer',
            "com" => 'required|string',
            "km" => 'required|string|min:1',
        ]);
        $mission->update([
            'distence' => $request->km,
            'reveue_tt' => $request->gttm,
            'essence' => $request->carburant,
            'peage' => $request->peage,
            'ammende' => $request->ammende,
            'status' => 1,
            'autre' => $request->autre,
            'commentaire' => $request->com,



        ]);
        // dd($request);
        session(['type' => 'success', ]);
            session(['message' => 'Mission ajouter avec succes']);
        return redirect()->route('home');
 
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
     * @param  \App\Http\Requests\StoreMissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMissionRequest $request)
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
     * @param  \App\Http\Requests\UpdateMissionRequest  $request
     * @param  \App\Models\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMissionRequest $request, Mission $mission)
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
}
