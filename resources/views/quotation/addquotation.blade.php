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
                        <h4>Quotation Add</h4>
                        <h6>Add/Update Quotation</h6>
                </div>
        </div>
        <div class="card">
                <div class="card-body">
                        <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Customer Name</label>
                                                <div class="row">
                                                        <div class="col-lg-10 col-sm-10 col-10">
                                                                <select class="select">
                                                                        <option>Select Customer</option>
                                                                        <option>Customer</option>
                                                                </select>
                                                        </div>
                                                        <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                                                <div class="add-icon">
                                                                        <a href="javascript:void(0);"><img src="assets/img/icons/plus1.svg" alt="img"></a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Quotation Date </label>
                                                <div class="input-groupicon">
                                                        <input type="text" placeholder="DD-MM-YYYY" class="datetimepicker">
                                                        <div class="addonset">
                                                                <img src="assets/img/icons/calendars.svg" alt="img">
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                
                                <div class="col-lg-6 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Reference No.</label>
                                                <input type="text" >
                                        </div>
                                </div>
                                <div class="col-lg-12 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Product Name</label>
                                                <div class="input-groupicon">
                                                        <input type="text" placeholder="Scan/Search Product by code and select...">
                                                        <div class="addonset">
                                                                <img src="assets/img/icons/scanners.svg" alt="img">
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="table-responsive">
                                        <table class="table">
                                                <thead>
                                                        <tr>
                                                                <th>Product</th>
                                                                <th>Net Unit Price($)	</th>
                                                                <th>Stock</th>
                                                                <th>Qty</th>
                                                                <th>Discount($)	</th>
                                                                <th>Tax %	</th>
                                                                <th class="text-end">Subtotal ($)</th>
                                                                <th></th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                                <td class="productimgname">
                                                                        <a class="product-img">
                                                                                <img src="assets/img/product/product7.jpg" alt="product">
                                                                        </a>
                                                                        <a href="javascript:void(0);">Mysorepak</a>
                                                                </td>
                                                                <td>150</td>
                                                                <td>500</td>
                                                                <td>500</td>
                                                                <td>100</td>
                                                                <td>250</td>
                                                                <td class="text-end">500</td>
                                                                <td>
                                                                        <a href="javascript:void(0);" class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                                <td class="productimgname">
                                                                        <a class="product-img">
                                                                                <img src="assets/img/product/product6.jpg" alt="product">
                                                                        </a>
                                                                        <a href="javascript:void(0);">Palkova</a>
                                                                </td>
                                                                <td>15.00</td>
                                                                <td>6000.00</td>
                                                                <td>100.00</td>
                                                                <td>0.00</td>
                                                                <td>0.00</td>
                                                                <td class="text-end">1000.00</td>
                                                                <td>
                                                                        <a href="javascript:void(0);" class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
                                                                </td>
                                                        </tr>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                        <div class="row ">
                                <div class="col-lg-12 float-md-right">
                                        <div class="total-order">
                                                <ul>
                                                        <li>
                                                                <h4>Order Tax</h4>
                                                                <h5>$ 0.00 (0.00%)</h5>
                                                        </li>
                                                        <li>
                                                                <h4>Discount	</h4>
                                                                <h5>$ 0.00</h5>
                                                        </li>	
                                                        <li>
                                                                <h4>Shipping</h4>
                                                                <h5>$ 0.00</h5>
                                                        </li>
                                                        <li class="total">
                                                                <h4>Grand Total</h4>
                                                                <h5>$ 0.00</h5>
                                                        </li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Order Tax</label>
                                                <input type="text" >
                                        </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Discount</label>
                                                <input type="text" >
                                        </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Shipping</label>
                                                <input type="text" >
                                        </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Status</label>
                                                <select class="select">
                                                        <option>Choose Status</option>
                                                        <option>Completed</option>
                                                        <option>Inprogress</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="col-lg-12">
                                        <div class="form-group">
                                                <label>Description</label>
                                                <textarea class="form-control"></textarea>
                                        </div>
                                </div>
                                <div class="col-lg-12">
                                        <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                                        <a href="quotationList.html"  class="btn btn-cancel">Cancel</a>
                                </div>
                        </div>
                </div>
        </div>
</div>
                
@endsection