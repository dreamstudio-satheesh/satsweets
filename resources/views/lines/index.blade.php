@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lines</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card m-2 p-4">
        <div class="row justify-content-end">
            <div class="mx-3">
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#new-line-modal">New line</a>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-12">
                @forelse($lines as $line)
                    <div class="btn btn-outline-primary"> <a href="{{ route('lines.edit', $line->id) }}">{{ $line->name }}</a> </div>
                @empty
                    <div class="alert alert-light" role="alert">
                        No lines found
                    </div>
                @endforelse
            </div>
        </div>
    </div>


    <div class="modal fade" role="dialog" aria-modal="true" id="new-line-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Line</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <form action="{{ route('lines.store') }}" method="post">
                                    @csrf
                                <label for="exampleInputText01" class="h5">Delivery Area*</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Delivery Area" />
                            </div>
                        </div>
                 
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <div class="btn btn-primary mr-3" >Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
