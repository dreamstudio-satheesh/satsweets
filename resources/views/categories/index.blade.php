@extends('layouts.admin')

@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap-datetimepicker.min.css">

        <!-- Toatr CSS -->		
        <link rel="stylesheet" href="assets/plugins/toastr/toatr.css">
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="{{ url('') }}/assets/plugins/select2/js/select2.min.js"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ url('') }}/assets/js/moment.min.js"></script>
        <script src="{{ url('') }}/assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Mask JS -->
		<script src="assets/plugins/toastr/toastr.min.js"></script>
     

        @if(Session::has('success'))
        <script type="text/javascript">

            $(document).ready(function () {
                toastr.success(' {{ Session::get('success')}} ');                
            });

        </script>
        @endif
    
@endpush

@section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Category list</h4>
                    <h6>View/Search product Category</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ url('categories/create') }}" class="btn btn-added">
                        <img src="{{ url('') }}/assets/img/icons/plus.svg"  class="me-1" alt="img">Add  Category
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
                                        <select class="select">
                                            <option>Choose Category</option>
                                            <option>Computers</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
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
                                    <th>Category name</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            @if ( !empty( $category->getFirstMediaUrl('categories') ) )                                          
                                            <img src="{{ $category->getFirstMediaUrl('categories', 'thumb') }}">                                        
                                            @else
                                            <img src="{{ url('') }}/assets/img/product/noimage.png" alt="product">
                                            @endif 
                                        </a>
                                        <a href="javascript:void(0);">{{ $category->name }}</a>
                                    </td>
                                    <td>Admin</td>
                                    <td>
                                        <a class="me-3" href="{{ route('categories.edit', $category->id) }}">
                                            <img src="{{ url('') }}/assets/img/icons/edit.svg" alt="img">
                                        </a>
                                        <a class="me-3 confirm-text" href="javascript:void(0);">
                                            <img src="{{ url('') }}/assets/img/icons/delete.svg" alt="img">
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
