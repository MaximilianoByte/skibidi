@extends('plantilla')

@section('contenido1')
    @include('reticulas.tablahtml')
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
<form action="{{route('reticulas.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('reticulas.update', $reticula->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('reticulas.destroy', $reticula->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
            <div class="mb-3 row">
            <label for="idreticula" class="col-4 col-form-label">Id reticula:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idreticula" id="idreticula" placeholder="idreticula" value="{{@old('idreticula',$reticula->idreticula)}}" {{$des}}>
                @error("idreticula")
                <p>Error en el idreticula: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="descripcion" class="col-4 col-form-label">Descripcion:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="descripcion" value="{{@old('descripcion',$reticula->descripcion)}}" {{$des}}>
                @error("descripcion")
                <p>Error en el descripcion: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="fechaEnVigor" class="col-4 col-form-label">Fecha en vigor:</label>
            <div class="col-8">
                <input type="date" class="form-control" name="fechaEnVigor" id="fechaEnVigor" placeholder="fechaEnVigor" value="{{@old('fechaEnVigor',$reticula->fechaEnVigor)}}" {{$des}}>
                @error("fechaEnVigor")
                <p>Error en el fechaEnVigor: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="carrera_id" class="col-4 col-form-label">ID CARRERA:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="carrera_id" id="carrera_id" placeholder="carrera_id" value="{{@old('carrera_id',$reticula->carrera_id)}}" {{$des}}>
                @error("carrera_id")
                <p>Error en el carrera_id: {{$message}}</p>
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
