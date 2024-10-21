<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Plomeria</title>
    @vite(['resources/js/app.js'])
</head>
<body>

       
</body>

<div class="container text-center">
  <div class="row">
    <div class="col">
      @guest
      @include("menu")
      @endguest

      @auth
      @include("menu2")
      @csrf
      @endauth
   
    </div>
  </div>
  <div class="row">
  <div class="col">
  @yield("contenido2")
  </div>
  
  </div>

  <div class="row">
  <div class="col">
  @yield("contenido1")
  </div>
  
  </div>

</div>
</html>