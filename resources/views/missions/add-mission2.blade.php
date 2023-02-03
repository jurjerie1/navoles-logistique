@extends('layouts.appmain')
@section('content')
<form action="{{ route('missions.part2.create', $mission) }}" method="POST" >
    @csrf
    @method('PUT')


    <main class="pg">
    <div class="container flex-center-column">
        <div class="col-12 flex-center">
            <div class="bg-bleu color-white flex-center indication">
                Ajout de la missions (Après avoir roulé)
                
            </div>
        </div>
    <x-auth-validation-errors class="mb-4 color-red" :errors="$errors" />

        <div class="row add_mission-panel flex-center-column">
            <div class="col-6 ">
                <div class="row">
                    <div class="flex-center">
                        Ajout de frais 
                    </div>
                </div>
                <div class="row">
                    <div class="add_mission-content">
                        <div class="mb-3">
                            <label for="carburant" class="form-label">Carburant</label>
                            <input type="text" class="form-control" name="carburant" placeholder="exemple : 170.2 ou 0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="add_mission-content">
                        <div class="mb-3">
                            <label for="peage" class="form-label">Péage</label>
                            <input type="text" class="form-control" name="peage" placeholder="exemple : 170.2 ou 0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="add_mission-content ">
                        <div class="mb-3">
                            <label for="ammende" class="form-label">Ammende</label>
                            <input type="text" class="form-control" name="ammende" placeholder="exemple : 170.2 ou 0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="add_mission-content ">
                        <div class="mb-3">
                            <label for="autre" class="form-label">Autre</label>
                            <input type="text" class="form-control" name="autre" placeholder="exemple : 170.2 ou 0">
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
        <div class="row add_mission-panel flex-center-column">
            <div class="col-6">
                <div class="add_mission-content">
                    <div class="mb-3">
                        <label for="gttm" class="form-label">Gaint total de la misssion</label>
                        <input type="text" class="form-control" name="gttm" id="gttm" placeholder="exemple : 2000.2 ou 0">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="km" class="form-label">Nombre de Km total</label>
                    <input type="text" class="form-control" id="km" name="km" placeholder="Nombre de KM total">
                </div>
                <div class="mb-3">
                    <label for="com" class="form-label">Commentaire sur la mission</label>
                    <textarea class="form-control" id="com" rows="3" name="com"></textarea>
                </div>
            </div>
        </div>
        <div class="col-12 flex-center ">
            <input type="submit" class="bbt-valider" value="Enregistrer ma mission">
        </div>
    </div>
</main>
    
</form>
 



@endsection
