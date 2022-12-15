@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lines</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <div class="row justify-content-end">
            <div class="mx-3">
                <a href="{{ route('lines.create') }}" class="btn btn-primary">New line</a>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12">
                @forelse($lines as $line)
                    <div class="btn btn-outline-primary"> <a href="{{ route('lines.edit', $line->id) }}">{{ $line->name }}</a> </div>
                @empty
                    <div class="alert alert-light" role="alert">
                        No lines found
                    </div>
                @endforelse
            </div>
        </div>
    </div>

@endsection
