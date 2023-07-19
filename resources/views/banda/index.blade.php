@extends('layouts.plantilla') <!--llamando archivo-->
@section('title','index banda')

@section('content')
<h1>main banda</h1>
<a href="{{route('banda.create')}}">Crea nueva banda</a>
<ul>
    @foreach ($banda as $atributo)
        
            <li><a href="{{route('banda.show',$atributo->id)}}">{{$atributo->name}}</a></li>

    @endforeach
</ul>
{{$banda->links()}}
@endsection
