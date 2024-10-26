@extends('plantilla')

@section('contenido1')
    @include('carreras.tablahtml')
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
<form action="{{route('carreras.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('carreras.update', $carrera->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('carreras.destroy', $carrera->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
            <div class="mb-3 row">
            <label for="idcarrera" class="col-4 col-form-label">Id carrera:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idcarrera" id="idcarrera" placeholder="idcarrera" value="{{@old('idcarrera',$carrera->idcarrera)}}" {{$des}}>
                @error("idcarrera")
                <p>Error en el idcarrera: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombrecarrera" class="col-4 col-form-label">Nombre del carrera:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecarrera" id="nombrecarrera" placeholder="nombrecarrera" value="{{@old('nombrecarrera',$carrera->nombrecarrera)}}" {{$des}}>
                @error("nombrecarrera")
                <p>Error en el nombrecarrera: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nombremediano" class="col-4 col-form-label">Nombre mediano:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombremediano" id="nombremediano" placeholder="nombremediano" value="{{@old('nombremediano',$carrera->nombremediano)}}" {{$des}}>
                @error("nombremediano")
                <p>Error en el nombremediano: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nombrecorto" class="col-4 col-form-label">Nombre corto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="nombrecorto" value="{{@old('nombrecorto',$carrera->nombrecorto)}}" {{$des}}>
                @error("nombrecorto")
                <p>Error en el nombrecorto: {{$message}}</p>
                @enderror 
            </div>

            <label for="depto_id" class="col-4 col-form-label">Id Depto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="depto_id" id="depto_id" placeholder="depto_id" value="{{@old('depto_id',$carrera->depto_id)}}" {{$des}}>
                @error("depto_id")
                <p>Error en el depto_id: {{$message}}</p>
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
