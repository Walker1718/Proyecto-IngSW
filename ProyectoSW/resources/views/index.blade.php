{{-- Index de clausula --}}

@extends('layout')

@section('content')

<div class="card-header">
    <h3 class="card-title">clausulas</h3>
    <table class="table table-dark table-striped">

        <thead>
            <tr>
                <th scope="col">n_contrato</th>
                <th scope="col">titulo</th>
                <th scope="col">contenido</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clausula as $clausula)
            <tr>
                <td>{{ $clausula->n_contrato }}</td>
                <td>{{ $clausula->titulo }}</td>
                <td>{{ $clausula->contenido }}</td>
                <td>
                    <a href="{{ url('/clausula/'.$clausula->id_clausula.'/edit') }}">
                    <button type="submit" class="btn btn-info" ">Editar</button>
                    </a>
                </td>
                <td>
                    <form action=" {{ url('/clausula/'.$clausula->id_clausula) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Quieres Borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

@endsection
