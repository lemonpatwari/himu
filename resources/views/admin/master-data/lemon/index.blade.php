@extends('admin.master')
@section('title','Lemon')
@section('body')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Master Data</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Designation</h2>
                            <div class="btn-group pull-right">
                                <a class="btn btn-info btn-sm" href="{{ route('lemon.create') }}"><i class="fa fa-plus-circle"></i> Add New</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>



                        <div class="x_content">
                            <br />

                            @if (session('message'))
                                <div class="alert alert-success" id="lmn">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ session('message') }}
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Department</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php($sl=1)
                                    @foreach( $lemon as $value)
                                    <tr>
                                        <td>{{ $sl++ }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->department->department_name }}</td>
                                        <td>{{ $value->description }}</td>
                                        {{--<td>{{ $value->active ==1 ? 'Active' : 'In Active' }}</td>--}}
                                        <td>
                                            @if($value->active == 1)
                                                <label class="label label-success">Active</label>
                                            @else($value->active != 1)
                                                <label class="label label-danger">Deactivate</label>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                @if($value->active == 1)
                                                    <a href="{{ route('deactive-action',$value) }}" class="btn btn-danger btn-xs">Deactivate</a>
                                                @else($value->active != 1)
                                                    <a href="{{ route('active-action',$value) }}" class="btn btn-warning btn-xs">Active</a>
                                                @endif

                                                <a href="{{ route('lemon.edit',$value) }}" class="btn btn-primary btn-xs">Edit</a>
                                            </div>

                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection