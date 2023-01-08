<div>
    <div class="card card-order">
        <div class="card-body">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="select-split ">
                        <div class="select-group w-100">
                            <select wire:model="customer_id" class="form-select form-select-sm" required>
                                <option value="" selected disabled>Walk-in Customer</option>
                                @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>                                    
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Invoice Date</label>                       
                            <input wire:model="invoice_date" type="date"  placeholder="dd-mm-yyyy" class="form-control form-control-sm" required>                            
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
                    <li> ₹ <input class="sminput"  type="number" wire:model.debounce="cartlist.{{ $cart['code'] }}.price" ></li>
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
            
        </div>
    </div>
</div>
