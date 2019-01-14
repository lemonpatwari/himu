@extends('admin.master')
@section('title','Lemon')

@section('style')
    <style>
        .is-danger{
            border:1px solid red !important;
        }
    </style>

@endsection


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
                            <h2>Lemon</h2>
                            <div class="btn-group pull-right">
                                <a class="btn btn-default btn-sm" href="{{ URL::previous() }}"><i class="fa fa-reply"></i> Back</a>
                                <a class="btn btn-info btn-sm" href="{{ route('lemon.index') }}"><i class="fa fa-list-ul"></i> See List</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>



                        <div class="x_content">
                            <br />

                            @include('admin.notification.errors')
                            @include('admin.notification.success')
                            
                            <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('lemon.store')}}" method="post" autocomplete="off">
                                @csrf
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control input-sm  {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" required value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="email" id="Email" class="form-control input-sm {{ $errors->has('email') ? 'is-danger' : '' }}"  name="email" required value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4">
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <textarea name="description" id="Description" cols="30" rows="10" class="form-control input-sm">{{ old('description') }}</textarea>
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