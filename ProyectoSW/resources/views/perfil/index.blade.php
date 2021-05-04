{{-- Index de Perfil --}}

@extends('layout')

@section('content')

<div>

    <table class="table table-dark table-striped">

        <thead>
            <tr>
                <th scope="col">Procesador</th>
                <th scope="col">Ram</th>
                <th scope="col">Dvd</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($perfil as $perfil)
            <tr>
                <td>{{ $perfil->procesador }}</td>
                <td>{{ $perfil->ram }}</td>
                <td>{{ $perfil->dvd }}</td>
                <td>
                    <form action="{{ url('/perfil/'.$perfil->id_perfil) }}" method="post">
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
