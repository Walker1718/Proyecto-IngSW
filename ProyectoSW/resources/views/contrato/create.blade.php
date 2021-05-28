{{-- Create de Contrato --}}

@extends('layout')

@section('content')

<div class="overflow-auto" style="overflow:scroll;height:800px;width:1500px;">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Guardar un nuevo Contrato</h3>
                <br>
                <table class="table table-striped">

                    <form action="{{ url('/contrato') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="Descripcion" class="form-label"> Selecciona Usuario: </label>
                        <select name="id_user" id="id_user" class="form-control custom-select">
                            <option value="">-- Escoja el nombre del Usuario --</option>
                            @foreach ($datosUsuarios as $datosUsuarios)
                            <option value="{{$datosUsuarios['id_user']}}"> {{$datosUsuarios['tipo_usuario']}} </option>
                            @endforeach
                        </select>
                        <br>

                        <label for="TIPO_Contrato" class="form-label"> Ingresa el Tipo de Contrato: </label>
                        <input type="text" name="TIPO_Contrato" id='TIPO_Contrato' class="form-control">
                        <br>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"> Ingresa una Descripción
                            </label>
                            <textarea name="Descripcion" id='Descripcion' class="form-control" rows="3"></textarea>
                        </div>
                        <br>

                        <label for="Estado"> Ingresa el Estado del Contrato : </label>
                        <input type="text" name="Estado" id='Estado' class="form-control">
                        <br>

                        <label for="Fecha_Entrega"> Selecciona la Fecha_Entrega: </label>
                        <input type="date" name="Fecha_Entrega" id="Fecha_Entrega" value="" class="form-control">
                        <br>

                        <label for="Fecha_Aceptacion"> Selecciona la Fecha_Aceptacion: </label>
                        <input type="date" name="Fecha_Aceptacion" id='Fecha_Aceptacion' class="form-control">
                        <br>

                        <label for="Fecha_Vencimiento"> Selecciona la Fecha_Vencimiento: </label>
                        <input type="date" name="Fecha_Vencimiento" id='Fecha_Vencimiento' class="form-control">
                        <br>

                        <div class="mb-3">
                            <label for="PDF_Contrato" class="form-label"> Subir PDF del contrato</label>
                            <input class="form-control" type="file" id="PDF_Contrato">
                        </div>

                        <input type="submit" value="Enviar" id="enviar" class="btn btn-success float-right">

                    </form>
                </table>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <a href="{{url('/contrato')}}" class="btn btn-secondary">Volver</a>
    </div>
</div>

@stop

