@extends('admin.master')


@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Validation</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">skill</a></li>
                        <li class="breadcrumb-item active">Validation</li>
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


                        <form id="quickForm"
                            action="{{ route('admin.skill.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" value="{{ $data->title }}" name="title" class="form-control"
                                        id="exampleInputEmail1" placeholder="Enter email">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="text" value="{{ $data->description }}" name="description"
                                        class="form-control" placeholder="Enter description">
                                    @error('description')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group d-flex">


                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input " type="radio" id="r1" name="status"@if($data->status == '1') checked   @endif type="radio" id="active" value="1" name="status">
                                        <label for="r1" class="custom-control-label">Active</label>
                                    </div>

                                    <div class="custom-control custom-radio mx-2">
                                        <input
                                            class="custom-control-input custom-control-input-danger custom-control-input-outline"
                                            type="radio" id="r0" value="0" name="status" @if($data->status == '0') checked   @endif type="radio" id="inactive" value="0" name="status">
                                        <label for="r0" class="custom-control-label">Inactive</label>
                                    </div>
                                    @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

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
