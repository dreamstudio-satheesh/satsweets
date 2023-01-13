@extends('layouts.admin')

@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    
@endpush

@push('scripts')

        <!-- Select2 JS -->
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

        <!-- Datetimepicker JS -->
        <script src="{{ asset('assets/js/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

        <!-- Sweetalert 2 -->
        <script src="{{ asset('assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>
    
@endpush

@section('content')

        <div class="content">
					<div class="page-header">
						<div class="page-title">
							<h4>Add Product</h4>
							<h6>Create new product</h6>
						</div>
					</div>
					<!-- /add -->
					<div class="card">
						<div class="card-body">
                            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
							<div class="row">                                
								<div class="col-lg-4 col-sm-6 col-12">
									<div class="form-group">
										<label>Product Name</label>
										<input name="name" type="text" required>
									</div>
								</div>
                                <div class="col-lg-4 col-sm-6 col-12">
									<div class="form-group">
										<label>Category</label>
										<select class="select" name="category_id">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
										</select>
									</div>
								</div>
                                <div class="col-lg-4 col-sm-6 col-12">
									<div class="form-group">
										<label>Product Price</label>
										<input name="price" type="text" required>
									</div>
								</div>
                                <div class="col-lg-3 col-sm-6 col-12">
									<div class="form-group">
										<label>Barcode</label>
										<input name="code" type="text"   maxlength="12"  required>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 col-12">
									<div class="form-group">
										<label>Stocks</label>
										<input name="stocks" type="text" required>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 col-12">
									<div class="form-group">
										<label>HSN Code</label>
										<input name="hsncode" type="text" required>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6 col-12">
									<div class="form-group">
										<label>GST</label>
										<select class="select" name="gst">											
											<option value="5">5%</option>
											<option value="12">12%</option>
											<option value="18">18%</option>
											<option value="0">0%</option>
										</select>
									</div>
								</div>


                            </div>
                            <div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label>	Product Image</label>
										<div class="image-upload">
											<input type="file"name="photo">
											<div class="image-uploads">
												<img src="{{ asset('assets/img/icons/upload.svg') }}" alt="img">
												<h4>Drag and drop a file to upload</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <a onclick="history.back()"  class="btn btn-cancel">Cancel</a>
								</div>
							</div>
                        </form>
						</div>
					</div>
					<!-- /add -->
				</div>
@endsection
