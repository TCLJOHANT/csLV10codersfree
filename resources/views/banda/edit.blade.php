
@extends('layouts.plantilla') <!--llamando archivo-->
@section('title','create banda')

@section('content')
<h1>editar de banda</h1>
<form action="{{route('banda.update',$banda)}}" method="POST">
    @csrf
    @method('put') <!--para que laravel entienda que va por put-->
    <label for="">
        Nombre:
        <input type="text" name="name" value="{{old('name',$banda->name)}}">
    </label>
    
    @error('name')
    <br>
    <small>*{{$message }}</small>
    <br>   
   @enderror

    <br>
    <input type="hidden" name="slug" value="slug">
    <label for="">
        Descripcion
        <textarea name="descripcion" >{{old('descripcion',$banda->descripcion)}}</textarea>
    </label>
    @error('descripcion')
    <br>
    <small>*{{$message /*viene de resources/lang*/}}</small>
    <br>   
   @enderror
    <br>
    <label for="">
        Categoria
        <input type="text" name="categoria" value="{{old('categoria',$banda->categoria)}}">
    </label>
    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>   
   @enderror
    <button type="submit">Actualizar form</button>


</form>
@endsection
