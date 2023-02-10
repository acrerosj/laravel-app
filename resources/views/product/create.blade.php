@extends('master')

@section('title', 'Crear producto')

@section('content')

<form action="{{ route('product.store')}}" method="POST">
 @csrf
<p>
  <label for="">Nombre:</label>
  <input type="text" name="name" value="{{ old('name') }}">  
  @error('name')
     <span class="text-danger">{{$message}}</span>
  @enderror
</p>
<p>
  <label for="">Precio</label>
  <input type="number" name="price" step="0.01"  value="{{ old('price') }}">
  @error('price')
    <span class="text-danger">{{$message}}</span>
  @enderror
</p>
<p>
  <label for="">País</label>
  <input type="text" name="country" value="{{ old('country') }}">
  @error('country')
    <span class="text-danger">{{$message}}</span>
  @enderror
</p>
<p>
  <button type="submit">Crear</button>
</p>
</form>
@endsection