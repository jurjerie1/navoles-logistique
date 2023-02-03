@extends('layouts.appmain')
@section('content')
    <main class="pg container flex-center-column">
        <x-auth-validation-errors class="mb-4 color-red" :errors="$errors" />

        <form method="Post" action="{{ route('entreprise.gestion.employe.gestion') }}">
            @csrf
            @method('Put')
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-3 ">
                <select class="form-select" name="grade" value="{{ $user->role_et }}" >
                    <option selected>Selectioner le grade</option>
                    <option value="0">Employé</option>
                    <option value="1">Gérant</option>
                </select>
            </div>
            
            <a href="{{ route('entreprise..gestion.employe') }}" class="btn btn-danger"> Anuler</a>
            <button type="submit" class="btn btn-primary">Ajouter le chauffeur</button>
        </form>


    </main>

@endsection
