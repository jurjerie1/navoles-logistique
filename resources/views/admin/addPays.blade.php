@extends('layouts.appAdmin')
        
@section('content')
<div class="col-6 flex-center edit-from-admin">

                <form class="flex-center" action="{{ route('admin.pays.create') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row contaire-edit g-3 ">
                        <div class="col-md-6">
                            <label for="pays" class="form-label">Nom du pays</label>
                            <input type="text" class="form-control" id="pays" name="pays">
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Ajouter le pays</button>
                        </div>
                    </div>
                </form>
            </div>
@endsection