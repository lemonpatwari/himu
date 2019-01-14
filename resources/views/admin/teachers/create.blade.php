@extends('admin.master')
@section('title','Teachers')
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
                            <div class="btn-group pull-right">
                                <a class="btn btn-default btn-sm" href="{{ URL::previous() }}"><i class="fa fa-reply"></i> Back</a>
                                <a class="btn btn-info btn-sm" href="{{ route('teacher.index') }}"><i class="fa fa-list-ul"></i> See List</a>
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

                            <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('teacher.store')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control input-sm" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Department</label>
                                        <select name="department_id" id="" class="form-control input-sm">
                                            @foreach($department as $value)
                                            <option value="{{ $value->id }}">{{ $value->department_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Designation</label>
                                        <select name="designation_id" id="" class="form-control input-sm">
                                            @foreach($designation as $value)
                                                <option value="{{ $value->id }}">{{ $value->designation_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control input-sm" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Cell</label>
                                        <input type="cell" class="form-control input-sm" name="cell">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Blood Group</label>
                                        <select name="blood_group" id="" class="form-control input-sm">
                                            <option value="N/A">N/A</option>
                                            <option value="A +">A +</option>
                                            <option value="A -">A -</option>
                                            <option value="B +">B +</option>
                                            <option value="B -">B -</option>
                                            <option value="AB +">AB +</option>
                                            <option value="AB -">AB -</option>
                                            <option value="O +">O +</option>
                                            <option value="O -">O -</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Education Status</label>
                                        <textarea name="education_status" id="" cols="30" rows="3" class="form-control input-sm"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="form-check-input" id="radio1" name="publication_status" value="1" checked> Published
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input" id="radio2" name="publication_status" value="0"> Unpublished
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@section('script')
    <script>

    </script>
@endsection