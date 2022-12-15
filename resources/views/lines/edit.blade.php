@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('lines.index') }}">Lines</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Line</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <form action="{{ route('lines.update', $line->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="mb-3">
                        <label for="name">Line Name</label>
                        <input id="name" name="name" type="text" class="form-control"
                            value="{{ old('', $line->name) }}" />
                        @error('name')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


             
            </div>
        </form>
    </div>

@endsection
