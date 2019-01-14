@extends('admin.master')
@section('title','Department')
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
                            <h2>Department</h2>
                            <div class="btn-group pull-right">
                                <a class="btn btn-default btn-sm" href="{{ URL::previous() }}"><i class="fa fa-reply"></i> Back</a>
                                <a class="btn btn-info btn-sm" href="{{ route('designation.index') }}"><i class="fa fa-list-ul"></i> See List</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('designation.update',$designation)}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="">Designation Name</label>
                                        <input type="text" class="form-control input-sm" name="designation_name" value="{{ $designation->designation_name }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" {{ $designation->publication_status == 1 ? 'checked' : '' }} class="form-check-input" id="radio1" name="publication_status" value="1"> Published
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" {{ $designation->publication_status == 0 ? 'checked' : '' }} class="form-check-input" id="radio2" name="publication_status" value="0"> Unpublished
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="btn-group">
                                            <button id="abc" type="submit" class="btn btn-success btn-sm"><i class="fa fa-floppy-o"></i> Update</button>
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