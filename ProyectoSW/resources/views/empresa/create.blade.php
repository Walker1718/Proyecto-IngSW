@extends('layout') 
@section('content')
<form action="{{ url('/empresa') }}" method="post" enctype="multipart/form-data">
    @csrf
    <p>
        <label for="nombre"> Ingresa el nombre de la empresa : </label>
        <input type="text" name="nombre" id='nombre'>
        <br>

        <label for="email"> Ingresa email de la empresa : </label>
        <input type="text" name="email" id='email'>
        <br>

        <label for="contacto"> Ingresa el contacto : </label>
        <input type="text" name="contacto" id='contacto'>
        <br>

        <input type="submit" value="enviar" id="enviar">
    </p>

</form>
@endsection