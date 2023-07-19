
@extends('layouts.plantilla') <!--llamando archivo-->
@section('title','create banda')

@section('content')
<h1>editar de banda</h1>
<form action="{{route('banda.update',$banda)}}" method="POST">
    @csrf
    @method('put') <!--para que laravel entienda que va por put-->
    <label for="">
        Nombre:
        <input type="text" name="name" value="{{$banda->name}}">
    </label>
    <br>
    <label for="">
        Descripcion
        <textarea name="descripcion" >{{$banda->descripcion}}</textarea>
    </label>
    <br>
    <label for="">
        Categoria
        <input type="text" name="categoria" value="{{$banda->categoria}}">
    </label>
    <button type="submit">Actualizar form</button>


</form>
@endsection
