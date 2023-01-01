@extends('layouts.admin')

@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="assets/plugins/select2/js/select2.min.js"></script>

        <!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        

        <script type="text/javascript">
			
		</script>
    
@endpush

@section('content')

            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 tabs_wrapper" >
                        

                        @livewire('show-cart', ['cartlist' => $cartlist])
                       
                    </div>
                    
                </div>
            </div>
			
		
					
@endsection