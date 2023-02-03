@extends('layouts.appAdmin')
        
@section('content')
<div class="col-6 flex-center edit-from-admin">

                <form class="flex-center" action="{{ route('admin.villes.create') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row contaire-edit g-3 ">
                    <div class="col-md-4">
                        <label for="pays" class="form-label">Pays</label>
                        <select id="pays" class="form-select" name='pays'>
                        @foreach ($pays as $pay)
                                
                        <option value="{{ $pay->id }}">{{ $pay->name }}</option>
                        @endforeach

                        </select>
                    </div>
                        <div class="col-md-6">
                            <label for="ville" class="form-label">Nom de la villes</label>
                            <input type="text" class="form-control" id="ville" name="ville">
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">modifier</button>
                        </div>
                    </div>
                </form>
            </div>
@endsection