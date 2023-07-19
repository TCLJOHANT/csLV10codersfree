
@extends('layouts.plantilla') <!--llamando archivo-->
@section('title','create banda')

@section('content')
<h1>creacion de banda</h1>
<form action="{{route('banda.store')}}" method="POST">
    @csrf
    <label for="">
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
    </label>

     @error('name')
      <br>
      <small>*{{$message }}</small>
      <br>   
     @enderror

    <br>
    <label for="">
        Descripcion
        <textarea name="descripcion">{{old('descripcion')}}</textarea>
    </label>
    
    @error('descripcion')
    <br>
    <small>*{{$message /*viene de resources/lang*/}}</small>
    <br>   
   @enderror
    <br>
    <label for="">
        Categoria
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>
    
    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>   
   @enderror
    <button type="submit">Enviar form</button>


</form>
@endsection
