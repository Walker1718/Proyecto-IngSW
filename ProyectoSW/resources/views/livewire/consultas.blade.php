
    <div wire::ignore>
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
                        @foreach ($Ordendedatos as $index => $Ordendedatos)
                        {{$index}}
                            <tr wire:key="columna[{{$index}}]">
                                <td>
                                    <select wire:key="Select[{{$index}}]"
                                            wire:model="Ordendedatos.{{$index}}"
                                            class="form-select"
                                            aria-label="Default select example">
                                        <option value="">-- Tipo de clausula --</option>

                                        @foreach($datos as $clausula)
                                        <option  value="{{ $clausula ->id_clausula}}">
                                            {{ ucfirst($clausula->titulo) }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>

                                    <textarea   class="form-control" 
                                                id="Textoindividualdeclausulas" rows="5" 
                                                wire:key="Textarea[{{$index}}]"
                                            wire:model="Ordendedatos.{{$index}}.\id_clausula\">hhi</textarea>

                                               
                                </td>
                                <td>
                                    <a href="#" wire:click.prevent="removeProduct({{$index}})">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
    
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-secondary"
                                wire:click.prevent="addProduct">+ Agregar otra causula</button>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div>
                <input class="btn btn-primary" type="submit" value="Guardar contrato">
            </div>
        </form>
    </div>



    {{--                                                                                     --}}

    {{-- <div>
        <form  method="POST" enctype="multipart/form-data" class="form-horizontal" action="" >
            {{ csrf_field() }}
            <div class="card-body">
                
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="status">Select Class</label>
                        <select class="form-control" wire:model="selectedClass">
                            <option value="">Select a Class</option>
                            @foreach($datos as $clausula)
                            <option  value="{{ $clausula->id_clausula }}">
                                {{ ucfirst($clausula->titulo) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{ $sections }}
                @if (!is_null($sections))



                
                <div class="form-group">
                    <div class="col-sm-10">
                        <label for="status">Select a Section</label>
                        <select class="form-control" wire:model="selectedSection">
                            <option value="">Select a Section</option>
                            @foreach ($sections as $item)
                            <option value="{{ $item->Contenido }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
    
                {{ $selectedSection }}

            </div>
        </form>
    </div> --}}