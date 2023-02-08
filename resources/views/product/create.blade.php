<form action="{{ route('product.store')}}" method="POST">
 @csrf
<p>
  <label for="">Nombre:</label>
  <input type="text" name="name">  
</p>
<p>
  <label for="">Precio</label>
  <input type="number" name="price">
</p>
<p>
  <label for="">País</label>
  <input type="text" name="country">
</p>
<p>
  <button type="submit">Crear</button>
</p>
</form>