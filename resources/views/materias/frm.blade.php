@extends('plantilla')

@section('contenido1')
    @include('materias.tablahtml')
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
<form action="{{route('materias.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('materias.update', $materia->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('materias.destroy', $materia->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
            <div class="mb-3 row">
            <label for="idmateria" class="col-4 col-form-label">Id materia:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idmateria" id="idmateria" placeholder="idmateria" value="{{@old('idmateria',$materia->idmateria)}}" {{$des}}>
                @error("idmateria")
                <p>Error en el idmateria: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombreMateria" class="col-4 col-form-label">Nombre de la materia:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreMateria" id="nombreMateria" placeholder="nombreMateria" value="{{@old('nombreMateria',$materia->nombreMateria)}}" {{$des}}>
                @error("nombreMateria")
                <p>Error en el nombreMateria: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nivel" class="col-4 col-form-label">Nivel:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nivel" id="nivel" placeholder="nivel" value="{{@old('nivel',$materia->nivel)}}" {{$des}}>
                @error("nivel")
                <p>Error en el nivel: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nombreMediano" class="col-4 col-form-label">Nombre Mediano:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreMediano" id="nombreMediano" placeholder="nombreMediano" value="{{@old('nombreMediano',$materia->nombreMediano)}}" {{$des}}>
                @error("nombreMediano")
                <p>Error en el nombreMediano: {{$message}}</p>
                @enderror 
            </div>

            <label for="nombreCorto" class="col-4 col-form-label">Nombre Corto:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombreCorto" id="nombreCorto" placeholder="nombreCorto" value="{{@old('nombreCorto',$materia->nombreCorto)}}" {{$des}}>
                @error("nombreCorto")
                <p>Error en el nombreCorto: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="modalidad" class="col-4 col-form-label">Modalidad:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="modalidad" id="modalidad" placeholder="modalidad" value="{{@old('modalidad',$materia->modalidad)}}" {{$des}}>
                @error("modalidad")
                <p>Error en el modalidad: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="fechaEnVigor" class="col-4 col-form-label">Fecha en vigor:</label>
            <div class="col-8">
                <input type="date" class="form-control" name="fechaEnVigor" id="fechaEnVigor" placeholder="fechaEnVigor" value="{{@old('fechaEnVigor',$materia->fechaEnVigor)}}" {{$des}}>
                @error("fechaEnVigor")
                <p>Error en el fechaEnVigor: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="semestre" class="col-4 col-form-label">Semestre:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="semestre" id="semestre" placeholder="semestre" value="{{@old('semestre',$materia->semestre)}}" {{$des}}>
                @error("semestre")
                <p>Error en el semestre: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="reticula_id" class="col-4 col-form-label">Id reticula:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="reticula_id" id="reticula_id" placeholder="reticula_id" value="{{@old('reticula_id',$materia->reticula_id)}}" {{$des}}>
                @error("reticula_id")
                <p>Error en el reticula_id: {{$message}}</p>
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
