@extends('plantilla')

@section('contenido1')
    @include('alumnos.tablahtml')
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
<form action="{{route('alumnos.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('alumnos.update', $alumno->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
        <div class="mb-3 row">
            <label for="noctrl" class="col-4 col-form-label">Numero de control:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="noctrl" id="noctrl" placeholder="noctrl del alumno" value="{{@old('noctrl',$alumno->noctrl)}}" {{$des}}>
                @error("noctrl")
                <p>Error en el noctrl: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombre alumno:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del alumno" value="{{@old('nombre',$alumno->nombre)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="apellido" class="col-4 col-form-label">Apellido Paterno:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Nombre del alumno" value="{{@old('apellido',$alumno->apellido)}}" {{$des}}>
                @error("apellido")
                <p>Error en el apellido paterno: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="apellidom" class="col-4 col-form-label">Apellido Materno:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="Nombre del alumno" value="{{@old('apellidom',$alumno->apellidom)}}" {{$des}}>
                @error("apellidom")
                <p>Error en el apellido materno: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="sexo" class="col-4 col-form-label">Sexo:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="sexo" id="sexo" placeholder="Nombre del alumno" value="{{@old('sexo',$alumno->sexo)}}" {{$des}}>
                @error("sexo")
                <p>Error en el sexo: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="email" class="col-4 col-form-label">Email:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="Nombre del alumno" value="{{@old('email',$alumno->email)}}" {{$des}}>
                @error("email")
                <p>Error en el email: {{$message}}</p>
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
