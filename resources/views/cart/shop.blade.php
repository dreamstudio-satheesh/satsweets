@extends('layouts.admin')

@push('styles')

        <!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.theme.default.min.css">

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>

        <!-- Owl JS -->
		<script src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>


        <!-- Sweetalert 2 -->
        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
    
@endpush

@section('content')

				<div class="content">
					<div class="row">
						<div class="col-lg-12 col-sm-12 tabs_wrapper" >
							<div class="page-header ">
								<div class="page-title">
									<h4>Categories</h4>
									<h6>Manage your purchases</h6>
								</div>
							</div>
							<ul class=" tabs owl-carousel owl-theme owl-product  border-0 " >
								<li class="active" id="fruits">
									<div class="product-details " >
										<img src="assets/img/product/product62.png" alt="img">
										<h6>Fruits</h6>
									</div>
								</li>
								<li id="headphone">
									<div class="product-details " >
										<img src="assets/img/product/product63.png" alt="img">
										<h6>Headphones</h6>
									</div>
								</li>
								<li id="Accessories">
									<div class="product-details">
										<img src="assets/img/product/product64.png" alt="img">
										<h6>Accessories</h6>
									</div>
								</li>
								<li id="Shoes">
									<a class="product-details">
										<img src="assets/img/product/product65.png" alt="img">
										<h6>Shoes</h6>
									</a>
								</li>
								<li id="computer">
									<a class="product-details">
										<img src="assets/img/product/product66.png" alt="img">
										<h6>Computer</h6>
									</a>
								</li>
								<li id="Snacks">
									<a class="product-details">
										<img src="assets/img/product/product67.png" alt="img">
										<h6>Snacks</h6>
									</a>
								</li>
								<li id="watch">
									<a class="product-details">
										<img src="assets/img/product/product68.png" alt="img">
										<h6>Watches</h6>
									</a>
								</li>
								<li id="cycle">
									<a class="product-details">
										<img src="assets/img/product/product61.png" alt="img">
										<h6>Cycles</h6>
									</a>
								</li>	
								<li id="fruits1">
									<div class="product-details " >
										<img src="assets/img/product/product62.png" alt="img">
										<h6>Fruits</h6>
									</div>
								</li>
								<li id="headphone1">
									<div class="product-details " >
										<img src="assets/img/product/product63.png" alt="img">
										<h6>Headphones</h6>
									</div>
								</li>
							</ul>
							<div class="tabs_container" >
								<div  class="tab_content active" data-tab="fruits">
									<div class="row ">
                                        @foreach ($products as $product)
                                        <div class="col-lg-3 col-sm-6 d-flex ">
											<div class="productset flex-fill">
												<div class="productsetimg">
                                                    @if ( !empty( $product->getFirstMediaUrl('products') ) )                                          
                                                    <img src="{{ $product->getFirstMediaUrl('products', 'thumb') }}">                                        
                                                    @else
                                                    <img src="assets/img/product/product29.jpg" alt="img">
                                                    @endif 													
													<h6>Qty: {{$product->stocks }}</h6>
													<div class="check-product">
														<i class="fa fa-check"></i>
													</div>
												</div>
												<div class="productsetcontent">
													<h5>{{$product->name }}</h5>
													<h4>{{$product->price }}</h4>
													<h6>{{$product->stocks }}</h6>
												</div>
											</div>
										</div>
                                            
                                        @endforeach									
										
									</div>
								</div>
								
							
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="calculator" tabindex="-1"   aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						 <h5 class="modal-title" >Define Quantity</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="calculator-set">
							<div class="calculatortotal">
								<h4>0</h4>
							</div>
							<ul>
								<li>
									<a href="javascript:void(0);">1</a>
								</li>
								<li>
									<a href="javascript:void(0);">2</a>
								</li>
								<li>
									<a href="javascript:void(0);">3</a>
								</li>
								<li>
									<a href="javascript:void(0);">4</a>
								</li>
								<li>
									<a href="javascript:void(0);">5</a>
								</li>
								<li>
									<a href="javascript:void(0);">6</a>
								</li>
								<li>
									<a href="javascript:void(0);">7</a>
								</li>
								<li>
									<a href="javascript:void(0);">8</a>
								</li>
								<li>
									<a href="javascript:void(0);">9</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-closes"><img src="assets/img/icons/close-circle.svg" alt="img"></a>
								</li>
								<li>
									<a href="javascript:void(0);">0</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="btn btn-reverse"><img src="assets/img/icons/reverse.svg" alt="img"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="holdsales" tabindex="-1"    aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						 <h5 class="modal-title" >Hold order</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="hold-order">
							<h2>4500.00</h2>
						</div>
						<div class="form-group">
							<label>Order Reference</label>
							<input type="text">
						</div>
						<div class="para-set">
							<p>The current order will be set on hold. You can retreive this order from the pending order button. Providing a reference to it might help you to identify the order more quickly.</p>
						</div>
						<div class="col-lg-12">
							<a class="btn btn-submit me-2">Submit</a>
							<a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="edit" tabindex="-1"    aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						 <h5 class="modal-title" >Edit Order</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Product Price</label>
									<input type="text" value="20">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Product Price</label>
									<select class="select">
										<option>Exclusive</option>
										<option>Inclusive</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label> Tax</label>
									<div class="input-group">
										<input type="text">
										<a class="scanner-set input-group-text">
											%
										</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Discount Type</label>
									<select class="select">
										<option>Fixed</option>
										<option>Percentage</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Discount</label>
									<input type="text" value="20">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Sales Unit</label>
									<select class="select">
										<option>Kilogram</option>
										<option>Grams</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<a class="btn btn-submit me-2">Submit</a>
							<a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="create" tabindex="-1" aria-labelledby="create"  aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						 <h5 class="modal-title" >Create</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Customer Name</label>
									<input type="text">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Email</label>
									<input type="text">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Phone</label>
									<input type="text">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Country</label>
									<input type="text">
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>City</label>
									<input type="text" >
								</div>
							</div>
							<div class="col-lg-6 col-sm-12 col-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" >
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<a class="btn btn-submit me-2">Submit</a>
							<a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="delete" tabindex="-1"    aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						 <h5 class="modal-title" >Order Deletion</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="delete-order">
							<img src="assets/img/icons/close-circle1.svg" alt="img">
						</div>
						<div class="para-set text-center">
							<p>The current order will be deleted as no payment has been <br> made so far.</p>
						</div>
						<div class="col-lg-12 text-center">
							<a class="btn btn-danger me-2">Yes</a>
							<a class="btn btn-cancel" data-bs-dismiss="modal">No</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="recents" tabindex="-1"    aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						 <h5 class="modal-title" >Recent Transactions</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="tabs-sets">
							<ul class="nav nav-tabs" id="myTabs" role="tablist">
								<li class="nav-item" role="presentation">
								  <button class="nav-link active" id="purchase-tab" data-bs-toggle="tab" data-bs-target="#purchase" type="button"   aria-controls="purchase" aria-selected="true" role="tab">Purchase</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button"   aria-controls="payment" aria-selected="false" role="tab">Payment</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="return-tab" data-bs-toggle="tab" data-bs-target="#return" type="button"   aria-controls="return" aria-selected="false" role="tab">Return</button>
								</li>
							  </ul>
							  <div class="tab-content" >
								<div class="tab-pane fade show active" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
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
										<table class="table datanew">
											<thead>
												<tr>
													<th>Date</th>
													<th>Reference</th>
													<th>Customer</th>
													<th>Amount	</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2022-03-07	</td>
													<td>INV/SL0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>INV/SL0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>INV/SL0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>INV/SL0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>INV/SL0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>INV/SL0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>INV/SL0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
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
								<div class="tab-pane fade" id="payment" role="tabpanel" >
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
										<table class="table datanew">
											<thead>
												<tr>
													<th>Date</th>
													<th>Reference</th>
													<th>Customer</th>
													<th>Amount	</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2022-03-07	</td>
													<td>0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0102</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0103</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0104</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0105</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0106</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0107</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
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
								<div class="tab-pane fade" id="return" role="tabpanel" >
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
										<table class="table datanew">
											<thead>
												<tr>
													<th>Date</th>
													<th>Reference</th>
													<th>Customer</th>
													<th>Amount	</th>
													<th class="text-end">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2022-03-07	</td>
													<td>0101</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0102</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0103</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0104</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0105</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0106</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/edit.svg" alt="img">
														</a>
														<a class="me-3 confirm-text" href="javascript:void(0);">
															<img src="assets/img/icons/delete.svg" alt="img">
														</a>
													</td>
												</tr>
												<tr>
													<td>2022-03-07	</td>
													<td>0107</td>
													<td>Walk-in Customer</td>
													<td>$ 1500.00</td>
													<td>
														<a class="me-3" href="javascript:void(0);">
															<img src="assets/img/icons/eye.svg" alt="img">
														</a>
														<a class="me-3" href="javascript:void(0);">
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
						</div>
					</div>
				</div>
			</div>
@endsection
