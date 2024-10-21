@extends('plantilla')

@section('contenido1')
    @include('puestos.tablahtml')
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
<form action="{{route('puestos.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('puestos.update', $puesto->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('puestos.destroy', $puesto->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre Puesto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del puesto" value="{{@old('nombre',$puesto->nombre)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="tipo" class="col-4 col-form-label">Tipo de Puesto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="tipo del puesto" value="{{@old('tipo',$puesto->tipo)}}" {{$des}}>
                @error("tipo")
                <p>Error en el tipo: {{$message}}</p>
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
