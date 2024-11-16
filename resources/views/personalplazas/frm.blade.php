@extends('plantilla')

@section('contenido1')
    @include('personalplazas.tablahtml')
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
<form action="{{route('personalplazas.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('personalplazas.update', $personalplaza->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('personalplazas.destroy', $personalplaza->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Tipo de Nombramiento:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="tiponombramiento" id="tiponombramiento" placeholder="Nombre del personalplaza" value="{{@old('tiponombramiento',$personalplaza->tiponombramiento)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Plaza ID:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="plaza_id" id="plaza_id" placeholder="Nombre del personalplaza" value="{{@old('plaza_id',$personalplaza->plaza_id)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Personal ID:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="personal_id" id="personal_id" placeholder="Nombre del personalplaza" value="{{@old('personal_id',$personalplaza->personal_id)}}" {{$des}}>
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
