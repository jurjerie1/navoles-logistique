@extends('layouts.appmain')
        
@section('content')
<form action="{{ route('missions.update', $mission) }}" method="POST">
    @csrf
    @method('PUT')
<div class="container alert alert-primary col-4 mt-12" role="alert">
        Tu peux vérifier les informations sur ton profil truckBoocks juste <a href="{{ $mission->user->tk }}" class="blue" style="color:blue">ici</a>.
    </div>
<div class="col-12 flex-center mt-12">
    
    <div class="col-3 flex-center-column edit-from-admin">
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="mb-3">
            <div class="add_mission-content">
                <div class="">
                    <label for="dpays" class="form-label">Pays de dépard</label>
                    <input class="form-control" list="datalistOptionsDpays" id="dpays" name="dpays"
                            placeholder="Type to search...">
                    <datalist id="datalistOptionsDpays">
                        @foreach ($pays as $pay)
                        <option name="{{ $pay->id }}" value="{{ $pay->name }}">
                            
                            
                        @endforeach
                        
                    </datalist>
                </div>
            </div>
        </div>
        <div class="mb-3">
            
            <div class="add_mission-content">
                <div class="">
                    <label for="dville" class="form-label">Ville de dépard</label>
                    <input class="form-control" list="datalistOptionsDville" id="dville" name="dville"
                            placeholder="Type to search...">
                    <datalist id="datalistOptionsDVille">
                        @foreach ($villes as $ville)
                        <option name="{{ $ville->id }}" value="{{ $ville->name }}">
                            
                            
                        @endforeach
                        
                    </datalist>
                </div>
            </div>
        
        </div>
        <div class="mb-3">
            
            <div class="add_mission-content">
                <div class="">
                    <label for="dentreprise" class="form-label">Entreprise de dépard</label>
                    <input class="form-control" list="datalistOptionsaentreprise" id="dentreprise" name="dentreprise"
                            placeholder="Type to search...">
                    <datalist id="datalistOptionsaentreprise">
                        @foreach ($entreprises as $entreprise)
                        <option name="{{ $entreprise->id }}" value="{{ $entreprise->name }}">
                            
                            
                        @endforeach
                        
                    </datalist>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="add_mission-content">
                <div class="">
                    <label for="apays" class="form-label">Pays d'arrivé</label>
                    <input class="form-control" list="datalistOptionsDpays" id="apays" name="apays"
                            placeholder="Type to search...">
                    
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="Truckboock" class="form-label">Ville d'arrivé</label>
            <input class="form-control" list="datalistOptionsDville" id="aville" name="aville"
                            placeholder="Type to search...">
        </div>
        <div class="mb-3">
            <label for="Truckboock" class="form-label">Entreprise d'arrivé</label>
            <input class="form-control" list="datalistOptionsaentreprise" id="aentreprise" name="aentreprise">

        </div>
    </div>
    <div class="col-3 flex-center-column">
        <div class="mb-3">
            <label for="carburant " class="form-label">Carburan</label>
            <input type="text" class="form-control"  id="carburant " value="{{ $mission->essence }}" name="carburant">
        </div>
        <div class="mb-3">
            <label for="peage" class="form-label">Péage</label>
            <input type="text" class="form-control"  id="peage" value="{{ $mission->peage }}" name="peage">
        </div>
        <div class="mb-3">
            <label for="km" class="form-label">Distence total du trajet (en KM)</label>
            <input type="text" class="form-control"  id="km" value="{{ $mission->distence }} " name="km">
        </div>
        <div class="mb-3">
            <label for="Truckboock" class="form-label">Revenue de la mission</label>
            <input type="text" class="form-control"  id="gttm" value="{{ $mission->reveue_tt }}" name="gttm">
        </div>
        <div class="mb-3">
            <label for="Truckboock" class="form-label">Ammende</label>
            <input type="text" class="form-control"  id="Truckboock" value="{{ $mission->ammende }}" name="ammende">
        </div>
        <div class="mb-3">
            <label for="Truckboock" class="form-label">Autre dépense</label>
            <input type="text" class="form-control"  id="Truckboock" value="{{ $mission->autre }}" name="autre">
        </div>
        

    </div>
    
</div>
<div class="container col-4 mb-3 d-flex flex-column">
    <input type="submit" class="btn btn-success" value="Valider les informations">
        
        <!-- <button type="submit" class="btn btn-success" value="Valider les informations" >: -->
            <!-- <input type="text" value=""> -->

        <!-- <a href="route('admin.missions.demandeVerifUser', $mission)" class="btn btn-warning" target="_blank">Demande de modification</a> -->

        </div>
</form>

<script>
    var demoInput = document.getElementById('dpays'); // give an id to your input and set it as variable
    demoInput.value ='{{ $mission->dPays }}'; // set default value instead of html attribute

    var demoInput = document.getElementById('apays'); 
    demoInput.value ='{{ $mission->aPays }}'; 

    var demoInput = document.getElementById('dville'); 
    demoInput.value ='{{ $mission->dVille }}'; 
    var demoInput = document.getElementById('aville'); 
    demoInput.value ='{{ $mission->aVille }}'; 

    var demoInput = document.getElementById('dentreprise'); 
    demoInput.value ='{{ $mission->dEntreprise }}';  
    var demoInput = document.getElementById('aentreprise'); 
    demoInput.value ='{{ $mission->aEntreprise }}';  
    
</script>

@endsection