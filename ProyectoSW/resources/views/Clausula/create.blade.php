{{-- Index de Creacion --}}

@extends('layout')  

@section('content')
<form action="{{ route('clausula.store') }}" method="POST">
    @csrf

        <div class="card">
            <div class="card-header">
                Contrato
            </div>

            <div class="card-body">
                <table class="table" id="products_table">
                    <thead>
                    <tr>
                        <th class = "col-md-2">Tipo</th>
                        <th >Clausula</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select name = "Select_Clausulas"
                                        class="form-select Select_Clausulas"
                                        aria-label="Default select example">
                                    <option value="">-- Tipo de clausula --</option>

                                    @foreach($datos as $clausula)
                                    <option  value="{{ $clausula ->id_clausula}}">
                                        {{ ucfirst($clausula->titulo) }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>

                                <textarea name="text_area_clausula" class="form-control text_area_clausula" id="Textoindividualdeclausulas" rows="5"></textarea>
                                           
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>

        


    {{-- @livewire('consultas') --}}



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

@section('scripts')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.Select_Clausulas',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('/Clausula/Encontrartextoareaclausula')!!}',
                data:{'id_clausula':cat},
                dataType:'json',//return data will be json
                success:function(data){
                    console.log("contenido");
                    console.log(data.contenido);

                    // here price is coloumn name in products table data.coln name

                    a.find('.text_area_clausula').val(data.contenido);

                },
                error:function(){
                }
            });


        });

    });
</script>
@endsection