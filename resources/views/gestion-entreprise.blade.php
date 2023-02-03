@extends('layouts.appmain')
@section('CSS')

@endsection
@section('content')
<main class="pg">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="row">
                        <img src="{{ asset('assets/img/logo-navoles-logistique.png') }}" class="figure-img img-fluid rounded" alt="..." height="200">
                    </div>
                    <!-- <div class="row"> -->
                    <div class="row">
                            <div class="indication-solde bg-bleu col-12 color-white flex-center">
                                <span>{{ $user->entreprise->name }}</span>
                            </div>
                            <div class="indication-solde bg-bleu col-12 color-white flex-center">
                                <span>Nombre total de menbre(s) : {{ $total_members }} </span>
                            </div>
                            <div class="indication-solde bg-bleu col-12 color-white flex-center">
                                Solde de l'entreprise     :    {{ $solde_entreprise }} €
                            </div>
                            <!-- <div class="indication-solde bg-bleu col-12 color-white flex-center">
                                Capital de l'entreprise        XXXXXXXXXXX
                            </div> -->
                            
                    </div>
                        
                    
                </div>
                <div class="col-8 flex-center-column">
                    <div class="btt-plateform col-12">
                        <a href="">Gestion des chauffeurs</a>
                    </div>
                    <div class="btt-plateform col-12">
                        <a href="">Gestion des camions</a>
                    </div>
                    <div class="btt-plateform col-12">
                        <a href="" class="color-red">Suprimer l'entreprise </a>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-12 flex-center">
                    <div class="bg-bleu color-white flex-center indication">
                        Le top 10 des chauffeurs
                    </div>
                </div>
            </div>
            <div class="col-12 flex-center">

                <div class="card col-6">
                    <div class="card-header flex-center">
                        1er
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 flex-center">
                        <p>Jurjerie 100 002 KM</p>
                        </blockquote>
                    </div>
                </div>
            </div>
            

            

        </div>
    </main> 



@endsection
