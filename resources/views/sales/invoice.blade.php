
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Invoice-{{ $invoice->invoice_number }}</title>

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/invoices/bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/invoices/stylesheet.css') }}"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-12 text-center">
      <img id="logo" src="{{ asset('logo.png') }}" width="160px" height="107px" title="satsweets" alt="sat logo" />
      <address>
        3/147 Karunaipalayam Pirivu,  Covai-Tiruchy Main Road, <br />
        Kangeyam -638701 Mobile: 90874 49924 <Span class="text-0 fw-400"> GST NO :33ATOPR7702H1ZF</Span>
       
        </address>
    </div>
    <div class="col-sm-12 text-center">
      <h4 class="text-5 mb-0">INVOICE</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-8"><strong>Invoiced To : </strong></div>
    <div class="col-sm-4 text-sm-end"><strong>Invoice &nbsp; </strong> #{{ str_pad($invoice->invoice_number, 4, '0', STR_PAD_LEFT) }} &nbsp;&nbsp;&nbsp;</div>	  
  </div>
 
  <div class="row">

    
    <div class="col-sm-8  order-sm-0"> 
        <address>
         {{ $invoice->customer->name}}<br />
         {{ $invoice->customer->address}}<br />

         @if ($invoice->customer->contact1)
         {{ $invoice->customer->contact1}}<br />
         @endif        
         
         @if ($invoice->customer->gstnumber)
         <Span class="text-0 fw-400">GST NO : {{ $invoice->customer->gstnumber}}</Span>
         @endif
         
        </address>
      </div>

    <div class="col-sm-4 text-sm-end order-sm-1"> <strong> Date &nbsp;:&nbsp;&nbsp;</strong>
        {{ \Carbon\Carbon::parse($invoice->date)->format('d/m/Y')}}
      </div>
  
  </div>
	
  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table id="items" class="table table-bordered mb-0">
		<thead class="card-header">
          <tr>
            <td class="col-3"><strong>HSN Code</strong></td>
			<td class="col-5"><strong>Products</strong></td>
            <td class="col-1 text-center"><strong>QTY</strong></td>
            <td class="col-1 text-center"><strong>GST</strong></td>
			<td class="col-1 text-center"><strong>Rate</strong></td>
            <td class="col-3 text-center"><strong>Amount</strong></td>
          </tr>
        </thead>
          <tbody>
            @foreach ($invoice->invoice_items as $item)
                <tr class="line-height-1">
                <td class="col-3">{{ $item->hsncode }}</td>
                <td class="col-5 text-1">{{ $item->name }}</td>
                <td class="col-1 text-center">{{ $item->quantity }}</td>
                <td class="col-1 text-end">{{ $item->gst}}%</td>
                <td class="col-1 text-end">₹{{ number_format($item->price - $item->gstamount,2) }}</td>
                <td class="col-3 text-center">₹{{ number_format($item->quantity * $item->price,2) }} <span class="text-0">(Incl GST)</span> </td>
              </tr>
            @endforeach
           </tbody>

           <tfoot class="card-footer line-height-1">
			<tr>
              <td colspan="5" class="text-end"><strong>Sub Total:</strong></td>
              <td class="text-end">₹{{ number_format($invoice->sub_total,2) }}</td>
            </tr>
           @if ($fivegst)
            <tr>
              <td colspan="5" class="text-end"><strong>2.5% CGST:</strong></td>
              <td class="text-end">₹{{ number_format($fivegst /2,2) }}</td>
            </tr>
            <tr>
                <td colspan="5" class="text-end"><strong>2.5% SGST:</strong></td>
                <td class="text-end">₹{{ number_format($fivegst /2,2) }}</td>
            </tr>               
           @endif

           @if ($twelvegst)
           <tr>
             <td colspan="5" class="text-end"><strong>6% CGST:</strong></td>
             <td class="text-end">₹{{ number_format($twelvegst /2,2) }}</td>
           </tr>
           <tr>
               <td colspan="5" class="text-end"><strong>6% SGST:</strong></td>
               <td class="text-end">₹{{ number_format($twelvegst /2,2) }}</td>
           </tr>               
          @endif
           
              <tr>
              <td colspan="5" class="text-end border-bottom-0"><strong>Total Bill:</strong></td>
              <td class="text-end border-bottom-0">₹{{ number_format($invoice->total,2) }} </td>
            </tr>
            <?php $unpaid_amount=0; ?>
            @if ($invoice->status !='Paid')
            <tr>
              <td colspan="5" class="text-end border-bottom-0">Pending Invoices :
               
                @foreach ($unpaid as $items)
                  @if ($invoice->invoice_number != $items->invoice_number)
                  {{ str_pad($items->invoice_number, 4, '0', STR_PAD_LEFT)}}, 
                  @endif               
                <?php
                if ($invoice->invoice_number != $items->invoice_number) {
                  $unpaid_amount += ($items->total- $items->paid_amount);
                } ?>
                @endforeach</td>
              <td class="text-end border-bottom-0">₹{{ $unpaid_amount}} </td>
            </tr>
                
            @endif
            
            @if ($invoice->salesreturn)
            <tr>
              <td colspan="5" class="text-end border-bottom-0">{{$invoice->return_note}}</td>
              <td class="text-end border-bottom-0">₹ {{$invoice->salesreturn}}</td>
            </tr>
                
            @endif
            

            <tr>
              <td colspan="5" class="text-end border-bottom-0"><strong>Total:</strong></td>
              <td class="text-end border-bottom-0">
                @if ($invoice->salesreturn)                
                ₹{{ number_format($invoice->total+$unpaid_amount,2)+$invoice->salesreturn }}   
                @else
                ₹{{ number_format($invoice->total+$unpaid_amount,2) }}
                @endif
               </td>
            </tr>
           
		  </tfoot>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <div class="row">
   <hr>
    <p align="right" class="text-2">For SATSWEETS</p>
  </div>
  <footer class="text-center mt-4">
 


  <div class="btn-group btn-group-sm d-print-none"><button onclick="window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</button> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  
  </footer>
</div>
</body>
</html>