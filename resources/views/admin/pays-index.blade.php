@extends('layouts.appAdmin')
        
@section('content')
<div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="row">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Action</th>
                        <th scope="col"><a href="{{ route('admin.pays.add') }}" class="btn btn-info">Ajouter</a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pays as $pay)
                        
                    <tr>
                        <th scope="row">{{ $pay->id}}</th>
                        <td>{{ $pay->name }}</td>
                        <td>
                            <a href="edit/pay.php" class="btn btn-primary">Modifier</a>
                            <a href="{{ route('admin.pays.delete', $pay) }}" class="btn btn-danger"> Supprimé</a></td>
                    </tr>
                    @endforeach

                    
                    
                    
                    
                </tbody>
            </table>
            
        </div>
@endsection