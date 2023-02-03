@extends('layouts.appAdmin')
        
@section('content')
<div class="col-8 ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Action</th>
                        <th scope="col"><a href="{{ route('admin.entreprisesIg.add') }}" class="btn btn-info">Ajouter</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entreprises as $entreprise)
                        
                    <tr>
                        <th scope="row">{{ $entreprise->id }}</th>
                        <td>{{ $entreprise->name }}</td>
                        <td>{{ $entreprise->villes->name }}</td>
                        <td>{{ $entreprise->villes->pays->name }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('admin.entreprisesIG.delete', $entreprise) }}" class="btn btn-danger"> Supprimer</a></td>
                    </tr>
                    @endforeach
                    
                    
                    
                    
                </tbody>
            </table>
            
        </div>
@endsection