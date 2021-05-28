{{-- Pagina de Creacion --}}

@extends('layout')

@section('content')

<div class="card-header">
   
    <h3 class="card-title">Crear o Subir un Contrato</h3>

    <a href="/subir">
        <button type="button" class="btn btn-success"> <i class="fas fa-file-signature"></i> Crear Contrato </button>
    </a>

    <a href="/contrato/create">
        <button type="button" class="btn btn-success"> <i class="fas fa-file-upload"></i> Subir Contrato </button>
    </a>

</div>

@endsection
