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
                    max-width: 50px; /*new width*/
                    height: 24px; /*new width*/
                }         
                .sminput.focus {
                  outline: none;!important;
                }

                .sidebar {
                        background-color: transparent;
                        border-right: 1px solid transparent;
                        margin-top: 0;
                        z-index: 1501;
                        position: fixed;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        -webkit-transition: all 0.2s ease;
                        -ms-transition: all 0.2s ease;
                        transition: all 0.2s ease;
                        border-right: 1px solid #E8EBED;
                        width: 260px;
                        }
              </style>
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>

      
        <!-- Datetimepicker JS -->
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>


        <!-- Sweetalert 2 -->
        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
    
@endpush

@section('content')

<div class="content">
	@livewire('pos',['categories'=>$categories])
</div>
          
@endsection
