@extends('master')

@section('title', 'DEW')

@section('content')
    <h2>Listado de módulos</h2>
    <ul>
        @foreach ($modules as $module)
            <li>{{$module['nombre']}}</li>
        @endforeach
    </ul>
@endsection