@extends('plantilla')

@section('contenido1')
    @include('edificios.tablahtml')
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
<form action="{{route('edificios.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('edificios.update', $edificio->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('edificios.destroy', $edificio->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre del Edificio:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreedificio" id="nombreedificio" placeholder="Nombre del edificio" value="{{@old('nombreedificio',$edificio->nombreedificio)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre Corto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="Nombre del edificio" value="{{@old('nombrecorto',$edificio->nombrecorto)}}" {{$des}}>
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
