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
                        <h4>Invoice Report</h4>
                        <h6>Manage your Invoice Report</h6>
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
                                                                <div class="input-groupicon">
                                                                        <input type="text" placeholder="From Date" class="datetimepicker">
                                                                        <div class="addonset">
                                                                                <img src="assets/img/icons/calendars.svg" alt="img">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <div class="input-groupicon">
                                                                        <input type="text" placeholder="To Date" class="datetimepicker">
                                                                        <div class="addonset">
                                                                                <img src="assets/img/icons/calendars.svg" alt="img">
                                                                        </div>
                                                                </div>
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
                                <table class="table datanew">
                                        <thead>
                                                <tr>
                                                        <th>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox" id="select-all">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </th>
                                                        <th>Invoice number	</th>
                                                        <th>Customer name </th>
                                                        <th>Due date</th>
                                                        <th>Amount</th>
                                                        <th>Paid</th>
                                                        <th>Amount due</th>
                                                        <th>Status</th>
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
                                                        <td>INV001</td>
                                                        <td>Thomas21</td>
                                                        <td>29-03-2022</td>
                                                        <td>1500.00</td>
                                                        <td>1500.00</td>
                                                        <td>1500.00</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV002</td>
                                                        <td>504Benjamin</td>
                                                        <td>29-03-2022</td>
                                                        <td>10.00</td>
                                                        <td>10.00</td>
                                                        <td>10.00</td>
                                                        <td><span class="badges bg-lightred">Overdue</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV003</td>
                                                        <td>James 524</td>
                                                        <td>29-03-2022</td>
                                                        <td>10.00</td>
                                                        <td>10.00</td>
                                                        <td>10.00</td>
                                                        <td><span class="badges bg-lightred">Overdue</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV004</td>
                                                        <td>Bruklin2022</td>
                                                        <td>29-03-2022</td>
                                                        <td>10.00</td>
                                                        <td>10.00</td>
                                                        <td>10.00</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV005</td>
                                                        <td>BeverlyWIN25</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightred">Overdue</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV006</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV007</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV008</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgrey">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV009</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgrey">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV0010</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgrey">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV007</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV008</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgrey">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV009</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgrey">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>INV0010</td>
                                                        <td>BHR256</td>
                                                        <td>29-03-2022</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td>150.00</td>
                                                        <td><span class="badges bg-lightgrey">Unpaid</span></td>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                </div>
        </div>
        <!-- /product list -->
</div>        
                
@endsection
