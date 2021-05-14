@extends('layout') 
@section('content')
<form action="{{ url('/empresa/'.$empresa->id_empresa) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <p>
        <label for="nombre"> Ingresa el nombre de la empresa : </label>
        <input type="text" name="nombre" id='nombre' value="{{ $empresa->nombre }}">
        <br>

        <label for="email"> Ingresa email de la empresa : </label>
        <input type="text" name="email" id='email'  value="{{ $empresa->email }}">
        <br>

        <label for="contacto"> Ingresa el contacto : </label>
        <input type="text" name="contacto" id='contacto' value="{{ $empresa->contacto }}">
        <br>

        <input type="submit" value="enviar" id="enviar">
    </p>

</form>
@endsection