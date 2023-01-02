<div>

    <form class="form"  wire:submit.prevent="addcart">
        <div class="row">
            <div class="col-lg-3 col-sm-4 col-12">
                <label for="barcode">Scan/Enter  Barcode...</label>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="form-group">
                    <div class="input-groupicon">
                        
                        <input type="text" wire:model="barcode"  autofocus >
                        <div class="addonset">
                            <img src="assets/img/icons/scanners.svg" alt="img">
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
                                    <option>Select Customer</option>
                                    <option>Customer</option>
                                </select>
                            </div>
                            <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                <div class="add-icon">
                                    <a href="javascript:void(0);"><img src="assets/img/icons/plus1.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Quotation Date </label>
                        <div class="input-groupicon">
                            <input type="text" placeholder="DD-MM-YYYY" class="datetimepicker">
                            <div class="addonset">
                                <img src="assets/img/icons/calendars.svg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Reference No.</label>
                        <input type="text" >
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Net Unit Price($)	</th>
                                <th>Stock</th>
                                <th>Qty</th>
                                <th>Discount($)	</th>
                                <th>Tax %	</th>
                                <th class="text-end">Subtotal ($)</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cartlist)
                                @foreach ($cartlist as $cartitem)                              
                                <tr>
                                    <td class="productimgname">                                    
                                        <img src="assets/img/product/product7.jpg" alt="product">
                                        {{ $cartitem[2344]->name }}
                                    </td>
                                    <td>150</td>
                                    <td>500</td>
                                    <td>500</td>
                                    <td>100</td>
                                    <td>250</td>
                                    <td class="text-end">500</td>
                                    <td>
                                        <a href="javascript:void(0);" class="delete-set"><img src="assets/img/icons/delete.svg" alt="svg"></a>
                                    </td>
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
                <div class="col-lg-12 float-md-right">
                    <div class="total-order">
                        <ul>
                            <li>
                                <h4>Order Tax</h4>
                                <h5>$ 0.00 (0.00%)</h5>
                            </li>
                            <li>
                                <h4>Discount	</h4>
                                <h5>$ 0.00</h5>
                            </li>	
                            <li>
                                <h4>Shipping</h4>
                                <h5>$ 0.00</h5>
                            </li>
                            <li class="total">
                                <h4>Grand Total</h4>
                                <h5>$ 0.00</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Order Tax</label>
                        <input type="text" >
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Discount</label>
                        <input type="text" >
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Shipping</label>
                        <input type="text" >
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Status</label>
                        <select class="select">
                            <option>Choose Status</option>
                            <option>Completed</option>
                            <option>Inprogress</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="javascript:void(0);" class="btn btn-submit me-2">Submit</a>
                    <a href="quotationList.html"  class="btn btn-cancel">Cancel</a>
                </div>
            </div>
        </div>
    </div>



</div>
