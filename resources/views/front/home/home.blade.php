@extends('front.master')
@section('title','HOME')
@section('body')
    <section id="slider">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <ul class="pgwSlider">
                        @foreach($slider as $value)
                            <li><img src="{{ $value->slider_image }}" data-large-src="{{ $value->slider_image }}"></li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </section>
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
                    <div class="row">
                        {{--card-section-start--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">

                                    <img class="card-img-left" src="{{asset('/')}}assets/front/image/homepage/a.jpg" alt="Card image cap">
                                    <div class="card-body-list">
                                        <ul>
                                            <li><a href="">Rover Scout</a></li>
                                            <li><a href="">Red Crescent</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-button">
                                        {{--<a href="#" class="btn btn-primary btn-sm">All</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--card-section-end--}}

                        {{--card-section-start--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Library</h5>
                                    <img class="card-img-left" src="{{asset('/')}}assets/front/image/homepage/b.jpg" alt="Card image cap">
                                    <div class="card-body-list">
                                        <ul>
                                            <li><a href="">Library</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-button">
                                        {{--<a href="#" class="btn btn-primary btn-sm">All</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--card-section-end--}}

                        {{--card-section-start--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Blood Bank</h5>
                                    <img class="card-img-left" src="{{asset('/')}}assets/front/image/homepage/d.jpg" alt="Card image cap">
                                    <div class="card-body-list">
                                        <ul>
                                            <li><a href="">Blood Bank</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-button">
                                        {{--<a href="#" class="btn btn-primary btn-sm">All</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--card-section-end--}}

                        {{--card-section-start--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    {{--<h5 class="card-title">Card title</h5>--}}
                                    <img class="card-img-left" src="{{asset('/')}}assets/front/image/homepage/c.jpg" alt="Card image cap">
                                    <div class="card-body-list">
                                        <ul>
                                            <li><a href="">Job Placement Cell</a></li>
                                            <li><a href="">Science Club and Debating</a></li>
                                            <li><a href="">Exam control room</a></li>
                                            <li><a href="">In house training and seminars</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-button">
                                        {{--<a href="#" class="btn btn-primary btn-sm">All</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--card-section-end--}}

                        {{--card-section-start--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Job Korner</h5>
                                    <img class="card-img-left" src="{{asset('/')}}assets/front/image/homepage/d.jpg" alt="Card image cap">
                                    <div class="card-body-list">
                                        <ul>
                                            <li><a href="">Job Korner</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-button">
                                        {{--<a href="#" class="btn btn-primary btn-sm">All</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--card-section-end--}}

                        {{--card-section-start--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Others</h5>
                                    <img class="card-img-left" src="{{asset('/')}}assets/front/image/homepage/c.jpg" alt="Card image cap">
                                    <div class="card-body-list">
                                        <ul>
                                            <li><a href="">Others</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-button">
                                        {{--<a href="#" class="btn btn-primary btn-sm">All</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--card-section-end--}}
                        {{--card-section-start--}}
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Information Officer</h5>
                                    <img class="card-img-left" src="{{asset('/')}}assets/front/image/homepage/c.jpg" alt="Card image cap">
                                    <div class="card-body-list">
                                        <ul>
                                            <li><a href="">Information Officer</a></li>
                                        </ul>
                                    </div>
                                    <div class="card-button">
                                        {{--<a href="#" class="btn btn-primary btn-sm">All</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--card-section-end--}}
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

