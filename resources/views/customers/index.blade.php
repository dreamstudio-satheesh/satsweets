@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row my-2 justify-content-end">
        <div class="mx-3">
            <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm">New Customer</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-hover table-light">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($customers as $customer)
                        <tr>
                            <td scope="row">{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td><a href="{{ route('customers.edit', $customer->id) }}"
                                    class="btn btn-primary btn-sm">edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No customers found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
