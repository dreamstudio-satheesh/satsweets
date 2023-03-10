@extends('layouts.admin')


@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>

        <!-- Datetimepicker JS -->
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Sweetalert 2 -->
        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
    
@endpush

@section('content')
                <div class="content">
                    <div class="page-header">
                        <div class="page-title">
                            <h4>Delevery Area List</h4>
                            <h6>Manage your lines</h6>
                        </div>
                        <div class="page-btn">
                            <a href="{{ url('lines/create') }}" class="btn btn-added">
                                <img src="assets/img/icons/plus.svg" alt="img" class="me-2">New Line
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
                                            <img src="assets/img/icons/filter.svg" alt="img">
                                            <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                                        </a>
                                    </div>
                                    <div class="search-input">
                                        <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                                    </div>
                                </div>
                                <div class="wordset">
                                    <ul>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
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
                                                    <option>Choose Area</option>
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
                                                <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
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
                                            <th>Area Name</th>
                                            <th>ID</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lines as $line)
                                        <tr>
                                            <td>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </td>
                                            <td>{{ $line->name }}</td>
                                            <td>{{ $line->line }}</td>
                                            <td>
                                                <div class="status-toggle d-flex justify-content-between align-items-center">
                                                    <input type="checkbox" id="user2" class="check" checked="">
                                                    <label for="user2" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                
                                                <a class="me-3" href="{{ route('lines.edit', $line->id) }}">
                                                    <img src="assets/img/icons/edit.svg" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="assets/img/icons/delete.svg" alt="img">
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
