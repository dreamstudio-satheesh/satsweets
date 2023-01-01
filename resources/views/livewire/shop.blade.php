<div>
    <div class="row">

        @foreach ( $products as $product)
        <div class="col-md-4 mb-2 mb-md-0">

            <div class="card">
                <div class="card-header">
                    @if ( !empty( $product->getFirstMediaUrl('products') ) )                                          
                    <img src="{{ $product->getFirstMediaUrl('products') }}" class="img-thumbnail">                                        
                    @else
                    <img src="assets/img/product/product29.jpg" class="img-fluid img-thumbnail" alt="img">
                    @endif 
                </div>
                <div class="card-body">
                  <h5 class="card-title  align-center">{{$product->name }}</h5>
                  <p class="card-text  align-center">
                    Rs.{{$product->price }}
                  </p>
                  <a href="#"  wire:click.prevent="cart('{{ $product->id }}')" class="btn btn-primary  align-center" aria-pressed="true">add to cart</a>
                </div>
              </div>
                
           </div>
        @endforeach	
        
    </div>
  
</div>
