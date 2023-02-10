@extends('master')

@section('title', 'Modificar producto: ' . $product->name)

@section('content')

<form action="{{ route('product.update', $product)}}" method="POST">
 @csrf
 @method('PUT')
<p>
  <label for="">Nombre:</label>
  <input type="text" name="name" value="{{ old('name', $product->name)}}">  
  @error('name')
    <span class="text-danger">{{$message}}</span>
  @enderror
</p>
<p>
  <label for="">Precio</label>
  <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}">
  @error('price')
    <span class="text-danger">{{$message}}</span>
  @enderror
</p>
<p>
  <label for="">País</label>
  <input type="text" name="country" value="{{ old('country', $product->country) }}">
  @error('country')
    <span class="text-danger">{{$message}}</span>
  @enderror
</p>
<p>
  <button type="submit">Modificar</button>
</p>
</form>
@endsection