@extends('layouts.appmain')
@section('content')
    <main class="pg">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="row">
                        <img src="{{ asset('assets/img/'.$user->img_profil) }}" class="figure-img img-fluid rounded-pill " alt="votre avatar sur le site" height="200">
                    </div>
                    <!-- <div class="row"> -->
                    <div class="row">
                            <div class="col-4">
                                <span>{{ $user->pseudo }}</span>
                            </div>
                            <div class="col-6">
                                <span>{{ $user->email }}</span>
                            </div>
                            
                        </div>
                        <div class="col-6">
                            <span>Camion</span>
                        </div>
                        <div class="col-8">
                            <span>{{ $user->entreprise->name }}</span>
                        </div>
                    
                </div>
                
                
                    
                
                <div class="col-8 flex-center-column">
                @if ($user->role_et > 0)
                    <div class="btt-plateform">
                        <a href="">Gérer mon entreprise</a>
                    </div>
                    <div class="btt-plateform">
                        <a href="">Ajouter une mission</a>
                    </div>
                    <div class="btt-plateform">
                        <a href="">Mes missons </a>
                    </div>
                @endif
                    <div class="btt-plateform">
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </div>


                </div>



            </div>

            <div class="row">
                <div class="col-12 flex-center">
                    <div class="bg-bleu color-white flex-center indication">
                        Les missosns de l'entreprise
                    </div>
                </div>
            </div>

            @foreach ($missions as $mission)
                
            <div class="card text-center">
                <div class="card-header">
                    Livraison
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $mission->user->pseudo }}</h5>
                    <p class="card-text">{{ $mission->dVille }} ---> {{ $mission->aVille }}</p>
                    <p class="card-text">{{ $mission->distence }} KM</p>
                </div>
                <div class="card-footer text-muted">
                    Le {{ $mission->created_at }}
                </div>
            </div>
            @endforeach
            

        </div>
    </main>



@endsection
