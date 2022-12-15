@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Customers</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit customer</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <form action="{{ route('customers.update', $customer->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <div class="row">

                <div class="col-12">
                    <div class="mb-3">
                        <label for="name">customer Name</label>
                        <input id="name" name="name" type="text" class="form-control"
                            value="{{ old('', $customer->name) }}" />
                        @error('name')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-12">
                        <label>Line - Delivery  Area</label>
    
                        <select name="line_id" id="line" " class="form-control" >
                            @foreach ($lines as $line)
                            <option value="{{ $line->id }}">{{ $line->name }}</option>
                            @endforeach
                          </select>
                       
                        @error('line_id')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-12">
                        <label>Address</label>
                        <textarea id="Address" name="address" rows="3" cols="30" class="form-control" >
                            {{ old('', $customer->address) }}
                        </textarea>
                        @error('address')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-12">
                        <label>Contact Number1</label>
                        <input id="Contact Number1" name="contact1" type="number" class="form-control" value="{{ old('', $customer->contact1) }}" />
                        @error('contact1')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-12">
                        <label>Contact Number2</label>
                        <input id="Contact Number2" name="contact2" type="number" class="form-control" value="{{ old('', $customer->contact2) }}" />
                        @error('contact2')
                            <span class="text-danger small" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 col-12">
                        <label>GST Number</label>
                        <input id="GSTNum" name="gstnumber" type="text" class="form-control" value="{{ old('', $customer->gstnumber) }}" />
                        @error('gstnumber')
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
