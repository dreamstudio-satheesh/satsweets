@extends('layouts.admin')

@push('styles')

        <!-- Select2 CSS -->
        <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    
@endpush

@section('content')

        <div class="content">
					<div class="page-header">
						<div class="page-title">
							<h4>Edit Category</h4>
							<h6>Edit product Category</h6>
						</div>
					</div>
					<!-- /add -->
					<div class="card">
						<div class="card-body">
							<div class="row">
                                <form action="{{ route('categories.update', $category->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
								<div class="col-lg-6 col-sm-6 col-12">
									<div class="form-group">
										<label>Category Name</label>
										<input name="name" type="text" value="{{ old('', $category->name) }}">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label>	Product Image</label>
										<div class="image-upload">
											<input type="file">
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
                            </form>
							</div>
						</div>
					</div>
					<!-- /add -->
				</div>
@endsection
