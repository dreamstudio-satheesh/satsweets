@extends('layouts.main')

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
		<div class="col-lg-8 col-sm-12 tabs_wrapper" >
			<div class="page-header ">
				<div class="page-title">
					<h4>Categories</h4>
					<h6>Manage your purchases</h6>
				</div>
			</div>
			<div class="row">
					<div class="col-lg-12" style="width: 113.683px; margin-right: 10px;">						
						<div class="product-details ">
							<img src="assets/img/product/product63.png" alt="img">
							<h6>Headphones</h6>
						</div>
						
					</div>	
					<div class="col-lg-12" style="width: 113.683px; margin-right: 10px;">						
						<div class="product-details ">
							<img src="assets/img/product/product63.png" alt="img">
							<h6>Headphones</h6>
						</div>
						
					</div>	
					<div class="col-lg-12" style="width: 113.683px; margin-right: 10px;">						
						<div class="product-details ">
							<img src="assets/img/product/product63.png" alt="img">
							<h6>Headphones</h6>
						</div>
						
					</div>			

			</div>
					

			<div class="tabs_container" >
				<div  class=" " >
					<div class="row ">
						<div class="col-lg-2 col-sm-3 d-flex ">
							<div class="productset flex-fill">
								<div class="productsetimg">
									<img src="assets/img/product/product29.jpg" alt="img">
									<h6>Qty: 5.00</h6>
									<div class="check-product">
										<i class="fa fa-check"></i>
									</div>
								</div>
								<div class="productsetcontent">
									<h5>Fruits</h5>
									<h4>Orange</h4>
									<h6>150.00</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-3 d-flex ">
							<div class="productset flex-fill">
								<div class="productsetimg">
									<img src="assets/img/product/product29.jpg" alt="img">
									<h6>Qty: 5.00</h6>
									<div class="check-product">
										<i class="fa fa-check"></i>
									</div>
								</div>
								<div class="productsetcontent">
									<h5>Fruits</h5>
									<h4>Orange</h4>
									<h6>150.00</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-3 d-flex ">
							<div class="productset flex-fill">
								<div class="productsetimg">
									<img src="assets/img/product/product31.jpg" alt="img">
									<h6>Qty: 1.00</h6>
									<div class="check-product">
										<i class="fa fa-check"></i>
									</div>
								</div>
								<div class="productsetcontent">
									<h5>Fruits</h5>
									<h4>Strawberry</h4>
									<h6>15.00</h6>
								</div>
							</div>
						</div>
						
						<div class="col-lg-2 col-sm-3 d-flex ">
							<div class="productset flex-fill">
								<div class="productsetimg">
									<img src="assets/img/product/product35.jpg" alt="img">
									<h6>Qty: 5.00</h6>
									<div class="check-product">
										<i class="fa fa-check"></i>
									</div>
								</div>
								<div class="productsetcontent">
									<h5>Fruits</h5>
									<h4>Banana</h4>
									<h6>150.00</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-3 d-flex ">
							<div class="productset flex-fill">
								<div class="productsetimg">
									<img src="assets/img/product/product37.jpg" alt="img">
									<h6>Qty: 5.00</h6>
									<div class="check-product">
										<i class="fa fa-check"></i>
									</div>
								</div>
								<div class="productsetcontent">
									<h5>Fruits</h5>
									<h4>Limon</h4>
									<h6>1500.00</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-sm-3 d-flex ">
							<div class="productset flex-fill">
								<div class="productsetimg">
									<img src="assets/img/product/product54.jpg" alt="img">
									<h6>Qty: 5.00</h6>
									<div class="check-product">
										<i class="fa fa-check"></i>
									</div>
								</div>
								<div class="productsetcontent">
									<h5>Fruits</h5>
									<h4>Apple</h4>
									<h6>1500.00</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="col-lg-4 col-sm-12 ">
			<div class="order-list">
				<div class="orderid">
					<h4>Order List</h4>
				</div>
				<div class="actionproducts">
					<ul>
						<li>
							<a href="javascript:void(0);" class="deletebg confirm-text"><img src="assets/img/icons/delete-2.svg" alt="img"></a>
						</li>
						<li>
							<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset" >
								<img src="assets/img/icons/ellipise1.svg" alt="img">
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" data-popper-placement="bottom-end">
								<li>
									<a href="#" class="dropdown-item">Action</a>
								</li>
								<li>
									<a href="#" class="dropdown-item">Another Action</a>
								</li>
								<li>
									<a href="#" class="dropdown-item">Something Elses</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="card card-order">
				<div class="card-body">
					<div class="row">
						
						<div class="col-lg-12">
							<div class="select-split ">
								<div class="select-group w-100">
									<select class="select">
										<option>Walk-in Customer</option>
										<option>Chris Moris</option>
									</select>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div class="split-card">
				</div>
				<div class="card-body pt-0">
					<div class="totalitem">
						<h4>Total items : 4</h4>
						<a href="javascript:void(0);">Clear all</a>
					</div>
					<div class="product-table">
						<ul class="product-lists">
							<li>
								<div class="productimg">
									<div class="productimgs">
										<img src="assets/img/product/product30.jpg" alt="img">
									</div>
									<div class="productcontet">
										<h4>Pineapple 
										<a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal" data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg" alt="img"></a>
										</h4>
										<div class="productlinkset">
											<h5>PT001</h5>
										</div>
										<div class="increment-decrement">
											<div class="input-groups">
												<input type="button" value="-"  class="button-minus dec button">
												<input type="text" name="child"  value="0" class="quantity-field">
												<input type="button" value="+"  class="button-plus inc button ">
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>3000.00	</li>
							<li><a class="confirm-text" href="javascript:void(0);"><img src="assets/img/icons/delete-2.svg" alt="img"></a></li>
						</ul>
						<ul class="product-lists">
							<li>
								<div class="productimg">
									<div class="productimgs">
										<img src="assets/img/product/product34.jpg" alt="img">
									</div>
									<div class="productcontet">
										<h4>Green Nike 
										<a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal" data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg" alt="img"></a>
										</h4>
										<div class="productlinkset">
											<h5>PT001</h5>
										</div> 
										<div class="increment-decrement">
											<div class="input-groups">
												<input type="button" value="-"  class="button-minus dec button">
												<input type="text" name="child"  value="0" class="quantity-field">
												<input type="button" value="+"  class="button-plus inc button ">
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>3000.00	</li>
							<li><a class="confirm-text" href="javascript:void(0);"><img src="assets/img/icons/delete-2.svg" alt="img"></a></li>
						</ul>
						<ul class="product-lists">
							<li>
								<div class="productimg">
									<div class="productimgs">
										<img src="assets/img/product/product35.jpg" alt="img">
									</div>
									<div class="productcontet">
										<h4>Banana
										<a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal" data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg" alt="img"></a>
										</h4>
										<div class="productlinkset">
											<h5>PT001</h5>
										</div>
										<div class="increment-decrement">
											<div class="input-groups">
												<input type="button" value="-"  class="button-minus dec button">
												<input type="text" name="child"  value="0" class="quantity-field">
												<input type="button" value="+"  class="button-plus inc button ">
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>3000.00	</li>
							<li><a class="confirm-text" href="javascript:void(0);"><img src="assets/img/icons/delete-2.svg" alt="img"></a></li>
						</ul>
						<ul class="product-lists">
							<li>
								<div class="productimg">
									<div class="productimgs">
										<img src="assets/img/product/product31.jpg" alt="img">
									</div>
									<div class="productcontet">
										<h4>Strawberry
										<a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal" data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg" alt="img"></a>
										</h4>
										<div class="productlinkset">
											<h5>PT001</h5>
										</div>
										<div class="increment-decrement">
											<div class="input-groups">
												<input type="button" value="-"  class="button-minus dec button">
												<input type="text" name="child"  value="0" class="quantity-field">
												<input type="button" value="+"  class="button-plus inc button ">
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>3000.00	</li>
							<li><a class="confirm-text" href="javascript:void(0);"><img src="assets/img/icons/delete-2.svg" alt="img"></a></li>
						</ul>
					</div>
				</div>
				<div class="split-card">
				</div>
				<div class="card-body pt-0 pb-2">
					<div class="setvalue">
						<ul>
							<li>
								<h5>Subtotal </h5>
								<h6>55.00$</h6>
							</li>
							<li>
								<h5>Tax </h5>
								<h6>5.00$</h6>
							</li>
							<li class="total-value">
								<h5>Total  </h5>
								<h6>60.00$</h6>
							</li>
						</ul>
					</div>
						
					<div class="btn-totallabel">
						<h5>Checkout</h5>
						<h6>60.00$</h6>
					</div>							
					<div class="btn-pos">
						<ul>
							<li>
								<a class="btn"><img src="assets/img/icons/pause1.svg" alt="img" class="me-1">Hold</a>
							</li>
							<li>
								<a class="btn"><img src="assets/img/icons/edit-6.svg" alt="img" class="me-1">Quotation</a>
							</li>
							<li>
								<a class="btn"><img src="assets/img/icons/trash12.svg" alt="img" class="me-1">Void</a>
							</li>
							<li>
								<a class="btn"><img src="assets/img/icons/wallet1.svg" alt="img" class="me-1">Payment</a>
							</li>
							<li>
								<a class="btn"  data-bs-toggle="modal" data-bs-target="#recents"><img src="assets/img/icons/transcation.svg" alt="img" class="me-1"> Transaction</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
          
@endsection
