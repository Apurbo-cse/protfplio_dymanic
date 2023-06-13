@extends('admin.master')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DataTables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($homes as $data)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->description }}</td>
                                        <td><img src="{{ asset($data->image) }}" width="100%" alt=""></td>
                                        <td>
                                            @if($data->status == 0)
                                            <span class="badge bg-danger">Inactive</span>
                                            @else
                                            <span class="badge bg-success">Active</span>
                                            @endif
                                        </td>
                                        <td class="d-flex justify-content-around">
                                            <a href="{{ route('admin.home.edit',$data->id) }}"><i
                                                    class="fa-regular fa-pen-to-square text-info "></i></a>

                                            <form method="post"
                                                action="{{ route('admin.home.destroy',$data->id) }}">
                                                @csrf
                                                @method('delete')
                                                <i class="fa-solid fa-trash-can text-danger"
                                                    onclick="return confirm('Are you confirm to delete?')"></i>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

@endsection
