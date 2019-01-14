<section id="sticky-menu" >
    <div class="container">
        <div id="menu_area" class="menu-area">
            <div class="container">
                <div class="row">
                    <nav class="navbar  navbar-light navbar-expand-lg mainmenu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class=""><a href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a></li>
                                <li><a href="#">About</a></li>

                                {{--teacherss & departments start--}}
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">teachers & Employee</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Principal</a></li>
                                        <li><a href="#">Vice Principal</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" href="javaScript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="javaScript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Civil</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('civil-teachers') }}">teachers</a></li>
                                                        <li><a href="">Employee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electrical</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('electrical-teachers') }}">teachers</a></li>
                                                        <li><a href="#">Employee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mechanical</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('mechanical-teachers') }}">teachers</a></li>
                                                        <li><a href="#">Employee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Power</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('power-teachers') }}">teachers</a></li>
                                                        <li><a href="#">Employee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronic</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('electronics-teachers') }}">teachers</a></li>
                                                        <li><a href="#">Employee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electro-medical</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('electro-medical-teachers') }}">teachers</a></li>
                                                        <li><a href="#">Employee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Computer</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('computer-teachers') }}">teachers</a></li>
                                                        <li><a href="#">Employee</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rs Department</a>
                                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li><a href="{{ route('rs-department-teachers') }}">teachers</a></li>
                                                        <li><a href="#">Employee</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{--teacherss & departments end--}}

                                {{--departments start--}}
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Civil</a></li>
                                        <li><a href="#">Electrical</a></li>
                                        <li><a href="#">Mechanical</a></li>
                                        <li><a href="#">Power</a></li>
                                        <li><a href="#">Electronic</a></li>
                                        <li><a href="#">Electro-medical</a></li>
                                        <li><a href="#">Computer</a></li>
                                        <li><a href="#">Non Tech</a></li>
                                    </ul>
                                </li>
                                {{--departments end--}}

                                {{--academy start--}}
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academe</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="#">Syllabus</a></li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Routine</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a href="#">Class Routine</a></li>
                                                <li><a href="#">Exam Routine</a></li>
                                                <li><a href="#">Teachers Schedule</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Result</a></li>
                                        <li><a href="#">Semester Planing</a></li>

                                    </ul>
                                </li>
                                {{--academy end--}}



                                {{--<li class="dropdown">--}}
                                    {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
                                    {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                        {{--<li><a href="#">Action</a></li>--}}
                                        {{--<li><a href="#">Another action</a></li>--}}
                                        {{--<li><a href="#">Something else here</a></li>--}}
                                        {{--<li class="dropdown">--}}
                                            {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>--}}
                                            {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                                {{--<li><a href="#">Action</a></li>--}}
                                                {{--<li><a href="#">Another action</a></li>--}}
                                                {{--<li><a href="#">Something else here</a></li>--}}
                                                {{--<li class="dropdown">--}}
                                                    {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>--}}
                                                    {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                                        {{--<li><a href="#">Action</a></li>--}}
                                                        {{--<li><a href="#">Another action</a></li>--}}
                                                        {{--<li><a href="#">Something else here</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}


                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Log In</a></li>
                                <li><a href="#">Sign Up</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>



{{--<section id="menu">--}}
    {{--<nav class="navbar navbar-light navbar-expand-lg mainmenu" id="sticky-menu">--}}
        {{--<div class="container">--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}
            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                {{--<ul class="navbar-nav mr-auto">--}}
                    {{--<li class=""><a href="#">Home <span class="sr-only">(current)</span></a></li>--}}
                    {{--<li><a href="#">About</a></li>--}}

                    {{--teacherss & departments start--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">teachers & Employee</a>--}}
                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--<li><a href="#">Principal</a></li>--}}
                            {{--<li><a href="#">Vice Principal</a></li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department</a>--}}
                                {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Civil</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electrical</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mechanical</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Power</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronic</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electro-medical</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Computer</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown">--}}
                                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RS Department</a>--}}
                                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                            {{--<li><a href="#">teachers</a></li>--}}
                                            {{--<li><a href="#">Employee</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--teacherss & departments end--}}

                    {{--departments start--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department</a>--}}
                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--<li><a href="#">Civil</a></li>--}}
                            {{--<li><a href="#">Electrical</a></li>--}}
                            {{--<li><a href="#">Mechanical</a></li>--}}
                            {{--<li><a href="#">Power</a></li>--}}
                            {{--<li><a href="#">Electronic</a></li>--}}
                            {{--<li><a href="#">Electro-medical</a></li>--}}
                            {{--<li><a href="#">Computer</a></li>--}}
                            {{--<li><a href="#">RS Department</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--departments end--}}

                    {{--academy start--}}
                    {{--<li class="dropdown">--}}
                        {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academe</a>--}}
                        {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                            {{--<li><a href="#">Syllabus</a></li>--}}
                            {{--<li class="dropdown">--}}
                                {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Routine</a>--}}
                                {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                    {{--<li><a href="#">Class Routine</a></li>--}}
                                    {{--<li><a href="#">Exam Routine</a></li>--}}
                                    {{--<li><a href="#">Teacher Schedule</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Result</a></li>--}}
                            {{--<li><a href="#">Semester Planing</a></li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--academy end--}}



                    {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
                    {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<li><a href="#">Action</a></li>--}}
                    {{--<li><a href="#">Another action</a></li>--}}
                    {{--<li><a href="#">Something else here</a></li>--}}
                    {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>--}}
                    {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<li><a href="#">Action</a></li>--}}
                    {{--<li><a href="#">Another action</a></li>--}}
                    {{--<li><a href="#">Something else here</a></li>--}}
                    {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown3</a>--}}
                    {{--<ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<li><a href="#">Action</a></li>--}}
                    {{--<li><a href="#">Another action</a></li>--}}
                    {{--<li><a href="#">Something else here</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}


                    {{--<li><a href="#">Gallery</a></li>--}}
                    {{--<li><a href="#">Contact Us</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</nav>--}}
{{--</section>--}}