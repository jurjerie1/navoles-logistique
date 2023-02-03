<?php

namespace App\Http\Controllers;

use App\Models\Usep;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUsepRequest;
use App\Http\Requests\UpdateUsepRequest;
use App\Models\Mission;

class UsepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);

        $missions = Mission::where('entreprise_id', $user->entreprise->id)->where('status', 5)->orderBy('id', 'DESC')->get();

        
        return view('home', compact('user', 'missions'));
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
     * @param  \App\Http\Requests\StoreUsepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usep  $usep
     * @return \Illuminate\Http\Response
     */
    public function show(Usep $usep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usep  $usep
     * @return \Illuminate\Http\Response
     */
    public function edit(Usep $usep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsepRequest  $request
     * @param  \App\Models\Usep  $usep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsepRequest $request, Usep $usep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usep  $usep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usep $usep)
    {
        //
    }
}
