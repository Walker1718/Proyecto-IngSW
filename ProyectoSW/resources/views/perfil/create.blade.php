<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <form action="{{ url('/perfil') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p>
            <label for="id_perfil"> Ingresa el id de Perfil : </label>
            <input type="text" name="id_perfil" id='id_perfil'>
            <br>
            <label for="procesador"> Ingresa el procesador : </label>
            <input type="text" name="procesador" id='procesador'>
            <br>
            <label for="ram"> Ingresa el ram : </label>
            <input type="text" name="ram" id='ram'>
            <br>
            <label for="hdd"> Ingresa el hdd : </label>
            <input type="text" name="hdd" id='hdd'>
            <br>
            <label for="dvd"> Ingresa el dvd : </label>
            <input type="text" name="dvd" id='dvd'>
            <br>
            <label for="tarjeta_sonido"> Ingresa el tarjeta_sonido : </label>
            <input type="text" name="tarjeta_sonido" id='tarjeta_sonido'>
            <br>
            <label for="tarjeta_grafica"> Ingresa el tarjeta_grafica : </label>
            <input type="text" name="tarjeta_grafica" id='tarjeta_grafica'>
            <br>
            <label for="tarjeta_red"> Ingresa el tarjeta_red : </label>
            <input type="text" name="tarjeta_red" id='tarjeta_red'>
            <br>
            <label for="teclado"> Ingresa el teclado : </label>
            <input type="text" name="teclado" id='teclado'>
            <br>
            <label for="monitor"> Ingresa el monitor : </label>
            <input type="text" name="monitor" id='monitor'>
            <br>
            <label for="gabinete"> Ingresa el gabinete : </label>
            <input type="text" name="gabinete" id='gabinete'>
            <br>
            <label for="mouse"> Ingresa el mouse : </label>
            <input type="text" name="mouse" id='mouse'>
            <br>
            <label for="fuente_poder"> Ingresa el fuente_poder : </label>
            <input type="text" name="fuente_poder" id='fuente_poder'>
            <br>
            <label for="velocidad_hd"> Ingresa el velocidad_hd : </label>
            <input type="text" name="velocidad_hd" id='velocidad_hd'>
            <br>
            <label for="bajo_impacto_acustico"> Ingresa el bajo_impacto_acustico 1 o 0! : </label>
            <input type="text" name="bajo_impacto_acustico" id='bajo_impacto_acustico'>
            <br>
            
          
            <input type="submit" value="enviar" id="enviar">
        </p>

    </form>

</body>

</html>
