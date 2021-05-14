{{-- Index de Creacion --}}

@extends('layout')  

@section('content')
    
    Index de contrato

            <div class="col-md-6">
                <h3>Clasulas<span class="gcolor"></span> </h3>
                <div class="form-s2">
                    <div>
                        <select class="form-control formselect required" placeholder="Select Category"
                            id="sub_category_name">
                            <option value="0" disabled selected>Seleccione el tipo de clausula a agregar
                                Main Category*</option>
                            @foreach($clausula as $clausulas)
                            <option  value="{{ $clausulas->n_clausula }}">
                                {{ ucfirst($clausulas->n_clausula) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            
@endsection