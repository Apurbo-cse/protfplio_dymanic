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
                                    <tr>
                                        <td>1</td>
                                        <td>Apurbo Roy </td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio,
                                            necessitatibus?</td>
                                        <td> Image</td>
                                        <td><span class="badge bg-danger">Inactive</span></td>
                                        <td>
                                            <a href=""><i class="fa-regular fa-pen-to-square text-info mx-3"></i></a>
                                            <a href=""> <i class="fa-solid fa-trash-can text-danger"></i></a>
                                        </td>
                                    </tr>

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
