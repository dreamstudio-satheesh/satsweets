@extends('layouts.main')

@push('styles')

     

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

        <style>
           
                .sminput {
                    border: none;
                    border-bottom:0.5px solid rgb(195, 199, 244);
                    border-width: none; 
                    box-shadow: none;
                    background: transparent;
                    width: 44px; /*new width*/
                    height: 24px; /*new width*/
                }         
                .sminput.focus {
                  outline: none;!important;
                }
              </style>
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>

      


        <!-- Sweetalert 2 -->
        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
    
@endpush

@section('content')

<div class="content">
	@livewire('pos',['categories'=>$categories])
</div>
          
@endsection
