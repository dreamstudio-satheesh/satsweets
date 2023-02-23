@extends('layouts.admin')

@push('scripts')

		<!-- Chart JS -->
		<script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>
    
@endpush


@section('content')

            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget">
                            <div class="dash-widgetimg">
                                <span><img src="{{ asset('assets/img/icons/dash1.svg') }}" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5 >₹<span class="counters" data-count="{{$invoicetotal}}">₹{{$invoicetotal}}</span></h5>
                                <h6>Today Sales amount</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash1">
                            <div class="dash-widgetimg">
                                <span><img src="{{ asset('assets/img/icons/dash2.svg') }}" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5 >₹<span class="counters" data-count="{{$salesreturn}}">₹{{$salesreturn}}</span></h5>
                                <h6>Today Return</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash2">
                            <div class="dash-widgetimg">
                                <span><img src="{{ asset('assets/img/icons/dash3.svg') }}" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5 >₹<span class="counters" data-count="385656.50">385,656.50</span></h5>
                                <h6>Total Sale Amount</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="dash-widget dash3">
                            <div class="dash-widgetimg">
                                <span><img src="{{ asset('assets/img/icons/dash4.svg') }}" alt="img"></span>
                            </div>
                            <div class="dash-widgetcontent">
                                <h5 >₹<span class="counters" data-count="40000.00">400.00</span></h5>
                                <h6>Total Sale Amount</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>{{$customers}}</h4>
                                <h5>Stores</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user"></i> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>100</h4>
                                <h5>Customers</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user-check"></i> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>{{ $productscount}}</h4>
                                <h5>Products</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>{{$invoicescount}}</h4>
                                <h5>Sales Invoice</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file"></i>  
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->

                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Purchase & Sales</h5>
                                <div class="graph-sets">
                                    <ul>
                                        <li>
                                            <span>Sales</span>
                                        </li>
                                        <li>
                                            <span>Purchase</span>
                                        </li>
                                    </ul>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            2022 <img src="{{ asset('assets/img/icons/dropdown.svg') }}" alt="img" class="ms-2">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            </li>												
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div id="sales_charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Recently Added Products</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                        <li>
                                            <a href="productlist.html" class="dropdown-item">Product List</a>
                                        </li>
                                        <li>
                                            <a href="addproduct.html" class="dropdown-item">Product Add</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive dataview">
                                    <table class="table datatable ">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Products</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $item)
                                            <tr>
                                                <td>{{$item->id }}</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="{{ asset('assets/img/product/product22.jpg') }}" alt="product">
                                                    </a>
                                                    <a href="productlist.html">{{$item->name }}</a>
                                                </td>
                                                <td>₹{{$item->price }}</td>
                                            </tr>
                                                
                                            @endforeach                                          
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
@endsection