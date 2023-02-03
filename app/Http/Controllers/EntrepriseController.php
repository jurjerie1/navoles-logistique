<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mission;
use App\Models\Entreprise;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEntrepriseRequest;
use Illuminate\Http\Request;
use App\Mail\RegisterRequest;
use App\Http\Requests\UpdateEntrepriseRequest;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        $missions = Mission::where('entreprise_id', $user->entreprise->id)->orderBy('id', 'DESC')->where('status', 5)->get();
        $total_members = count(User::where('entreprise_id', $user->entreprise->id)->get());

        $solde_entreprise = 0;
        foreach ($missions as $mission){
            $solde_entreprise += $mission->reveue_tt;
        }


        return view('gestion-entreprise', compact('user', 'missions', 'solde_entreprise', 'total_members'));
    }

    public function employe(){

        $missions = Mission::where('entreprise_id', Auth::user()->entreprise->id)->where('status', 5)->orderBy('id', 'DESC')->get();

        $users = User::where('entreprise_id', Auth::user()->entreprise->id)->get();
        // dd($users);
        
        return view('employes', compact('users', 'missions'));
    }

    public function addEmploye(){
        $total_members = count(User::where('entreprise_id', Auth::user()->entreprise->id)->get());
        $total_possible = Entreprise::where('id', Auth::user()->entreprise->id)->first();

        if ($total_possible->nombre_emplye === -1 || $total_members < $total_possible->nombre_emplye){
            return view('entreprise.add-employes');
        }else{
                
            session(['type' => 'error', ]);
            session(['message' => 'Impossible de rajouter des employés suplémentaire']);
            return redirect()->route('entreprise..gestion.employe');

        }
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
     * @param  \App\Http\Requests\StoreEntrepriseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntrepriseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEntrepriseRequest  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
    public function editEmploye(User $user){
        return view('entreprise.edit-employes', compact('user'));
    }

    public function updateEmploye(User $user, Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'grade' => ['required', 'intger'],

        ],[
            'email.unique' => "Ce chauffeur appartient déjà à une entreprise",
            'grade.required' => "Le grade l'employer est requis",
        ]);
        // $user = User::where('create_compte', $token)->first();

        

        $user->update([
            'email' => $request->email,
            'grade' => $request->grade, 
        ]);
    }

    public function deleteEmploye(User $user){
        $user->delete();
        session(['type' => 'success']);
        session(['message' => "Emplyé bien licencié"]);
        return redirect()->route('entreprise..gestion.employe');

    }
}
