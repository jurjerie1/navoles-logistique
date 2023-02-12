@extends('layouts.appAdmin')
        
@section('content')
<div class="col-6 flex-center edit-from-admin">

                <form class="flex-center" action="{{ route('admin.villes.update', $ville) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row contaire-edit g-3 ">
                        <div class="">
                            <label for="pays" class="form-label">Pays</label>
                            <input class="form-control" list="datalistOptionsDpays" id="pays" name="pays">
                                
                            <datalist id="datalistOptionsDpays">
                            <option selected name="{{ $ville->pays->id }}" value="{{ $ville->pays->name }}">

                                @foreach ($pays as $pay)
                                <option name="{{ $pay->id }}" value="{{ $pay->name }}">
                                    
                                @endforeach
                                
                            </datalist>
                            <script>
                                var demoInput = document.getElementById('pays'); // give an id to your input and set it as variable
                                demoInput.value ='{{$ville->pays->name}}'; // set default value instead of html attribute
                                
                            </script>
                        </div>
                        <div class="col-md-6">
                            <label for="ville" class="form-label">Nom de la villes</label>
                            <input type="text" class="form-control" id="ville" name="ville" value="{{ $ville->name }}">
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">modifier</button>
                        </div>
                    </div>
                </form>
            </div>
@endsection