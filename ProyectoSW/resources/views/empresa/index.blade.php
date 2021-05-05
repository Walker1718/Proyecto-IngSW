@extends('layout')

@section('content')

<div class="card-header">
    <h3 class="card-title">Empresas</h3>
    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Contacto</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($empresa as $empresa)
            <tr>
                <td>{{ $empresa->nombre }}</td>
                <td>{{ $empresa->email }}</td>
                <td>{{ $empresa->contacto }}</td>
                <td>
                    <a href="{{ url('/empresa/'.$empresa->id_empresa.'/edit') }}">
                    <button type="submit" class="btn btn-info" ">Editar</button>
                    </a>
                </td>
                <td>
                    <form action=" {{ url('/empresa/'.$empresa->id_empresa) }}" method="post">
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
