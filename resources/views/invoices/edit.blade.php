@extends('layouts.admin')

@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset ('assets/plugins/select2/css/select2.min.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
        @livewireStyles
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Datetimepicker JS -->
		<script src="{{ asset('assets/js/moment.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

        @livewireScripts
    
@endpush

@section('content')

            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 tabs_wrapper" >
                        
                        @livewire('edit-cart', ['invoice_id' => $id])
                    </div>
                    
                </div>
            </div>
			
		
					
@endsection