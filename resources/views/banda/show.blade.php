@extends('layouts.plantilla') <!--llamando archivo-->
@section('title','banda '.$banda->name)

@section('content')
<h1>la banda es llamada : {{$banda->name}}</h1>    <!--imprime variable (echo) -->
<a href="{{route('banda.index')}}">volver a bandas</a>
<br>
<a href="{{route('banda.edit',$banda)}}">editar banda</a>
<p><strong>Categoria: </strong>{{$banda->categoria}}</p>

<p>{{$banda->descripcion}}</p>
@endsection


