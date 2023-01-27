@extends('layouts.admin')


@section('content')


    <div class="card m-2 p-4">
        <form action="{{ route('customers.store') }}" method="post">
            @csrf
            
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="name">Store Name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Name" required/>
                    </div>
                </div>
                <div class="mb-3 col-12">
                    <label>Line - Delivery  Area</label>

                    <select name="line_id" id="line" " class="form-control" >
                        <option selected disabled>-- Select Line --</option>
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
                    </textarea>
                    @error('address')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-12">
                    <label>Contact Number1</label>
                    <input id="Contact Number1" name="contact1" type="number" class="form-control" />
                    @error('contact1')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-12">
                    <label>Contact Number2</label>
                    <input id="Contact Number2" name="contact2" type="number" class="form-control" />
                    @error('contact2')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-12">
                    <label>GST Number</label>
                    <input id="GSTNum" name="gstnumber" type="text" class="form-control" />
                    @error('gstnumber')
                        <span class="text-danger small" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-lg-12">
                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                    <a onclick="history.back()"  class="btn btn-cancel">Cancel</a>
                </div>
                
            </div>
        </form>
    </div>

@endsection
