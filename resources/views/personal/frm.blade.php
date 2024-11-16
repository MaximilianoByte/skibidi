@extends('plantilla')

@section('contenido1')
    @include('personal.tablahtml')
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
<form action="{{route('personal.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('personal.update', $personal->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('personal.destroy', $personal->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
            
        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">RFC:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="RFC" id="RFC" placeholder="Nombre del personal" value="{{@old('RFC',$personal->RFC)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Nombres:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre del personal" value="{{@old('nombres',$personal->nombres)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Apellido Paterno:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="Nombre del personal" value="{{@old('apellidop',$personal->apellidop)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Apellido Materno:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="Nombre del personal" value="{{@old('apellidom',$personal->apellidom)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Licenciatura:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="licenciatura" id="licenciatura" placeholder="Nombre del personal" value="{{@old('licenciatura',$personal->licenciatura)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>
            
            <div class="mb-3 row">
    <label for="lictit" class="col-4 col-form-label">LICTIT:</label>
    <div class="col-8">
        <input type="checkbox" name="lictit" id="lictit" value="1" {{ old('lictit', $personal->lictit) == 1 ? 'checked' : '' }} {{$des}}>
        @error("lictit")
            <p>Error en LICTIT: {{$message}}</p>
        @enderror
    </div>
</div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Especializacion:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="especializacion" id="especializacion" placeholder="Nombre del personal" value="{{@old('especializacion',$personal->especializacion)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
    <label for="esptit" class="col-4 col-form-label">ESPTIT:</label>
    <div class="col-8">
        <input type="checkbox" name="esptit" id="esptit" value="1" {{ old('esptit', $personal->esptit) == 1 ? 'checked' : '' }} {{$des}}>
        @error("esptit")
            <p>Error en ESPTIT: {{$message}}</p>
        @enderror
    </div>
</div>

            <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Maestria:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="maestria" id="maestria" placeholder="Nombre del personal" value="{{@old('maestria',$personal->maestria)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

     
            <div class="mb-3 row">
    <label for="maetit" class="col-4 col-form-label">MAETIT:</label>
    <div class="col-8">
        <input type="checkbox" name="maetit" id="maetit" value="1" {{ old('maetit', $personal->maetit) == 1 ? 'checked' : '' }} {{$des}}>
        @error("maetit")
            <p>Error en MAETIT: {{$message}}</p>
        @enderror
    </div>
</div>


            <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Doctorado:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="doctorado" id="doctorado" placeholder="Nombre del personal" value="{{@old('doctorado',$personal->doctorado)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
    <label for="doctit" class="col-4 col-form-label">DOCTIT:</label>
    <div class="col-8">
        <input type="checkbox" name="doctit" id="doctit" value="1" {{ old('doctit', $personal->doctit) == 1 ? 'checked' : '' }} {{$des}}>
        @error("doctit")
            <p>Error en DOCTIT: {{$message}}</p>
        @enderror
    </div>
</div>


        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Fecha ING SEP:</label>
            <div class="col-8">
                <input type="date" class="form-control" name="fechaingsep" id="fechaingsep" placeholder="Nombre del personal" value="{{@old('fechaingsep',$personal->fechaingsep)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Fecha ING INS:</label>
            <div class="col-8">
                <input type="date" class="form-control" name="fechaingins" id="fechaingins" placeholder="Nombre del personal" value="{{@old('fechaingins',$personal->fechaingins)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Depto ID:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="depto_id" id="depto_id" placeholder="Nombre del personal" value="{{@old('depto_id',$personal->depto_id)}}" {{$des}}>
                @error("nombre")
                <p>Error en el nombre: {{$message}}</p>
                @enderror 
            </div>

        <div class="mb-3 row">
            <label for="nombre" class="col-4 col-form-label">Puesto ID:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="puesto_id" id="puesto_id" placeholder="Nombre del personal" value="{{@old('puesto_id',$personal->puesto_id)}}" {{$des}}>
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
