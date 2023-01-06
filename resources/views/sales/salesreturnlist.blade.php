@extends('layouts.admin')


@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/plugins/select2/css/select2.min.css">
    
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
                        <h4>Sales Return List</h4>
                        <h6>Manage your Returns</h6>
                </div>
                <div class="page-btn">
                        <a href="newsalesreturn" class="btn btn-added"><img src="{{ url('') }}/assets/img/icons/plus.svg" alt="img" class="me-2">Add New Sales Return</a>
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
                                                <div class="col-lg-2 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date" >
                                                        </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <input type="text" placeholder="Enter Reference">
                                                        </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <select class="select">
                                                                        <option>Choose Customer</option>
                                                                        <option>Customer</option>
                                                                </select>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <select class="select">
                                                                        <option>Choose Status</option>
                                                                        <option>Inprogress</option>
                                                                </select>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <select class="select">
                                                                        <option>Choose Payment Status</option>
                                                                        <option>Payment Status</option>
                                                                </select>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2 col-sm-6 col-12">
                                                        <div class="form-group">
                                                                <a class="btn btn-filters ms-auto"><img src="{{ url('') }}/assets/img/icons/search-whites.svg" alt="img"></a>
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
                                                        <th>Product Name</th>
                                                        <th>Date</th>
                                                        <th>Customer</th>
                                                        <th>Status</th>
                                                        <th>Grand Total ($)</th>
                                                        <th>Paid ($)</th>
                                                        <th>Due ($)</th>
                                                        <th>Payment Status</th>
                                                        <th>Action</th>
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product1.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Palkova</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Thomas</td>
                                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                                        <td>550</td>
                                                        <td>120</td>
                                                        <td>550</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product2.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Mysorepak</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Benjamin</td>
                                                        <td><span class="badges bg-lightred">Pending</span></td>
                                                        <td>550</td>
                                                        <td>120</td>
                                                        <td>550</td>
                                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product3.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Murukku</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>James</td>
                                                        <td><span class="badges bg-lightred">Pending</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product4.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Boondhi</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Bruklin</td>
                                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product5.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Masala Kadalai</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Beverly</td>
                                                        <td><span class="badges bg-lightred">Pending</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightred">UnPaid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product6.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Palkova</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Best Power Tools</td>
                                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightgreen">paid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product7.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Salt Biscuit</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Apex Computers</td>
                                                        <td><span class="badges bg-lightyellow">Ordered</span></td>
                                                        <td>1000</td>
                                                        <td>500</td>
                                                        <td>1000</td>
                                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product1.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Palkova</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Thomas</td>
                                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                                        <td>550</td>
                                                        <td>120</td>
                                                        <td>550</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product2.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Mysorepak</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Benjamin</td>
                                                        <td><span class="badges bg-lightyellow">Pending</span></td>
                                                        <td>550</td>
                                                        <td>120</td>
                                                        <td>550</td>
                                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product3.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Murukku</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>James</td>
                                                        <td><span class="badges bg-lightred">Pending</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightred">Unpaid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product4.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Laddu</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Bruklin</td>
                                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightgreen">Paid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product5.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Avocat</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Beverly</td>
                                                        <td><span class="badges bg-lightred">Pending</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightred">UnPaid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product6.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Palkova</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Best Power Tools</td>
                                                        <td><span class="badges bg-lightgreen">Received</span></td>
                                                        <td>210</td>
                                                        <td>120</td>
                                                        <td>210</td>
                                                        <td><span class="badges bg-lightgreen">paid</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
                                                        <td class="productimgname">
                                                                <a href="javascript:void(0);" class="product-img">
                                                                        <img src="{{ url('') }}/assets/img/product/product7.jpg" alt="product">
                                                                </a>
                                                                <a href="javascript:void(0);">Apple Earpods</a>
                                                        </td>
                                                        <td>19 Nov 2022</td>
                                                        <td>Apex Computers</td>
                                                        <td><span class="badges bg-lightyellow">Ordered</span></td>
                                                        <td>1000</td>
                                                        <td>500</td>
                                                        <td>1000</td>
                                                        <td><span class="badges bg-lightyellow">Partial</span></td>
                                                        <td>
                                                                 
                                                                <a class="me-3" href="editsalesreturn.html">
                                                                        <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                                                </a>
                                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                                        <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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