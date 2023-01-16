<div>

    <form class="form"  wire:submit.prevent="addcart">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-12">
                <label for="barcode">Scan/Enter  Barcode...</label>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <div class="input-groupicon">
                        
                        <input type="text" wire:model.defer="barcode"  autofocus >
                        <div class="addonset">
                            <img src="{{ asset('assets/img/icons/scanners.svg') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>
    </form>
        
    
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Customer Name</label>
                        <div class="row">
                            <div class="col-lg-10 col-sm-10 col-10">
                                <select class="form-control">                                    
                                    <option>{{ $invoice->customer->name }}</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Bill Date </label>
                        <div class="input-groupicon">
                            <input type="text" value="{{  \Carbon\Carbon::parse($invoice->date)->format('d-m-Y') }}" class="form-control" disabled>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Bill number </label>
                        <div class="input-groupicon">
                            <input type="text" value="{{ sprintf('%04d',$invoice->id) }}" class="form-control" disabled>
                            
                        </div>
                    </div>

                </div>
              
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Qty</th>
                                <th>Net Unit Price(₹)</th>                                
                                <th>Tax Rate	</th>
                                <th>Tax Amount</th>
                                <th class="text-end">Subtotal (₹)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                         @if($cartlist)
                             @foreach ($cartlist as $item) 
                                                             
                                <tr>
                                    <td class="productimgname">                                    
                                        <img src="{{ asset('assets/img/product/product7.jpg') }}" alt="product">
                                        {{ $item['name'] }}
                                    </td>
                                    <form method="post"></form>
                                    <td><input class="sminput" wire:model="cartlist.{{ $item['code'] }}.quantity" type="number" min="1" max="200"></td>
                                    <td><input name="price" wire:model="cartlist.{{ $item['code'] }}.price" class="sminput" type="text" ></td>                                    
                                    <td> {{ $item['gst'] }} %</td>
                                    <td>  {{ $item['gstamount']*$item['quantity'] }} </td>
                                    <td class="text-end"> 
                                        {{ $item['total'] -$item['gstamount']*$item['quantity'] }}
                                     </td>
                                    <td>                                        
                                        <a href="javascript:void(0);" class="delete-set"><img src="{{ asset('assets/img/icons/delete.svg') }}" alt="svg"></a>
                                    </td>
                                </form>
                                </tr>  
                                                                   
                                @endforeach                           
                            @else
                            <tr>
                                <td colspan="7" style="text-align: center;">

                                    <br /><br />
                                    Shopping cart empty
                                    <br /><br />
                                 </td>                            
                            </tr>
                                
                            @endif
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-6 float-md-right">
                    <div class="total-order">
                        <ul>
                            
                            <li>
                                <h4>Sub Total	</h4>
                                <h5>{{ $invoice->sub_total}}</h5>
                            </li>	
                            <li>
                                <h4>Tax</h4>
                                <h5>{{ $invoice->taxamount}}</h5>
                            </li>
                            <li class="total">
                                <h4>Grand Total</h4>
                                <h5>₹ {{ $invoice->total}}</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
  
                <div class="col-lg-6">
                    
                </div>
                <div class="col-lg-6 float-md-right">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                    <a href="quotationList.html"  class="btn btn-cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>



</div>