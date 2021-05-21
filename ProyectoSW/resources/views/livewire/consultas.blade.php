
    <div>
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
                            <tr>
                                <td>
                                    <select name="Ordendedatos[{{$index}}][id_clausula]"
                                            wire:model="Ordendedatos.{{$index}}.Contenido"
                                            class="form-select"
                                            aria-label="Default select example">
                                        <option value="">-- Tipo de clausula --</option>

                                        @foreach($datos as $clausula)
                                        <option  value="{{ $clausula->Contenido }}">
                                            {{ ucfirst($clausula->titulo) }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>

                                    <textarea   class="form-control" 
                                                id="Textoindividualdeclausulas" rows="5" 
                                                name="Ordendedatos[{{$index}}][Contenido]"
                                                wire:model="Ordendedatos.{{$index}}.Contenido"
                                               ></textarea>
                                               

                                    {{-- <input type="number"
                                           name="Ordendedatos[{{$index}}][quantity]"
                                           class="form-control"
                                           wire:model="Ordendedatos.{{$index}}.quantity" /> --}}
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

