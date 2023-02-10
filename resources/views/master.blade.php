<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Larabel App: @yield('title')</title>
  <style>
    .text-danger { color: red; }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="{{route('home')}}">Inicio</a></li>
      <li><a href="{{route('hello')}}">Hola</a></li>
      <li><a href="{{route('module', ['modulo'=>'DSW'])}}">DSW</a></li>
      <li><a href="/module/DEW">DEW</a></li>
      <li><a href="{{route('product.index')}}">Lista de productos</a></li>
    </ul>
  </nav>
  @if($mensaje = Session::get('status'))
    <div>{{ $mensaje }}</div>    
  @endif
  <h1>@yield('title')</h1>
  @yield('content')
</body>
</html>