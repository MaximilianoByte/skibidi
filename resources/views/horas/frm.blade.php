@extends('plantilla')

@section('contenido1')
    @include('horas.tablahtml')
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
<form action="{{route('horas.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('horas.update', $hora->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('horas.destroy', $hora->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Hora de Inicio:</label>
            <div class="col-8">
                <input type="time" class="form-control" name="hora_ini" id="hora_ini" placeholder="Nombre del hora" value="{{@old('hora_ini',$hora->hora_ini)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Hora de Final:</label>
            <div class="col-8">
                <input type="time" class="form-control" name="hora_fin" id="hora_fin" placeholder="Nombre del hora" value="{{@old('hora_fin',$hora->hora_fin)}}" {{$des}}>
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
