
@extends('layouts.plantilla') <!--llamando archivo-->
@section('title','create banda')

@section('content')
<h1>creacion de banda</h1>
<form action="{{route('banda.store')}}" method="POST">
    @csrf
    <label for="">
        Nombre:
        <input type="text" name="name">
    </label>
    <br>
    <label for="">
        Descripcion
        <textarea name="descripcion"></textarea>
    </label>
    <br>
    <label for="">
        Categoria
        <input type="text" name="categoria">
    </label>
    <button type="submit">Enviar form</button>


</form>
@endsection
