@extends('plantilla')

@section('contenido1')
    @include('deptos.tablahtml')
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
<form action="{{route('deptos.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('deptos.update', $depto->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('deptos.destroy', $depto->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
            <div class="mb-3 row">
            <label for="iddepto" class="col-4 col-form-label">Id Depto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="iddepto" id="iddepto" placeholder="iddepto" value="{{@old('iddepto',$depto->iddepto)}}" {{$des}}>
                @error("iddepto")
                <p>Error en el iddepto: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombredepto" class="col-4 col-form-label">Nombre del Depto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombredepto" id="nombredepto" placeholder="nombredepto" value="{{@old('nombredepto',$depto->nombredepto)}}" {{$des}}>
                @error("nombredepto")
                <p>Error en el nombredepto: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nombremediano" class="col-4 col-form-label">Nombre mediano:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombremediano" id="nombremediano" placeholder="nombremediano" value="{{@old('nombremediano',$depto->nombremediano)}}" {{$des}}>
                @error("nombremediano")
                <p>Error en el nombremediano: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nombrecorto" class="col-4 col-form-label">Nombre corto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="nombrecorto" value="{{@old('nombrecorto',$depto->nombrecorto)}}" {{$des}}>
                @error("nombrecorto")
                <p>Error en el nombrecorto: {{$message}}</p>
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
