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
    @include("menu")
    </div>
  </div>
  <div class="row">
  <div class="col-3">
  @yield("izquierda")
  </div>
  <div class="col-9">
  @yield("derecha")
  </div>
  
  </div>

  <div class="row">
@yield("piepagina")
  </div>

</div>

</html>