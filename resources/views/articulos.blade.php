@extends("plantilla2")

@section("derecha")
<h1>ARTICULOS</h1>

@endsection


@section("izquierda")
<div class="list-group">
  <a href="{{route('destapacanos')}}" class="list-group-item list-group-item-action list-group-item-primary">Destapacaños</a>
  <a href="{{route('quimicos')}}" class="list-group-item list-group-item-action list-group-item-primary">Quimicos</a>
  <a href="{{route('herramienta')}}" class="list-group-item list-group-item-action list-group-item-primary">Herramienta</a>
  <a href="{{route('mezcladoras')}}" class="list-group-item list-group-item-action list-group-item-primary">Mezcladoras de baño</a>
  <a href="{{route('tuberias')}}" class="list-group-item list-group-item-action list-group-item-primary">Tuberias</a>
</div>

@endsection

@section("piepagina")

<div class="bg-primary ">
<p>Para consultas llamar al telefeno de Contacto : Contacto</p>
</div>

@endsection