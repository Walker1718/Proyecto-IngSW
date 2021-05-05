@extends('layout')

@section('content')
    <form action="{{ url('/perfil/'.$perfil->id_perfil) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <label for="procesador"> Ingresa el procesador : </label>
        <input type="text" value="{{ $perfil->procesador }}" name="procesador" id='procesador'>
        <br>
        <label for="ram"> Ingresa el ram : </label>
        <input type="text" value="{{ $perfil->ram }}" name="ram" id='ram'>
        <br>
        <label for="hdd"> Ingresa el hdd : </label>
        <input type="text" value="{{ $perfil->hdd }}" name="hdd" id='hdd'>
        <br>
        <label for="dvd"> Ingresa el dvd : </label>
        <input type="text" value="{{ $perfil->dvd }}" name="dvd" id='dvd'>
        <br>
        <label for="tarjeta_sonido"> Ingresa el tarjeta_sonido : </label>
        <input type="text" value="{{ $perfil->tarjeta_sonido }}" name="tarjeta_sonido" id='tarjeta_sonido'>
        <br>
        <label for="tarjeta_grafica"> Ingresa el tarjeta_grafica : </label>
        <input type="text" value="{{ $perfil->tarjeta_grafica }}" name="tarjeta_grafica" id='tarjeta_grafica'>
        <br>
        <label for="tarjeta_red"> Ingresa el tarjeta_red : </label>
        <input type="text" value="{{ $perfil->tarjeta_red }}" name="tarjeta_red" id='tarjeta_red'>
        <br>
        <label for="teclado"> Ingresa el teclado : </label>
        <input type="text" value="{{ $perfil->teclado }}" name="teclado" id='teclado'>
        <br>
        <label for="monitor"> Ingresa el monitor : </label>
        <input type="text" value="{{ $perfil->monitor }}" name="monitor" id='monitor'>
        <br>
        <label for="gabinete"> Ingresa el gabinete : </label>
        <input type="text" value="{{ $perfil->gabinete }}" name="gabinete" id='gabinete'>
        <br>
        <label for="mouse"> Ingresa el mouse : </label>
        <input type="text" value="{{ $perfil->mouse }}" name="mouse" id='mouse'>
        <br>
        <label for="fuente_poder"> Ingresa el fuente_poder : </label>
        <input type="text" value="{{ $perfil->fuente_poder }}" name="fuente_poder" id='fuente_poder'>
        <br>
        <label for="velocidad_hd"> Ingresa el velocidad_hd : </label>
        <input type="text" value="{{ $perfil->velocidad_hd }}" name="velocidad_hd" id='velocidad_hd'>
        <br>
        <label for="bajo_impacto_acustico"> Ingresa el bajo_impacto_acustico 1 o 0! : </label>
        <input type="text" value="{{ $perfil->bajo_impacto_acustico }}" name="bajo_impacto_acustico"
            id='bajo_impacto_acustico'>
        <br>

        <input type="submit" value="Guardar" id="enviar">
    </form>

@endsection
