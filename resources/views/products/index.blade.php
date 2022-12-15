@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row my-2 justify-content-end">
        <div class="mx-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">New Product</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-hover table-light">
                <thead>
                    <tr>
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
