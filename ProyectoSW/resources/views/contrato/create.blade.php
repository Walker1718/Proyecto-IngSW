{{-- Create de Contrato --}}

@extends('layout')

@section('content')

<div class="card-header">
    <h3 class="card-title">Contratos</h3>
    <table class="table table-striped">

        <form action="{{ url('/contrato') }}" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                <label for="Descripcion"> Ingresa el Descripcion : </label>
                <input type="text" name="Descripcion" id='Descripcion'>
                <br>
                <input type="submit" value="enviar" id="enviar">
            </p>
        </form> 
       
    </table>
</div>

@endsection

 