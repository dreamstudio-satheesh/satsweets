<div>
    <div class="row">
		<div class="col-lg-8 col-sm-12 tabs_wrapper" >
			<div class="page-header ">
				<div class="row">
                    @foreach ($categories as $category)

                    <div class="col-lg-12" style="width: 113.683px; margin-right: 10px;" wire:click="category({{ $category->id }})">						
						<div class="product-details ">
                                @if ( !empty( $category->getFirstMediaUrl('categories') ) )                                          
                                <img src="{{ $category->getFirstMediaUrl('categories', 'thumb') }}">                                        
                                @else
                                <img src="{{ url('') }}/assets/img/product/noimage.png" alt="product" >
                                @endif 
							
							<h6>{{$category->name}}</h6>
						</div>
						
					</div>	                        
                    @endforeach				
						
			</div>
				
			</div>
			
					

			<div class="tabs_container" >
					<div class="row ">
                        @foreach ($products as $item)

                        <div class="col-lg-3 col-sm-4 col-xs-6 d-flex " wire:click="cart({{ $item->code }})">
							<div class="productset flex-fill">
								<div class="productsetimg" >
									
									@if ( !empty( $item->getFirstMediaUrl('products') ) )                                          
									<img src="{{ $item->getFirstMediaUrl('products') }}" class="img-thumbnail">                                        
									@else
									<img src="assets/img/product/product29.jpg" class="img-fluid img-thumbnail" alt="img">
									@endif 
									<h6>Qty:{{$item->stocks}}</h6>
									<div class="check-product">
										<i class="fa fa-check"></i>
									</div>
								</div>
								<div class="productsetcontent">
									<h5>{{$item->code}}</h5>
									<h4>{{$item->name}}</h4>
									<h6>Rs.{{$item->price}}</h6>
								</div>
							</div>
						</div>
                            
                        @endforeach
						
					
				</div>
				
			</div>
		</div>
		<div class="col-lg-4 col-sm-12 ">
			
			<div class="card card-order">
				<div class="card-body">
					<div class="row">
						
						<div class="col-lg-12">
							<div class="select-split ">
								<div class="select-group w-100">
									<select class="form-select">
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
						@foreach ($cartlist as $cart)
						<ul class="product-lists">
							<li>
								<div class="productimg">
									<div class="productimgs">
										
									@if ( !empty( $cart['url']))                                          
									<img src="{{ $cart['url'] }}" >                                        
									@else
									<img src="assets/img/product/product29.jpg"  alt="img">
									@endif
									</div>
									<div class="productcontet">
										<h4>{{ $cart['name']}} 
										<a href="javascript:void(0);" class="ms-2" data-bs-toggle="modal" data-bs-target="#edit"><img src="assets/img/icons/edit-5.svg" alt="img"></a>
										</h4>
										<div class="productlinkset">
											<h5>{{ $cart['code']}}</h5>
										</div>
										<div class="increment-decrement">
											<div class="input-groups">
												<input type="button" value="-" wire:click="removecart({{ $cart['code']}})   class="button-minus dec button">
												<input type="text" name="child"  value="{{ $cart['quantity']}}" class="quantity-field">
												<input type="button" value="+" wire:click="addcart({{ $cart['code']}})  class="button-plus inc button ">
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>{{ $cart['price']}}</li>
							<li><a class="confirm-text" href="javascript:void(0);"><img src="assets/img/icons/delete-2.svg" alt="img"></a></li>
						</ul>
						@endforeach
						
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
