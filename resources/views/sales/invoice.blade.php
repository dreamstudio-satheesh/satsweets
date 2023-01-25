
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>General Invoice - Koice</title>

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
      <img id="logo" src="{{ asset('logo.png') }}" width="160px" height="107px" title="satsweets" alt="sat logo" />
    </div>
    <div class="col-sm-5 text-center text-sm-end">
      <h4 class="text-7 mb-0">Invoice</h4>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-8"><strong>Date:</strong> 05/12/2020</div>
    <div class="col-sm-4 text-sm-end"> <strong>Invoice No:</strong> 16835</div>
	  
  </div>
  <hr>
  <div class="row">

    <div class="col-sm-8 order-sm-0"> <strong>Pay To:</strong>
        <address>
        Smith Rhodes<br />
        15 Hodges Mews, High Wycombe<br />
        HP12 3JL<br />
        United Kingdom
        </address>
      </div>

    <div class="col-sm-4 text-sm-end order-sm-1"> <strong>Invoiced To:</strong>
      <address>
      Koice Inc<br />
      2705 N. Enterprise St<br />
      Orange, CA 92865<br />
	  contact@koiceinc.com
      </address>
    </div>
   
  </div>
	
  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0">
		<thead class="card-header">
          <tr>
            <td class="col-3"><strong>Service</strong></td>
			<td class="col-4"><strong>Description</strong></td>
            <td class="col-2 text-center"><strong>Rate</strong></td>
			<td class="col-1 text-center"><strong>QTY</strong></td>
            <td class="col-2 text-end"><strong>Amount</strong></td>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td class="col-3">Design</td>
              <td class="col-4 text-1">Creating a website design</td>
              <td class="col-2 text-center">$50.00</td>
			  <td class="col-1 text-center">10</td>
			  <td class="col-2 text-end">$500.00</td>
            </tr>
            <tr>
              <td>Development</td>
              <td class="text-1">Website Development</td>
              <td class="text-center">$120.00</td>
			  <td class="text-center">10</td>
			  <td class="text-end">$1200.00</td>
            </tr>
			<tr>
              <td>SEO</td>
              <td class="text-1">Optimize the site for search engines (SEO)</td>
              <td class="text-center">$450.00</td>
			  <td class="text-center">1</td>
			  <td class="text-end">$450.00</td>
            </tr>
          </tbody>
		  <tfoot class="card-footer">
			<tr>
              <td colspan="4" class="text-end"><strong>Sub Total:</strong></td>
              <td class="text-end">$2150.00</td>
            </tr>
            <tr>
              <td colspan="4" class="text-end"><strong>Tax:</strong></td>
              <td class="text-end">$215.00</td>
            </tr>
			<tr>
              <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
              <td class="text-end border-bottom-0">$2365.00</td>
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