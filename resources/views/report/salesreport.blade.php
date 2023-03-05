@extends('layouts.admin')


@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap-datetimepicker.min.css">
        <style>
        .table {
                border-collapse: separate;
                border-spacing:0 20px;
        }
        </style>
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="{{ url('') }}/assets/plugins/select2/js/select2.min.js"></script>
        <script src="{{ url('') }}/assets/plugins/select2/js/select2.min.js"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ url('') }}/assets/js/moment.min.js"></script>
        <script src="{{ url('') }}/assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Sweetalert 2 -->
        <script src="{{ url('') }}/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="{{ url('') }}/assets/plugins/sweetalert/sweetalerts.min.js"></script>

  
    
@endpush

@section('content')

<div id="printable" class="content">
        <div class="page-header">
                <div class="page-title">
                        <h4>Sales Report</h4>
                        <h6>Manage your Sales Report</h6>
                </div>
        </div>

        <!-- /product list -->
        <div class="card">
                <div class="card-body">
                        <div class="table-top">
                                <div class="search-set">
                                        <div class="search-path">
                                                <a class="btn btn-filter" id="filter_search">
                                                        <img src="{{ url('') }}/assets/img/icons/filter.svg" alt="img">
                                                        <span><img src="{{ url('') }}/assets/img/icons/closes.svg" alt="img"></span>
                                                </a>
                                        </div>
                                       
                                </div>
                                <div class="wordset">
                                        <ul>
                                                <li>
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ url('') }}/assets/img/icons/pdf.svg" alt="img"></a>
                                                </li>
                                                <li>
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ url('') }}/assets/img/icons/excel.svg" alt="img"></a>
                                                </li>
                                                <li>
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ url('') }}/assets/img/icons/printer.svg" alt="img"></a>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <!-- /Filter -->
                        <div class="card" id="filter_inputs">
                                <div class="card-body pb-0">
                                        <form method="post" action="">
                                                @csrf
                                                <div class="row">
                                                
                                                        <div class="col-lg col-sm-6 col-12">
                                                                <div class="form-group">
                                                                        <input required name='curdate' type="date" value="{{ date("Y-m-d") }}" class="form-control">
                                                                </div>
                                                        </div>

                                                        <div class="col-lg col-sm-6 col-12">
                                                                <div class="form-group">
                                                                        <select required name='lineid' class="form-control nested"  id="selectbox">
                                                                        
                                                                                <optgroup label="line A">
                                                                                        @foreach ($lines as $line)
                                                                                        @if ($line->line == 1)
                                                                                        <option value="{{ $line->id}}" selected>{{ $line->name}}</option>
                                                                                        @endif
                                                                                        @endforeach                                                                      
                                                                                </optgroup>
                                                                                <optgroup label="line E">
                                                                                        @foreach ($lines as $line)
                                                                                        @if ($line->line == 5)
                                                                                        <option value="{{ $line->id}}" selected>{{ $line->name}}</option>
                                                                                        @endif
                                                                                        @endforeach 
                                                                                </optgroup>
                
                                                                        
                                                                                
                                                                        </select>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-1 col-sm-6 col-12">
                                                                <div class="form-group">
                                                                        <button type="submit" class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></button>
                                                                </div>
                                                        </div>
                                                </div>
                                      
                                        </form>
                                      
                                </div>
                   
                         </div>
                        </div>
                        <!-- /Filter -->
                        <div class="table-responsive">
                                <table class="table datanew">
                                        <thead>
                                                <tr>
                                                        <th>S.No</th>
                                                        <th>Store Name</th>                                                        
                                                        <th>Place</th>
                                                        <th>Phone</th>
                                                        <th>Bill amount</th>
                                                        <th>Paid</th>
                                                        <th>Gpay</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                        @php($i = 1)

                                        @foreach ($customers as $item)

                                        <tr>
                                                <td>{{ $i }}</td>      
                                                <td>{{ $item->name }}</td>                                               
                                                <td>{{ Str::limit($item->address, 20) }}</td>  
                                                <td>{{ $item->contact1 }}</td>
                                               <td>         
                                                 @foreach ($item->invoices as $invoice)
                                                  {{ number_format($invoice->total,2) }}
                                                @endforeach
                                               </td> 
                                               <td>         
                                                @foreach ($item->invoices as $invoice)
                                                 {{ number_format($invoice->paid_amount,2) }}
                                               @endforeach
                                              </td>  
                                               
                                                <td></td>
                                        </tr>

                                        @php($i++)
                                            
                                        @endforeach
                                                
                                               
                                        </tbody>
                                        
                                </table>
                        </div>
                </div>
        </div>
        <!-- /product list -->
</div>
                
@endsection
