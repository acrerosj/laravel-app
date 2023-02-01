<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Larabel App: @yield('title')</title>
</head>
<body>
  <nav>
    <ul>
      <li><a href="{{route('home')}}">Inicio</a></li>
      <li><a href="{{route('hello')}}">Hola</a></li>
      <li><a href="{{route('world')}}">Mundo </a></li>
      <li><a href="{{route('module', ['modulo'=>'DSW'])}}">DSW</a></li>
      <li><a href="/module/DEW">DEW</a></li>
    </ul>
  </nav>
  <h1>@yield('title')</h1>
  @yield('content')
</body>
</html>