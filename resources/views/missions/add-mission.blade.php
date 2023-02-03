@extends('layouts.appmain')
@section('content')
<form action="{{ route('missions.part1.create') }}" method="POST" >
    @csrf
    @method('PUT')

<main class="pg">
    <x-auth-validation-errors class="mb-4 color-red" :errors="$errors" />

    <div class="container flex-center-column">
        <div class="col-12 flex-center">
            <div class="bg-bleu color-white flex-center indication">
                Ajout de la missions (Etape 1/2)
            </div>
        </div>
        <div class="row add_mission-panel">

            <div class="col-6">
                <div class="row">
                    <div class="flex-center">
                        Dépard
                    </div>
                </div>
                <div class="row">
                    <div class="add_mission-content">
                        <div class="">
                            <label for="dpays" class="form-label">Pays</label>
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

                <div class="row">
                    <div class="">
                        <label for="dville" class="form-label">Ville</label>
                        <input class="form-control" list="datalistOptionsDville" id="dville"
                               placeholder="Type to search..." name="dville">
                        <datalist id="datalistOptionsDville">
                            @foreach ($villes as $ville)
                                <option name="{{ $ville->id }}" value="{{ $ville->name  }}">
                                    
                                @endforeach
                        </datalist>
                    </div>
                </div>

                <div class="row">
                    <div class="">
                        <label for="dentreprise" class="form-label">Entreprise</label>
                        <input class="form-control" list="datalistOptionsDentreprise" id="dentreprise"
                               placeholder="Type to search..." name="dentreprise">
                        <datalist id="datalistOptionsDentreprise">
                            @foreach ($entreprises as $entreprise)
                                <option name="{{ $entreprise->id }}" value="{{ $entreprise->name  }}">
                                    
                                @endforeach
                        </datalist>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="row">
                    <div class="flex-center">
                        Arrivé
                    </div>
                    <div class="row">

                        <div class="">
                            <label for="apays" class="form-label">Pays</label>
                            <input class="form-control" list="datalistOptionsApays" id="apays" name="apays"
                                   placeholder="Type to search...">
                            <datalist id="datalistOptionsApays">
                                @foreach ($pays as $pay)
                                    <option value="{{ $pay->name }}">
                                    
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="row">
                        <div class="">
                            <label for="aville" class="form-label">Ville</label>
                            <input class="form-control" list="datalistOptionsAville" id="aville"
                                   placeholder="Type to search..." name="aville">
                            <datalist id="datalistOptionsAville">
                            @foreach ($villes as $ville)
                                <option name="{{ $ville->id }}" value="{{ $ville->name  }}">
                                    
                                @endforeach
                            </datalist>
                        </div>
                    </div>

                    <div class="row">
                        <div class="">
                            <label for="aentreprise" class="form-label">Entreprise</label>
                            <input class="form-control" list="datalistOptionsAentreprise" id="aentreprise"
                                   placeholder="Type to search..." name="aentreprise">
                            <datalist id="datalistOptionsAentreprise">
                            @foreach ($entreprises as $entreprise)
                                <option name="{{ $entreprise->id }}" value="{{ $entreprise->name  }}">
                                    
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-12 flex-center ">
            <input type="submit" class="bbt-valider" value="Etape suivante">
        </div>

    </div>
</main>
</form>
 



@endsection
