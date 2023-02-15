<div>
        @include('livewire.addPayment')

        @include('livewire.showPayment')
    
        <div class="card">
                <div class="card-body"> 

                        <div class="search-set">
                               
                                <div class="search-input">
                                        <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                                <div  class="dataTables_filter"><label> <input type="search" wire:model="search" class="form-control form-control-sm" placeholder="Search..." ></label></div></div>
                        </div>
                     <div>
                        <br>
                        {{ $invoices->withQueryString()->links('pagination') }}  
                      </div>   
                   
                </div>
                
        </div>
    
        <div class="table-responsive">
            <table class="table">
                <thead>
                        <tr>
                                <th>
                                        <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                        </label>
                                </th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Inv Num</th>
                                <th>Payment</th>
                                <th>Total</th>
                                <th>Paid</th>
                                <th>Biller</th>
                                <th class="text-center">Action</th>
                        </tr>
                </thead>
                <tbody>
    
                        @foreach ($invoices as $invoice)
                        <tr>
                                <td>
                                        <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                        </label>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($invoice->date)->format('d/m/Y')}} </td>
                                <td>{{ $invoice->customer->name}}</td>
                                <td>{{ str_pad($invoice->invoice_number, 4, '0', STR_PAD_LEFT) }}</td>
                                <td><span class="badges {{ ($invoice->status == "Unpaid" )?'bg-lightred': 'bg-lightgreen' }}">{{ $invoice->status }}</span></td>
                                <td>{{ $invoice->total }}</td>
                                <td>{{ $invoice->paid_amount }}</td>
                                <td>{{ $invoice->user->name}}</td>
                                <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu"  >
                                                <li>
                                                        <a href="{{url('invoice/')}}/{{$invoice->id}}" class="dropdown-item"><img src="{{ url('/assets/img/icons/eye1.svg') }}" class="me-2" alt="img">View Invoice</a>
                                                </li>
                                               {{--  <li>
                                                        <a href="{{url('thermal/')}}/{{$invoice->id}}" class="dropdown-item"><img src="{{ url('/assets/img/icons/eye1.svg') }}" class="me-2" alt="img">Thermal Print</a>
                                                </li> --}}
                                                <li>
                                                        <a href="{{url('editinvoice/')}}/{{$invoice->id}}" class="dropdown-item"><img src="{{ url('/assets/img/icons/edit.svg') }}" class="me-2" alt="img">Edit Sale</a>
                                                </li>
                                                @if ($invoice->status !='Unpaid')
                                                <li>
                                                        <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" wire:click="showpayment({{ $invoice->invoice_number }})" data-bs-target="#showpayment"><img src="{{ url('/assets/img/icons/dollar-square.svg') }}" class="me-2" alt="img">Show Payments</a>
                                                </li>  
                                                @endif

                                                @if ($invoice->status !='Paid')
                                                <li>
                                                        <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"  wire:click="createpayment({{ $invoice->id }})" data-bs-target="#createpayment"><img src="{{ url('') }}/assets/img/icons/plus-circle.svg" class="me-2" alt="img">Create Payment</a>
                                                </li>
                                                @endif
                                                
                                                <li>
                                                        <a href="javascript:void(0);" class="dropdown-item"><img src="{{ url('/assets/img/icons/download.svg') }}" class="me-2" alt="img">Download pdf</a>
                                                </li>	
                                                <li>
                                                        <form onsubmit="event.preventDefault();" method="POST" action="{{ route('invoice.delete', $invoice->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="dropdown-item btn-flat show_confirm"><img src="{{ url('/assets/img/icons/delete1.svg') }}" class="me-2" alt="img">Delete Sale</button>
                                                        </form>
                                                        
                                                </li>								
                                        </ul>
                                </td>
                        </tr>  
                        @endforeach
                </tbody>
            </table>        
        </div>
        
        <div class="card">
            <div class="card-body"> 
                {{ $invoices->withQueryString()->links('pagination') }}  
            </div>
            Total Records: {{ $invoices->total() }}   per page :{{ $invoices->perPage() }} 
        </div>
    
    </div>
    