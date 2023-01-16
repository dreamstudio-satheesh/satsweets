@extends('layouts.admin')


@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap-datetimepicker.min.css">
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="{{ url('') }}/assets/plugins/select2/js/select2.min.js"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ url('') }}/assets/js/moment.min.js"></script>
        <script src="{{ url('') }}/assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Sweetalert 2 -->
        <script src="{{ url('') }}/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="{{ url('') }}/assets/plugins/sweetalert/sweetalerts.min.js"></script>
    
@endpush

@section('content')

<div class="content">
        <div class="page-header">
                <div class="page-title">
                        <h4>Sales List</h4>
                        <h6>Manage your sales</h6>
                </div>
                <div class="page-btn">
                        <a href="{{ url('pos')}}" class="btn btn-added"><img src="{{ url('') }}/assets/img/icons/plus.svg" alt="img" class="me-1">Add Sales</a>
                </div>
        </div>
        

        <!-- /product list -->
        <div class="card">
                <div class="card-body">
                        <div class="table-top">
                                <div class="search-set">
                                        <div class="search-path">
                                                <a class="btn btn-filter" id="filter_search">
                                                        <img src="{{ url('') }}/assets/img/icons/filter.svg" alt="img">
                                                        <span><img src="{{ url('') }}/assets/img/icons/closes.svg" alt="img"></span>
                                                </a>
                                        </div>
                                        <div class="search-input">
                                                <a class="btn btn-searchset"><img src="{{ url('') }}/assets/img/icons/search-white.svg" alt="img"></a>
                                        </div>
                                </div>
                                <div class="wordset">
                                        <ul>
                                                <li>
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ url('') }}/assets/img/icons/pdf.svg" alt="img"></a>
                                                </li>
                                                <li>
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ url('') }}/assets/img/icons/excel.svg" alt="img"></a>
                                                </li>
                                                <li>
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ url('') }}/assets/img/icons/printer.svg" alt="img"></a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <!-- /Filter -->
                        <div class="card" id="filter_inputs">
                                <div class="card-body pb-0">
                                        <div class="row">
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <input type="text" placeholder="Enter Name">
                                                        </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <input type="text" placeholder="Enter Reference No">
                                                        </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <select class="select">
                                                                        <option>Completed</option>
                                                                        <option>Paid</option>
                                                                </select>
                                                        </div>
                                                </div>
                                                <div class="col-lg-3 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <a class="btn btn-filters ms-auto"><img src="{{ url('') }}/assets/img/icons/search-whites.svg" alt="img"></a>
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
                                                                        <input type="checkbox" id="select-all">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </th>
                                                        <th>Date</th>
                                                        <th>Customer Name</th>
                                                        <th>Inv Num</th>
                                                        <th>Payment</th>
                                                        <th>Total</th>
                                                        <th>Paid</th>
                                                        <th>Biller</th>
                                                        <th class="text-center">Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>

                                                @foreach ($invoices as $invoice)
                                                <tr>
                                                        <td>
                                                                <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                </label>
                                                        </td>
                                                        <td>{{ \Carbon\Carbon::parse($invoice->date)->format('d/m/Y')}} </td>
                                                        <td>{{ $invoice->customer->name}}</td>
                                                        <td>{{ str_pad($invoice->invoice_number, 4, '0', STR_PAD_LEFT) }}</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                        <td>{{ $invoice->total }}</td>
                                                        <td>0.00</td>
                                                        <td>Admin</td>
                                                        <td class="text-center">
                                                                <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                                </a>
                                                                <ul class="dropdown-menu"  >
                                                                        <li>
                                                                                <a href="{{url('invoice/')}}/{{$invoice->id}}" class="dropdown-item"><img src="{{ url('') }}/assets/img/icons/eye1.svg" class="me-2" alt="img">View Invoice</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="{{url('thermal/')}}/{{$invoice->id}}" class="dropdown-item"><img src="{{ url('') }}/assets/img/icons/eye1.svg" class="me-2" alt="img">Thermal Print</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="{{url('editcart/')}}/{{$invoice->id}}" class="dropdown-item"><img src="{{ url('') }}/assets/img/icons/edit.svg" class="me-2" alt="img">Edit Sale</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#showpayment"><img src="{{ url('') }}/assets/img/icons/dollar-square.svg" class="me-2" alt="img">Show Payments</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#createpayment"><img src="{{ url('') }}/assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
                                                                        </li>
                                                                        <li>
                                                                                <a href="javascript:void(0);" class="dropdown-item"><img src="{{ url('') }}/assets/img/icons/download.svg" class="me-2" alt="img">Download pdf</a>
                                                                        </li>	
                                                                        <li>
                                                                                <a href="javascript:void(0);" class="dropdown-item confirm-text"><img src="{{ url('') }}/assets/img/icons/delete1.svg" class="me-2" alt="img">Delete Sale</a>
                                                                        </li>								
                                                                </ul>
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
