@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">New Categories</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Category" />
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
