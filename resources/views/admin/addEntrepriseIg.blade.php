@extends('layouts.appAdmin')
        
@section('content')
<div class="col-6 flex-center edit-from-admin">

    
        
        
            
                <form class="flex-center" method="POST" action="{{ route('admin.entreprisesIG.create') }}">
                    @csrf
                    @method('PUT')
                    <div class="row contaire-edit g-3 ">
                    
                    <div class="col-md-4">
                        <label for="ville" class="form-label">Ville</label>
                        <select id="pays" name="villes" class="form-select">
                            @foreach ($villes as $ville)
                                
                        <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                        @endforeach

                        
                        </select>
                    </div>
                        <div class="col-md-6">
                            <label for="entreprise" class="form-label">Entreprise</label>
                            <input type="text" class="form-control" id="entreprise" name="entreprise">
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">modifier</button>
                        </div>
                    </div>
                </form>
            </div>
@endsection