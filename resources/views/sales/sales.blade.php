@extends('layouts.admin')


@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ url('') }}/assets/css/bootstrap-datetimepicker.min.css">
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="{{ url('') }}/assets/plugins/select2/js/select2.min.js"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ url('') }}/assets/js/moment.min.js"></script>
        <script src="{{ url('') }}/assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Sweetalert 2 -->
        <script src="{{ url('') }}/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="{{ url('') }}/assets/plugins/sweetalert/sweetalerts.min.js"></script>

        <script type="text/javascript">
                window.livewire.on('close_payment_modal', () => {
                    $('#createpayment').modal('hide');
                });
            </script>
    
@endpush

@section('content')

<div class="content">
        <div class="page-header">
                <div class="page-title">
                        <h4>Sales </h4>
                        <h6>Manage your sales</h6>
                </div>
                <div class="page-btn">
                        <a href="{{ url('pos')}}" class="btn btn-added"><img src="{{ url('') }}/assets/img/icons/plus.svg" alt="img" class="me-1">Add Sales</a>
                </div>
        </div>
        

        <!-- /product list -->
        <div class="card">
                <div class="card-body">
                       
                       
                        <!-- /Filter -->
                        @livewire('sales')
                </div>
        </div>
        <!-- /product list -->
</div>
                
@endsection
