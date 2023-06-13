@extends('admin.master')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Education Update</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Education</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                        </div>
                        <form id="quickForm" action="{{ route('admin.education.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company (Duration)</label>
                                    <input type="text" name="company" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                    @error('company')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" name="location" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter email">
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea id="summernote" name="description" class="form-control" rows="5" placeholder="Description">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group d-flex">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input " type="radio" id="r1" name="status"
                                            value="1" checked>
                                        <label for="r1" class="custom-control-label">Active</label>
                                    </div>
                                    <div class="custom-control custom-radio mx-2">
                                        <input
                                            class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                            type="radio" id="r0" value="0" name="status">
                                        <label for="r0" class="custom-control-label">Inactive</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
