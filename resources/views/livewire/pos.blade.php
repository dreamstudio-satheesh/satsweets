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
							
							<h6>{{$category->name}} </h6>
						</div>
						
					</div>	                        
                    @endforeach				
						
			</div>
				
			</div>
			
					

			<div class="tabs_container" >
					<div class="row ">
                        @foreach ($products as $item)

                        <div class="col-lg-2 col-sm-3 col-xs-6 d-flex " wire:click="$emit('cartAdded',{{ $item->code }})">
							<div class="productset flex-fill">
								<div class="productsetimg" >
									
									@if ( !empty( $item->getMedia('products')->first() ) )                                          
									<img src="{{ $item->getMedia('products')->first()->getUrl('thumb') }}" class="img-thumbnail">                                        
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
									<h6>{{$item->price}}</h6>
								</div>
							</div>
						</div>
                            
                        @endforeach
						
					
				</div>
				
			</div>
		</div>
		<div class="col-lg-4 col-sm-12 ">
			@livewire('cart-list')
		</div>
	</div>
</div>
