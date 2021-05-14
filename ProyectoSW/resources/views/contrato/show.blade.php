@extends('layout')

@section('content')

<div class="row">
    <div class="col-12">
        <a href="{{url('/contrato/')}}" class="btn btn-primary btn-lg ">Volver</a>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Contrato</h3>
    </div>
    <div class="card-body table-responsive p-0" style="height: 700px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th scope="col">Procesador</th>
                    <th scope="col">Ram</th>
                    <th scope="col">Dvd</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $contrato->procesador }}</td>
                    <td>{{ $contrato->ram }}</td>
                    <td>{{ $contrato->dvd }}</td>
                </tr>
        </table>
    </div>
</div>

@stop
