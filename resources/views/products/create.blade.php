@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">New Product</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <form action="{{ route('products.store') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Name" />
                    </div>
                </div>
                <div class="mb-3 col-12">
                    <label>Categories</label>

                    <select name="category_id" id="category" " class="form-control" >
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                   
                    @error('category_id')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-12">
                    <label>Price</label>
                    <input id="Price" name="price" type="number" class="form-control" />
                    @error('price')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 col-12">
                    <label>Upload Image :</label>
                    <input type="file" id="myFile" name="photo" >
                    @error('price')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-12">
                    <label>Stocks</label>
                    <input id="Stocks" name="stocks" type="number" class="form-control" />
                    @error('stocks')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            </div>
        </form>
    </div>

@endsection
