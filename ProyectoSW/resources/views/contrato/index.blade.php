{{-- Index de contrato --}}

@extends('layout')

@section('content')

<div class="card-header">
    <h3 class="card-title">Perfiles de Computadores</h3>
    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">TIPO_Contrato</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha_Entrega</th>
                <th scope="col">Fecha_Aceptacion</th>
                <th scope="col">Fecha_Vencimiento</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($contrato as $contrato)
            <tr>
                <td>{{ $contrato->TIPO_Contrato }}</td>
                <td>{{ $contrato->Descripcion }}</td>
                <td>{{ $contrato->Estado }}</td>
                <td>{{ $contrato->Fecha_Entrega }}</td>
                <td>{{ $contrato->Fecha_Aceptacion }}</td>
                <td>{{ $contrato->Fecha_Vencimiento }}</td>

                <td>
                @if ($contrato->Estado != 'Aceptado' && $contrato->Estado != 'Completado')
                    <a href="{{ url('/contrato/'.$contrato->id_contrato.'/edit') }}">
                        <button type="submit" class="btn btn-info" ">Editar</button>
                    </a>
                @endif
                </td>

                <td>
                @if ($contrato->Estado == 'Borrador' || $contrato->Estado == 'Recibido' ||$contrato->Estado == 'Negado')
                    <form action=" {{ url('/contrato/'.$contrato->id_contrato) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres Borrar?');">Borrar</button>
                    </form>
                @endif
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection