@extends('layouts.admin')


@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

        <!-- Sweetalert 2 -->
        <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>
    
@endpush

@section('content')
                <div class="content">
                    <div class="page-header">
                        <div class="page-title">
                            <h4>User  List</h4>
                            <h6>Manage your User</h6>
                        </div>
                        <div class="page-btn">
                            <a href="{{ url('admin/users/create') }}" class="btn btn-added">
                                <img src="{{ asset('assets/img/icons/plus.svg') }}" alt="img" class="me-2">New User
                            </a>
                        </div>
                    </div>
                    

                    <!-- /product list -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-top">
                                <div class="search-set">
                                    <div class="search-path">
                                        <a class="btn btn-filter" id="filter_search">
                                            <img src="{{ asset('assets/img/icons/filter.svg') }}" alt="img">
                                            <span><img src="{{ asset('assets/img/icons/closes.svg') }}" alt="img"></span>
                                        </a>
                                    </div>
                                    <div class="search-input">
                                        <a class="btn btn-searchset"><img src="{{ asset('assets/img/icons/search-white.svg') }}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="wordset">
                                    <ul>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ asset('assets/img/icons/pdf.svg') }}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ asset('assets/img/icons/excel.svg') }}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ asset('assets/img/icons/printer.svg') }}" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Filter -->
                            <div class="card" id="filter_inputs">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose user</option>
                                                    <option>..</option>
                                                </select>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="form-group">
                                                <select class="select">
                                                    <option>Choose Status</option>
                                                    <option>Disable</option>
                                                    <option>Enable</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                            <div class="form-group">
                                                <a class="btn btn-filters ms-auto"><img src="{{ asset('assets/img/icons/search-whites.svg') }}" alt="img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter -->
                            <div class="table-responsive">
                                <table class="table  datanew">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </th>
                                            <th>User Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                <div class="status-toggle d-flex justify-content-between align-items-center">
                                                    <input type="checkbox" id="user2" class="check" checked="">
                                                    <label for="user2" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                
                                                <a class="me-3" href="{{ url('admin/users/'. $user->id.'/edit') }}">
                                                    <img src="{{ asset('assets/img/icons/edit.svg') }}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ asset('assets/img/icons/delete.svg') }}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                                                      
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /product list -->
                </div>
@endsection
