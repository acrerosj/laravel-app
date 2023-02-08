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
          </td>
        </tr>
    @endforeach
  </tbody>
</table>