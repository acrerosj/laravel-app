@extends('master')

@section('title', 'Lista de productos')

@section('content')

<a href="{{ route('product.create')}}">Crear producto</a>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>País</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}€</td>
          <td>{{ $product->country }}</td>
          <td>
            <a href="{{ route('product.show', ['product' => $product])}}">Mostrar</a>
            <a href="{{ route('product.edit', ['product' => $product])}}">Editar</a>
            <form action="{{ route('product.destroy', ['product' => $product])}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Eliminar</button>
            </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection
