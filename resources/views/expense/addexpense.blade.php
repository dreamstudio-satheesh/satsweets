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
    
@endpush

@section('content')

<div class="content">
        <div class="page-header">
                <div class="page-title">
                        <h4>Expense Add</h4>
                        <h6>Add/Update Expenses</h6>
                </div>
        </div>
        <div class="card">
                <div class="card-body">
                        <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Expense Category</label>
                                                <select class="select">
                                                        <option>Choose Category</option>
                                                        <option>Category</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Expense Date </label>
                                                <div class="input-groupicon">
                                                        <input type="text" placeholder="Choose Date" class="datetimepicker">
                                                        <div class="addonset">
                                                                <img src="assets/img/icons/calendars.svg" alt="img">
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Amount</label>
                                                <div class="input-groupicon">
                                                        <input type="text">
                                                        <div class="addonset">
                                                                <img src="assets/img/icons/dollar.svg" alt="img">
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Reference No.</label>
                                                <input type="text" >
                                        </div>
                                </div>
                                <div class="col-lg-12">
                                        <div class="form-group">
                                                <label>Expense for</label>
                                                <input type="text" >
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
                                        <a href="expenselist.html"  class="btn btn-cancel">Cancel</a>
                                </div>
                        </div>
                </div>
        </div>
</div>
                
@endsection
