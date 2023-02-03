@extends('layouts.appmain')
@section('content')
<main class="pg">
        <div class="container">
            <div class="row">
                <div class="col-12 flex-center">
                    <div class="bg-bleu color-white flex-center indication">
                        Les missosns en attentes de validation
                    </div>
                </div>
            </div>
            @foreach ($missions_attente as $missionAD)
                
            <div class="card text-center">
                <div class="card-header">
                    Livraison [En attentes de validation]
                </div>
                <div class="card-body flex-center-column">
                    <h5 class="card-title">{{ $missionAD->distence }} Km</h5>
                    <p class="card-text">{{ $missionAD->dVille }} ---> {{ $missionAD->dVille }}</p>
                    <!-- <p class="card-text">3h12</p> -->
                </div>
                <div class="card-footer text-muted">
                    Le {{ $missionAD->created_at }}
                </div>
            </div>
            @endforeach

            <div class="row">
                <div class="col-12 flex-center">
                    <div class="bg-bleu color-white flex-center indication">
                        Les missosns validatées
                    </div>
                </div>
            </div>

            @foreach ($missions_add as $missionADD)
                
            <div class="card text-center">
                <div class="card-header">
                    Livraison [Validée]
                </div>
                <div class="card-body flex-center-column">
                    <h5 class="card-title">{{ $missionADD->distence }} Km</h5>
                    <p class="card-text">{{ $missionADD->dVille }} ---> {{ $missionADD->dVille }}</p>
                    <!-- <p class="card-text">3h12</p> -->
                </div>
                <div class="card-footer text-muted">
                    Le {{ $missionADD->created_at }}
                </div>
            </div>
            @endforeach
            

        </div>
    </main>


 



@endsection
