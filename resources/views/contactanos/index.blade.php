@extends('layouts.plantilla') <!--llamando archivo-->
@section('title','Contactanos')


@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="post">
        @csrf
        <label for="">
            Nombre
            <br>
            <input type="text" name="nombre">
        </label>
        @error('nombre')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label for="">
            Correo
            <br>
            <input type="text" name="correo">

        </label>
        @error('correo')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <label for="">
            Mensaje
            <br>
            <textarea name="mensaje"  rows="4"></textarea>
        </label>
        @error('mensaje')
        <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button type="submit">Enviar mensaje</button>
    </form>
    @if (session('info'))
    <script>
        alert("{{session('info')}}")
    </script>
    @endif
@endsection
