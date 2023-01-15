<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Usep;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            // 'pseudo' => $request->pseudo,
            'email' => $request->email,
            // 'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        // return 
    }


    public function edit($token){
        $user = User::where('create_compte', $token)->get();
        // dd($user);
        return view('auth.register', compact('user'));
    }

    public function update(Request $request, $token){
        dd("test");

        $request->validate([
            'pseudo' => ['required', 'string', 'max:255'],
            'pseudoD' => ['required', 'string', 'max:255'],
            'tk' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);
        $user = User::where('create_compte', $token);
        dd($user);

        $user->update([
            'pseudo' => $request->pseudo,
            'pseudoD' => $request->pseudoD,
            'tk' => $request->tk,
            // 'pseudoD' => $request->,
            
            'password' => Hash::make($request->password),
        ]);

        $user->save();
        dd($request);

        return view('login');
    }
}
