@extends('layouts.admin')


@section('content')
    <div class="card m-2 p-4">
    
        <div class="row my-2">
            <div class="col-12">
                @foreach ($categories as $category)
                <div class="btn btn-outline-primary"> <a href="{{ route('cart.view', $category->id )}}">{{ $category->name }}     </a> </div>
                @endforeach
            </div>

        </div>
    </div>


    <div class="row">

        
        <div class="col-12 table-responsive">
            <table class="table table-hover table-light">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>#</th>
                        <th>Product</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td scope="row">{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                          <td><img src=" {{ url('url', []) }}/  {{ $product->photo }}" alt=""></td>
                            <td><a href="{{ route('products.edit', $product->id) }}"
                                    class="btn btn-primary btn-sm">edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No products found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


@endsection
