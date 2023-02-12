@extends('layouts.appAdmin')
        
@section('content')
<div class="col-8 ">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Action</th>
                        <th scope="col"><a href="{{ route('admin.villes.add') }}" class="btn btn-info">Ajouter</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($villes as $ville )
                        
                    <tr>
                        <th scope="row">{{ $ville->id }}</th>
                        <td>{{ $ville->name }}</td>
                        <td>{{ $ville->pays->name }}</td>
                        <td>
                            <a href="{{ route('admin.villes.edit', $ville) }}" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('admin.villes.delete', $ville) }}" class="btn btn-danger"> Supprimer</a></td>
                    </tr>
                    @endforeach
                    
                    
                    
                    
                </tbody>
            </table>
            
        </div>
@endsection