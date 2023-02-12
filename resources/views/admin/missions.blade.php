@extends('layouts.appAdmin')
        
@section('content')
<div class="col-8 ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="col">User</th>
                        <th scope="col">Trucbooks</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col"><a href="{{ route('admin.villes.add') }}" class="btn btn-info">Ajouter</a></th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($missions as $mission )
                        
                    <tr>
                        <th scope="row">{{ $mission->id }}</th>
                        <td>{{ $mission->user->pseudo }}</td>
                        <td><a href="{{ $mission->user->tk }}">TruckBooks</a></td>
                        <td>
                            <?php
                            switch ($mission->status) {
                                case(2):
                                    echo 'En attente de modificacion de l\'user';
                                    break;
                                case(0):
                                    echo 'L\'utilisateur n\'a pas fini de compléter ça mission ';
                                    break;

                                default:
                                    echo 'En attente de validation';
                                    break;

                                    
                            }
                            ?>
                        </td>
                        <td>
                            @if ($mission->status === 1)
                                
                            <a href="{{ route('admin.missions.verify', $mission) }}" class="btn btn-primary">Voir</a>
                            @endif

                        </td>
                    </tr>
                    
                    @endforeach
                    
                    
                    
                    
                </tbody>
            </table>
            
        </div>
@endsection