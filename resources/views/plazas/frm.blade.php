@extends('plantilla')

@section('contenido1')
    @include('plazas.tablahtml')
@endsection

@section('contenido2')
    
    <div class="container">
<h3>MI FORMULARIO</h3>
<ul> 
    @foreach ($errors->all() as $error)
    <li>
        {{$error}}
    </li>
    @endforeach
</ul>
@if($accion == "C")
<h1>Insertando FRM</h1>
<form action="{{route('plazas.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('plazas.update', $plaza->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('plazas.destroy', $plaza->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre Plaza:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrePlaza" id="nombrePlaza" placeholder="Nombre del plaza" value="{{@old('nombrePlaza',$plaza->nombrePlaza)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>



        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">
                        {{$txtbtn}}
                </button>
            </div>
        </div>
    </form>
    </div>
@endsection
