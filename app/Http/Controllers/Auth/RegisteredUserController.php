<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usep;
use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\RegisterRequest;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // $inf =
        // $entreprise = Entreprise::find()
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'pseudo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'grade' => ['required', 'integer'],
            //'entreprise' => ['required', 'string', 'max:255'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],[
            'email.unique' => "Ce chauffeur appartient déjà à une entreprise",
            'grade.required' => "Le grade l'employer est requis",
        ]);

        $entreprise = Auth::user()->entreprise_id;
        $create_compte = Str::uuid();
        //dd(Auth::user());
        $user = User::create([
            // 'pseudo' => $request->pseudo,
            'entreprise_id' => $entreprise,
            'email' => $request->email,
            'create_compte' => $create_compte,
            'img_profil' => "pp_de_base.png",
            'role_et' => $request->grade

            // 'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        // return route('home');
        $user = User::where('email', $request->email)->first();
        
        Mail::to($request->email)->send(new RegisterRequest($create_compte, $user->entreprise->name));

        session(['type' => 'success']);
        session(['message' => 'Employer ajouté avec succes']);

        session(['notification' => 'test']);

        return redirect()->route('entreprise..gestion.employe');
    }


    public function edit($token){
        $user = User::with('entreprise')->where('create_compte', $token)->first();//->get
        return view('auth.register', compact('user'));
    }

    public function update(Request $request){
        $token = $request->token;
        $request->validate([
            'pseudo' => ['required', 'string', 'max:255'],
            'pseudoD' => ['required', 'string', 'max:255'],
            'tk' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ],[
           'tk.unique' => "Le profil trucksbook est déjà utilisé",
           'tk.required' => "Le profil trucksbook est obligatoire pour l'inscription",
           'pseudoD.required' => "Le pseudo discord est obligatoire",
        ]);
        $user = User::where('create_compte', $token)->first();


        $user->update([
            'password' => $password = Hash::make($request->password),
            'pseudo' => $request->pseudo,
            'pseudoD' => $request->pseudoD,
            'tk' => $request->tk,
            'create_compte' => 0,
        ]);


        // Auth::login($user);

        return view('auth.login');
    }

    
}
