@extends('layouts.main')

@push('styles')

        <link rel="stylesheet" href="assets/plugins/scrollbar/scroll.min.css">

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
                  outline: none
                }

                .sidebar {
                margin-top: 0;
                z-index: 1501;                       
                }
                .productimg{
                        padding-bottom: 10px;
                }

                .cart-list {
                border: 1px solid #FAFBFE;
                 box-shadow: 0px 4px 4px 0px #e3dfdf40; 
                margin: 0 0 5px;
                padding: 5px;
                }

                .tabs_container {
                        min-height: 1200px;
                        
                        }
                .header {
                        position: absolute;
                }

               @media (max-width:768px){

                        .page-header {
                                margin-bottom: 5px;
                        }

                        .productimg .productcontet h4 {
                                        font-size: 9px;
                                        color: #000;
                                        font-weight: 600;
                                        margin-bottom: 5px;
                                        width: 90px;
                                        }

                        .row {                       
                                font-size: 8px;
                        }

                        .page-header .row .col-md-2 {
                                width:65px;
                                margin-right:2px;
                               
                        }
                }

               
               
                  
                @media (min-width:992px) {
                                .page-header .row .col-md-2 {
                                width:105px;
                                margin-right:2px;
                                 }
      
                         }

                        
                    
                      
              </style>
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>


        <!-- Plyr JS -->
	<script src="assets/plugins/scrollbar/scrollbar.min.js"></script>
	<script src="assets/plugins/scrollbar/custom-scroll.js"></script>
        
      
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
