{{-- Index de Creacion --}}

@extends('layout')  

@section('content')
    



{{-- <div class="card">
    <div class="card-header">
        Products
    </div>

    <div class="card-body">
        <table class="table" id="products_table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr id="clausula0">
                    <td>
                        <select name="products[]" class="form-control">
                            <option value="">-- choose clausula --</option>
                            @foreach($clausula as $clausula)
                            <option  value="{{ $clausula->n_clausula }}">
                                {{ ucfirst($clausula->n_clausula) }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" name="quantities[]" class="form-control" value="1" />
                    </td>
                </tr>
                <tr id="clausula1"></tr>
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-12">
                <button id="add_row" class="btn btn-default pull-left">+ Add Row</button>
                <button id='delete_row' class="pull-right btn btn-danger">- Delete Row</button>
            </div>
        </div>
    </div>
</div>
<div>
    <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
</div> --}}


    @livewire('consultas')



    {{--                
        Index de contrato

            <div class="col-md-6">
                <h3>clausula<span class="gcolor"></span> </h3>
                <div class="form-s2">
                    <div>
                        <select class="form-control formselect required" placeholder="Select Category"
                            id="sub_category_name">
                            <option value="0" disabled selected>Seleccione el tipo de clausula a agregar</option>
                            @foreach($clausula as $clausula)
                            <option  value="{{ $clausula->n_clausula }}">
                                {{ ucfirst($clausula->n_clausula) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
             --}}

{{-- https://blog.quickadminpanel.com/master-detail-form-in-laravel-jquery-create-order-with-products/ --}}

@endsection
