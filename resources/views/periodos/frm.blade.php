@extends('plantilla')

@section('contenido1')
    @include('periodos.tablahtml')
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
<form action="{{route('periodos.store')}}"method="POST">
@elseif($accion=="E")
<h1>Editando FRM</h1>
<form action="{{route('periodos.update', $periodo->id)}}" method="POST">
    @method("PUT")
    @elseif ($accion == "S")
    <h1>Mostrando/Eliminando FRM</h1>
    <form action="{{route('periodos.destroy', $periodo->id)}}" method="POST">
     @method("DELETE")
    @endif
            @csrf
        <div class="mb-3 row">
            <label for="idperiodo" class="col-4 col-form-label">IDPERIODO:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="idperiodo" id="idperiodo" placeholder="idperiodo del periodo" value="{{@old('idperiodo',$periodo->idperiodo)}}" {{$des}}>
                @error("idperiodo")
                <p>Error en el idperiodo: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="periodo" class="col-4 col-form-label">Periodo:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="periodo" id="periodo" placeholder="periodo del periodo" value="{{@old('periodo',$periodo->periodo)}}" {{$des}}>
                @error("periodo")
                <p>Error en el periodo: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="descCorta" class="col-4 col-form-label">Descripcion Corta:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="descCorta" id="descCorta" placeholder="descCorta del periodo" value="{{@old('descCorta',$periodo->descCorta)}}" {{$des}}>
                @error("descCorta")
                <p>Error en el descCorta: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="fechaIni" class="col-4 col-form-label">Fecha de inicio:</label>
            <div class="col-8">
                <input type="date" class="form-control" name="fechaIni" id="fechaIni" placeholder="fechaIni del periodo" value="{{@old('fechaIni',$periodo->fechaIni)}}" {{$des}}>
                @error("fechaIni")
                <p>Error en el fechaIni: {{$message}}</p>
                @enderror 
            </div>

            <div class="mb-3 row">
            <label for="fechaFin" class="col-4 col-form-label">Fecha Final:</label>
            <div class="col-8">
                <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="fechaFin del periodo" value="{{@old('fechaFin',$periodo->fechaFin)}}" {{$des}}>
                @error("fechaFin")
                <p>Error en el fechaFin: {{$message}}</p>
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
