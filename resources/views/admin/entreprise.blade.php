@extends('layouts.appAdmin')
        
@section('content')
<div class="col-8 ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">KM</th>
                        <th scope="col">Chiffre d'affaire</th>
                        <th scope="col">Propriétaire</th>
                        <th scope="col">Nombre license</th>
                        <th scope="col">Date début</th>
                        <th scope="col">Date de fin</th>
                        <th scope="col">Action</th>
                        <th scope="col"><a href="" class="btn btn-info">Ajouter</a></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($entreprises as $entreprise)
                        
                    @endforeach
                    <tr>
                        <th scope="row"><a href="">{{ $entreprise->name }}</a></th>
                        <td>NONE</td>
                        <td>NONE</td>
                        <td><a href=""> NONE</a></td>
                        <td>{{ $entreprise->nombre_emplye}}</td>

                        <td>{{ $entreprise->date_creation}}</td>
                        <td>{{ $entreprise->date_fin}}</td>
                        <td>
                            <a href="" class="btn btn-primary">Modifier</a>
                            <a href="" class="btn btn-danger"> Désactiver</a></td>
                    </tr>
                    
                    
                    
                    
                </tbody>
            </table>
            
        </div>
@endsection