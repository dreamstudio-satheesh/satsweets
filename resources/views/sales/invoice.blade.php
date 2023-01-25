
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
    <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
      <img id="logo" src="{{ asset('logo.png') }}" width="120px" height="81px" title="satsweets" alt="sat logo" />
    </div>
    <div class="col-sm-5 text-center text-sm-end">
      <h4 class="text-8 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-8"><strong>Date:</strong> {{ \Carbon\Carbon::parse($invoice->date)->format('d/m/Y')}} </div>
    <div class="col-sm-4 text-sm-end"> <strong>Invoice No:</strong> {{ str_pad($invoice->invoice_number, 4, '0', STR_PAD_LEFT) }} </div>	  
  </div>
 
  <div class="row">

    
    <div class="col-sm-8  order-sm-0"> <strong>Invoiced To:</strong>
        <address>
         {{ $invoice->customer->name}}<br />
         {{ $invoice->customer->address}}<br />
         {{ $invoice->customer->gstnumber}}
        </address>
      </div>

    <div class="col-sm-4 text-sm-end order-sm-1"> <strong>Pay To:</strong>
        <address>
        SAT Sweets<br />
        3/147 Karunaipalayam Pirivu, <br />
        Covai-Tiruchy Main Road, <br />
        Kangeyam -638701 <br /> <Span class="text-0 fw-400"> GST NO :33ATOPR7702H1ZF</Span>
       
        </address>
      </div>
  
  </div>
	
  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table id="items" class="table table-bordered mb-0">
		<thead class="card-header">
          <tr>
            <td class="col-3"><strong>HSN Code</strong></td>
			<td class="col-4"><strong>Products</strong></td>
            <td class="col-2 text-center"><strong>QTY</strong></td>
			<td class="col-1 text-center"><strong>Price</strong></td>
            <td class="col-2 text-end"><strong>Amount</strong></td>
          </tr>
        </thead>
          <tbody>
            @foreach ($invoice->invoice_items as $item)
                <tr class="line-height-1">
                <td class="col-3">{{ $item->hsncode }}</td>
                <td class="col-4 text-1">{{ $item->name }}</td>
                <td class="col-2 text-center">{{ $item->quantity }}</td>
                <td class="col-1 text-center">₹{{ $item->price }}</td>
                <td class="col-2 text-end">₹{{ $item->total - ($item->quantity * $item->gstamount) }}</td>
              </tr>
            @endforeach
           </tbody>

           <tfoot class="card-footer">
			<tr>
              <td colspan="4" class="text-end"><strong>Sub Total:</strong></td>
              <td class="text-end">₹{{ $invoice->sub_total }}</td>
            </tr>
            <tr>
              <td colspan="4" class="text-end"><strong>2.5% CGST:</strong></td>
              <td class="text-end">₹{{ $invoice->taxamount /2 }}</td>
            </tr>
            <tr>
                <td colspan="4" class="text-end"><strong>2.5% SGST:</strong></td>
                <td class="text-end">₹{{ $invoice->taxamount /2 }}</td>
              </tr>
			<tr>
              <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
              <td class="text-end border-bottom-0">₹{{ $invoice->total }}</td>
            </tr>
		  </tfoot>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>

  <div class="btn-group btn-group-sm d-print-none"><button onclick="window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</button> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
</div>
</body>
</html>