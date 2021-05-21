
@extends('layout')

@section('content')

<div>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                Clausulas
            </div>

            <div class="card-body">
                <table class="table" id="products_table">
                    <thead>
                    <tr>
                        <th>Clausulas</th>
                        <th>Otro</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($orderProducts as $index => $orderProduct)
                        <tr>
                            <td>
                                <select name="orderProducts[{{$index}}][product_id]"
                                        wire:model="orderProducts.{{$index}}.product_id"
                                        class="form-control">
                                    <option value="">-- choose product --</option>
                                    @foreach ($allProducts as $product)
                                        <option value="{{ $product->id }}">
                                            {{ $product->name }} (${{ number_format($product->price, 2) }})
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number"
                                       name="orderProducts[{{$index}}][quantity]"
                                       class="form-control"
                                       wire:model="orderProducts.{{$index}}.quantity" />
                            </td>
                            <td>
                                <a href="#" wire:click.prevent="removeProduct({{$index}})">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary"
                            wire:click.prevent="addProduct">+ Add Another Product</button>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div>
            <input class="btn btn-primary" type="submit" value="Save Order">
        </div>
    </form>
</div>

@endsection
