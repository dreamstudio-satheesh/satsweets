<div>
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
                <h4>Total items : {{ $total_count }}</h4>
                <a href="javascript: void(0)" wire:click="clear_cart()">Clear all</a>
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
                    <li><input class="sminput"  type="text" wire:model.debounce="cartlist.{{ $cart['code'] }}.price" value=""></li>
                    <li><a class="confirm-text" href="javascript:void(0);" wire:click="delete_cart({{ $cart['code']}})"><img src="assets/img/icons/delete-2.svg" alt="img"></a></li>
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
                        <h6>₹{{ $sub_total }}</h6>
                    </li>
                    <li>
                        <h5>Tax </h5>
                        <h6>₹{{ $taxamount }}</h6>
                    </li>
                    <li class="total-value">
                        <h5>Total  </h5>
                        <h6>₹{{ $total }}</h6>
                    </li>
                </ul>
            </div>
                
            <div class="btn-totallabel">
                <h5>Checkout</h5>
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
