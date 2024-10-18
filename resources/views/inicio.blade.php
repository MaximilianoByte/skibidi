@extends("plantilla")

@section("contenido1")
<h1>Bienvenidos Plomeria Maximus</h1>

<p>
    El mejor sistema de Plomeria en Piedras Negras Coahuila.
</p>


<footer>
    @guest
        
    @endguest
@auth
          <p>
            Usuario: {{ auth()->user()->name }}<br />
            Correo: {{ auth()->user()->email }}
          </p>
        @else
        <a href="">HTML</a> 
        <a href="">PHP</a>
        <a href="">BOOTSTRAP</a>
        <a href="">LARAVEL</a>
        <a href="">CSS</a>
        @endauth
</footer>

@endsection