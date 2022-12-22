@extends('layouts.admin')


@section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Places Management</h4>
                    <h6>Add/Update Places</h6>
                </div>
            </div>
            
            <!-- /add -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('lines.update', $line->id) }}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Delevery Location *</label>
                                <input type="text"  name="name" value="{{ old('', $line->name) }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Region</label>
                                <input type="text" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a onclick="history.back()"  class="btn btn-cancel">Cancel</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /add -->
        </div>

@endsection
