@extends('layouts.appAdmin')
        
@section('content')
<div class="col-3 flex-center-column edit-from-admin">
<x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class=" flex-center pd-12 mb-5">
        <a href="{{ $mission->user->tk }}" class="btn btn-primary" target="_blank">Voir le truckbooks</a>
    </div>
    <div class="mb-3">
        <label for="User" class="form-label">Pseudo</label>
        <input type="text" class="form-control" disabled id="User" value="{{ $mission->user->pseudo }}">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Pays de dépard</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->dPays }}">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Ville de dépard</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->dVille }}">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Entreprise de dépard</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->dEntreprise }}">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Pays d'arrivé</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->aPays }}">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Ville d'arrivé</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->aVille }}">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Entreprise d'arrivé</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->aEntreprise }}">
    </div>
</div>
<div class="col-3 flex-center-column">
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Carburan</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->essence }} €">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Péage</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->peage }} €">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Distence total du trajet</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->distence }} KM">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Revenue de la mission</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->reveue_tt }} €">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Ammende</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->ammende }} €">
    </div>
    <div class="mb-3">
        <label for="Truckboock" class="form-label">Autre dépense</label>
        <input type="text" class="form-control" disabled id="Truckboock" value="{{ $mission->autre }}">
    </div>
    <div class="mb-3 d-flex flex-column">
    <button type="button" class="btn btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Demander à l'utilsateur une correction
    </button>
    <a href="{{ route('admin.missions.valide', $mission) }}" class="btn btn-success ">Valider la mission</a>

    <!-- <a href="route('admin.missions.demandeVerifUser', $mission)" class="btn btn-warning" target="_blank">Demande de modification</a> -->

    </div>

</div>
<!-- Modal -->
<form method="POST" action="{{route('admin.missions.demandeVerifUser', $mission)}}">
    @csrf
    @method('PUT')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Demande de modification information mission</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
            <label for="justification" class="form-label">Justification et champs à modifier</label>
            <textarea class="form-control" name="justification" id="exampleFormControlTextarea1" rows="3" require :value="old('justification')"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary" >Envoyer la demande de modification</button>
      </div>
    </div>
  </div>
</div>
</form>


@endsection