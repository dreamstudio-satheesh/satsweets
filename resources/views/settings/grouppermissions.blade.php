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
                        <h4>Group Permissions</h4>
                        <h6>Manage Group Permissions</h6>
                </div>
                <div class="page-btn">
                        <a  class="btn btn-added" href="createpermission.html" ><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add Group Permission</a>
                </div>
        </div>
        <!-- /product list -->
        <div class="card">
                <div class="card-body">
                        <div class="table-top">
                                <div class="search-set">
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
                                                        <th>Role</th>
                                                        <th>description</th>
                                                        <th>Status</th>
                                                        <th class="text-end">Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>Admin</td>
                                                        <td>Owner</td>
                                                        <td>
                                                                <span class="badges bg-lightgreen">Active</span>
                                                        </td>
                                                        <td class="text-end">
                                                                <a class="me-3" href="editpermission.html">
                                                                        <img src="assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="assets/img/icons/delete.svg" alt="img">
                                                                </a>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>Purchase</td>
                                                        <td>Purchase Permission</td>
                                                        <td>
                                                                <span class="badges bg-lightgreen">Active</span>
                                                        </td>
                                                        <td class="text-end">
                                                                <a class="me-3" href="editpermission.html">
                                                                        <img src="assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="assets/img/icons/delete.svg" alt="img">
                                                                </a>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>Sales</td>
                                                        <td>Sales Permission</td>
                                                        <td>
                                                                <span class="badges bg-lightgreen">Active</span>
                                                        </td>
                                                        <td class="text-end">
                                                                <a class="me-3" href="editpermission.html">
                                                                        <img src="assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="assets/img/icons/delete.svg" alt="img">
                                                                </a>
                                                        </td>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>
        <!-- /product list -->
</div>
                
@endsection
