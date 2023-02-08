@extends('layouts.admin')


@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    
@endpush

@push('scripts')

        

        <!-- Datetimepicker JS -->
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Sweetalert 2 -->
        <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
        <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
    
@endpush

@section('content')

<div class="content">
        <div class="page-header">
                <div class="page-title">
                        <h4>Line Setting</h4>
                </div>
        </div>
        <!-- /add -->
        <div class="card">
                <div class="card-body">
                        <div class="row">
                                <form action="{{ route('user.selectline') }}" method="post">
                                        @csrf
                                <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="form-group">
                                                <label>Select Line <span class="manitory">*</span></label>
                                                <select name="line_id" id="line" " class="form-control" >
                                                        <option selected value="">-- Select Line --</option>
                                                        @foreach ($lines as $line)
                                                        <option value="{{ $line->id }}">{{ $line->name }}</option>
                                                        @endforeach
                                                      </select>
                                                   
                                                    @error('line_id')
                                                        <span class="text-danger small" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                        </div>
                                </div>
                                
                                <div class="row">
                                        <div class="col-lg-12">
                                                <input type="submit" class="btn btn-submit me-2" value="Submit">
                                                <a  onclick="history.back()" class="btn btn-cancel">Cancel</a>
                                        </div>
                                </div>
                                </form>
                        </div>
                </div>
        </div>
        <!-- /add -->
</div>
                
@endsection
