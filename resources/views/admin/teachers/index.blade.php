@extends('admin.master')
@section('title','Teachers')
@section('style')

@endsection

@section('body')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Teachers</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Teachers</h2>
                            <a href="{{ route('teacher.create') }}" class="btn btn-sm btn-primary btn-addon pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if (session('message'))
                                <div class="alert alert-success" id="lmn">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ session('message') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="datatable-keytable">
                                    <thead class="bg-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Status</th>
                                        <th style="min-width: 100px" class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($s =1)
                                    @foreach($teacher as $value)
                                        <tr>
                                            <td>{{$s++}}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->department->department_name }}</td>
                                            <td>{{ $value->designation->designation_name }}</td>
                                            <td>{{ $value->publication_status ==1 ?  'Published' : 'Unpublished' }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('teacher.destroy',$value) }}" method="post" style="overflow-y: hidden" >
                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="btn-group">
                                                        <a href="{{ route('teacher.edit',$value) }}" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash-o"></i></button>
                                                    </div>
                                                </form>
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