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

        <script type="text/javascript">
            $(document).ready(function () {
             $("#selectbox").change(function () {
                var productid=$(this).val();
                location.href = "{{ url('products/')}}/"+$(this).val();
             })
         });
         </script>
    
@endpush

@section('content')

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Product list</h4>
                    <h6>Manage your products</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ url('products/create') }}" class="btn btn-added">
                        <img src="{{ url('') }}/assets/img/icons/plus.svg"  class="me-1" alt="img">Add  Product
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
                                        <select class="select"  id="selectbox">
                                            <option>Choose Product</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id}}" selected>{{ $category->name}}</option>
                                            @endforeach
                                            
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
                    <div class="card">
                        <div class="card-body"> 
                            {{ $products->links('pagination') }}  
                        </div>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Product name</th>
                                    <th>Barcode</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td class="productimgname">
                                        <a href="javascript:void(0);" class="product-img">
                                            
                                            @if ( !empty( $product->getFirstMediaUrl('products') ) )                                          
                                             <img src="{{ $product->getFirstMediaUrl('products', 'thumb') }}"> 
                                                                             
                                            @else
                                            <img src="{{ url('') }}/assets/img/product/noimage.png">
                                            @endif 
                                        </a>
                                        <a href="javascript:void(0);">{{ $product->name }}</a>
                                    </td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stocks }}</td>
                                    <td>
                                        <a class="me-3" href="{{ route('products.edit', $product->id) }}">
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
                    <div class="card">
                        <div class="card-body"> 
                            {{ $products->links('pagination') }}  
                        </div>
                        Total Records: {{ $products->total() }}   per page :{{ $products->perPage() }} 
                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>

@endsection