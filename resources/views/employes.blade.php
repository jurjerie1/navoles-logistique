@extends('layouts.appmain')
@section('content')
<main class="pg">
        <div class="container">
            <div class="row">
                    <div class="col-12 flex-center">
                        <div class="bg-bleu color-white flex-center indication">
                            Les chauffeurs de mon entreprise
                        </div>
                    </div>
                </div>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Pseuod</th>
                            <th scope="col">Email</th>
                            <th scope="col">KM</th>
                            <th scope="col">Chiffre d'affaire</th>
                            <th scope="col">Role</th>
                            <th scope="col">TrucsBook</th>
                            <th scope="col">Action</th>
                            <th scope="col"><a href="{{ route('entreprise.gestion.employe.add') }}" class="btn btn-info">Ajouter</a></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            
                        <tr>
                            <th scope="row">{{ $user->pseudo }}</th>
                            <th scope="row">{{ $user->email }}</th>
                            @php
                                    $revenue_total = 0;
                                    $km_total = 0;
                                @endphp
                                @if (!empty($user->mission))
                                    
                                @foreach ($user->mission as $mission )
                                    @php
                                        $revenue_total += $mission->reveue_tt;
                                        $km_total += $mission->distence;

                                    @endphp
                                @endforeach
                                @else
                                @php
                                        $revenue_total = 0;
                                        $km_total = 0;
                                @endphp

                                @endif

                                
                            <td>{{ $km_total }}</td>
                            <td> {{ $revenue_total }}</td>
                            <td>
                                @switch($user->role_et)
                                    @case(1)
                                    Gestionaire
                                        @break

                                    @case(2)
                                        Patron
                                        @break
                                    
                                    @default
                                        Chauffeur
                                        
                                @endswitch
                                </td>
                            <td><a href="{{ $user->tk }}">TrucsBook </a></td>
                            <td>
                                <a href="{{ route('entreprise.gestion.employe.edit', $user) }}" class="btn btn-primary">Modifier</a>
                                <a href="{{ route('entreprise.gestion.employe.delete', $user) }}" class="btn btn-danger"> Licencié</a></td>
                        </tr>
                        @endforeach

                        
                        
                        
                        
                    </tbody>
                </table>
        </div>
        

        
    </main>



@endsection
