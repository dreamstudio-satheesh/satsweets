<div>
    <div class="row">
		<div class="col-lg-8 col-sm-12 tabs_wrapper" >
			<div class="page-header sticky-top">
				<div class="row">
                    @foreach ($categories as $category)

                    <div class="col-lg-1 col-md-2 col-sm-2" style="width:95px; margin-right: 4px;" wire:click="category({{ $category->id }})">						
						<div class="product-details ">
                                @if ( !empty( $category->getFirstMediaUrl('categories') ) )                                          
                                <img  src="{{ $category->getFirstMediaUrl('categories', 'thumb') }}">                                        
                                @else
                                <img  src="{{ url('') }}/assets/img/product/noimage.png" alt="product" >
                                @endif 
							<div> <p style="font-size: 7px;">{{$category->name}} </p> </div>
							
						</div>
						
					</div>	                        
                    @endforeach				
						
			</div>
				
			</div>
			
					

			<div class="tabs_container" >
					<div class="row ">
                        @foreach ($products as $item)

                        <div class="col-lg-2 col-sm-3 col-xs-6 d-flex " wire:click="$emit('cartAdded',{{ $item->id }})">
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
									<strong><p style="font-size: 10px;">{{$item->name}}</p></strong>
									<h6>{{$item->price}}</h6>
								</div>
							</div>
						</div>
                            
                        @endforeach
						
					
				</div>
				
			</div>
		</div>



		<div class="col-lg-4 col-sm-12 ">
			<livewire:cart-list /> 
			
		</div>
	</div>
</div>
