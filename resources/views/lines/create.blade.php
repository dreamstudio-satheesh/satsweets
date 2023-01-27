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
                        <form action="{{ route('lines.store') }}" method="post">
                            @csrf
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Delevery Location *</label>
                                <input type="text"  name="name" required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Line</label>
                                <select name="line" class="form-select">
                                    <option selected disabled>-- Select Line --</option>
                                    <option value="1">A</option>
                                    <option value="2" >B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6 ">F</option>
                                    <option value="7">G</option>
                                    <option value="8">H</option>
                                    <option value="9">I</option>
                                </select>
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
