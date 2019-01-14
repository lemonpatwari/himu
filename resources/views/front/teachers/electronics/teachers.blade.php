@extends('front.master')
@section('title','Electronics Department')
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="notice-area">
                        <div class="jumbotron">
                            <h1>Notice Board</h1>
                            <div class="notice-list">
                                <ul>
                                    <li><i class="far fa-hand-point-right"></i> Notice For Board Connection</li>
                                    <li><i class="far fa-hand-point-right"></i> Notice For STEP Stipend</li>
                                    <li><i class="far fa-hand-point-right"></i> 2nd Semester Complementary test Results</li>
                                    <li><i class="far fa-hand-point-right"></i> Notice For All Students</li>
                                    <li><i class="far fa-hand-point-right"></i> Notice For 3rd,5th,7th semester All Students</li>
                                </ul>
                            </div>
                        </div>
                        <div class="notice-details">
                            <a href="" class="btn btn-info">All Notice</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-success">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th style="min-width: 100px" class="text-center">Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sl=1)
                            @foreach($teacher as $value)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset($value->image) }}" alt="" width="80">
                                    </td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->designation_name }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('show-details',$value->id) }}" target="_blank" class="btn btn-info btn-sm">Details</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="principal">
                        <div class="principal-image">
                            <img class="img-fluid" src="{{asset('/')}}assets/front/image/teachers/principal/principal.jpg" alt="">
                        </div>
                        <div class="principal-title my-2 py-1">
                            <h3>Principal</h3>
                        </div>
                        <div class="principal-details">
                            <a href="" class="btn btn-info">Details</a>
                        </div>
                    </div>

                    <div class="principal my-3">
                        <div class="principal-image">
                            <img class="img-fluid" src="{{asset('/')}}assets/front/image/teachers/principal/vice-principal.png" alt="">
                        </div>
                        <div class="principal-title my-2 py-1">
                            <h3>Vice Principal</h3>
                        </div>
                        <div class="principal-details">
                            <a href="" class="btn btn-info">Details</a>
                        </div>
                    </div>

                    <div class="important-link">
                        <div class="principal-title my-2 py-1">
                            <h3>Important Link</h3>
                        </div>
                        <div class="important-link-list">
                            <ul>
                                <li><a href="">Ministry of Education</a></li>
                                <li><a href="">Directorate of Technical Education</a></li>
                                <li><a href="">Bangladesh Technical Education Board</a></li>
                                <li><a href="">Skills and Training Enhancement Project</a></li>
                                <li><a href="">Bangladesh Public Service Commission(BPSC)</a></li>
                                <li><a href="">Bangladesh Computer Council(BCC)</a></li>
                                <li><a href="">Web Portal</a></li>
                                <li><a href="">Dhaka University of Engineering & Technology (DUET)</a></li>
                                <li><a href="">Bangladesh Association of Software and Information Services (BASIS)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

