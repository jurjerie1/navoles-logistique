<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Models\User;
use App\Models\Ville;
use App\Models\Mission;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Entreprise_ig;

class AdminController extends Controller
{
    //
    public function home(){
        return view('admin.index');
    }

    public function entreprise(){
        $entreprises = Entreprise::all();
        $patrons = User::where('role_et', 2)->get();
        $i = 0;
        // foreach ($entreprises as $entreprise){
        //     $i++;
        //    $missions = Mission::where('status', 5)->where('entreprise_id', $entreprise->id)->get())];

        // }
        return view('admin.entreprise', compact('entreprises', 'patrons'));
    }

    public function pays(){
        $pays = Pays::all();
        return view('admin.pays-index', compact('pays'));
        dd("ok");
    }
    public function villes(){
        $villes = Ville::all();
        return view('admin.villes', compact('villes'));
        dd("ok");
    }
    public function entreprises(){
        $entreprises = Entreprise_ig::all();
        // $entreprises->load('villes');
        // dd($entreprises);
        return view('admin.entrepriseIg', compact('entreprises'));
        dd("ok");
    }

    public function addVilles(){
        $pays = Pays::all();

        return view('admin.addVilles', compact('pays'));

    }
    public function addEntreprisesig(){
        $villes = Ville::all();

        return view('admin.addEntrepriseIg', compact('villes'));

    }

    public function addPays(){
        // dd('ok');
        return view('admin.addPays');
    }

    public function createPays(Request $request){
        $request->validate([
            'pays' => 'required',
        ]);
        // Pays::create($request->pays);
        $pays = new Pays([
            'name' => $request->get('pays'),
            
            
        ]);
        $pays->save();
        // dd($request);
        session(['type' => 'success']);
        session(['message' => 'Pays ajouté avec succes']);
        // return view('admin.pays-index');
        return redirect()->route('admin.pays');

        // $pays = 
    }
    public function createVilles(Request $request){
        $request->validate([
            'ville' => 'required',
            'pays' => 'required',
        ]);
        // dd($request);
        // Pays::create($request->pays);
        $ville = new Ville([
            'name' => $request->get('ville'),
            'pays_id' => $request->get('pays'),
            
            
        ]);
        $ville->save();
        // dd($request);
        session(['type' => 'success']);
        session(['message' => 'Ville ajouté avec succes']);
        // return view('admin.pays-index');
        return redirect()->route('admin.villes');

        // $pays = 
    }
    public function createEntreprisesIg(Request $request){
        $request->validate([
            'villes' => 'required',
            'entreprise' => 'required',
        ]);
        // dd($request);
        // Pays::create($request->pays);
        $entreprise = new Entreprise_ig([
            'name' => $request->get('entreprise'),
            'villes_id' => $request->get('villes'),
            
            
        ]);
        $entreprise->save();
        // dd($request);
        session(['type' => 'success']);
        session(['message' => 'Entreprise ajouté avec succes']);
        // return view('admin.pays-index');
        return redirect()->route('admin.entreprisesIG');

        // $pays = 
    }
    public function destroyPays(Pays $pays){
        dd($pays);
        $pays->delete();
        session(['type' => 'success']);
        session(['message' => 'Pays suprimé avec succes']);
        return redirect()->route('admin.pays');

    }
    public function destroyEntreprisesIg(Entreprise_ig $entreprise){
        // dd($pays);
        $entreprise->delete();
        session(['type' => 'success']);
        session(['message' => 'Entreprise suprimé avec succes']);
        return redirect()->route('admin.entreprisesIG');

    }
    public function destroyVille(Ville $ville){
        // $ville = Ville::where('id', $ville->id)->get();
        dd($ville);

        $ville->delete();
        session(['type' => 'success']);
        session(['message' => 'Ville suprimé avec succes']);
        return redirect()->route('admin.villes');

    }
}
