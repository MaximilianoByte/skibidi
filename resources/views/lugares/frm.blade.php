@extends('plantilla')

@section('contenido1')
    @include('lugares.tablahtml')
@endsection

@section('contenido2')
    <div class="container">
        <h3>MI FORMULARIO</h3>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        @if($accion == "C")
            <h1>Insertando Lugar</h1>
            <form action="{{ route('lugares.store') }}" method="POST">
        @elseif($accion == "E")
            <h1>Editando Lugar</h1>
            <form action="{{ route('lugares.update', $lugar->id) }}" method="POST">
                @method("PUT")
        @elseif($accion == "S")
            <h1>Mostrando/Eliminando Lugar</h1>
            <form action="{{ route('lugares.destroy', $lugar->id) }}" method="POST">
                @method("DELETE")
        @endif
            @csrf
            <div class="mb-3 row">
                <label for="nombrelugar" class="col-4 col-form-label">Nombre del Lugar:</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nombrelugar" id="nombrelugar" placeholder="Nombre del lugar" value="{{ old('nombrelugar', $lugar->nombrelugar) }}" {{ $des }}>
                    @error("nombrelugar")
                        <p>Error en el nombre del lugar: {{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombrecorto" class="col-4 col-form-label">Nombre Corto:</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nombrecorto" id="nombrecorto" placeholder="Nombre corto del lugar" value="{{ old('nombrecorto', $lugar->nombrecorto) }}" {{ $des }}>
                    @error("nombrecorto")
                        <p>Error en el nombre corto: {{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombrecorto" class="col-4 col-form-label">Edificio:</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="edificio_id" id="edificio_id" placeholder="Nombre corto del lugar" value="{{ old('edificio_id', $lugar->edificio_id) }}" {{ $des }}>
                    @error("edificio_id")
                        <p>Error en el nombre corto: {{ $message }}</p>
                    @enderror
                </div>
            </div>


            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        {{ $txtbtn }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
