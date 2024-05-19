@extends('layouts.master')
@section('content')
    <style>
        .menu-body {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 40px;
        }

        .menu-title {
            color: #D48231;
            font-size: 20px;
            font-weight: 700;
            padding-left: 15px;
            padding-bottom: 5px;
            text-transform: uppercase;
        }

        .menu-item li a {
            font-size: 18px;
            color: #000;
            font-weight: 400;
            display: block;
            padding: 10px 15px;
        }

        .menu-item li a:hover {
            color: #01AA4D;
        }
    </style>

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Campus Life</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Campus Life</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section>
        <div class="container py-5">
            <div class="menu-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        {{-- <h4 class="menu-title">ABOUT US</h4> --}}
                        <ul class="menu-item">
                            <li><a href="{{ route('library') }}"> Libray</a></li>
                            <li><a href="{{ route('lab') }}" target="_blank">Lab</a></li>
                            <li><a href="{{ route('club') }}">Clubs</a></li>
                            <li><a href="{{ route('alumni') }}"> Alumni</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        {{-- <h4 class="menu-title">Research Cell</h4> --}}
                        <ul class="menu-item">
                            <li><a href="{{ route('academic-session') }}">Academic Session</a></li>
                            <li><a href="{{ route('health-service') }}">Health Service</a></li>
                            <li><a href="{{ route('accommodation') }}">Accommodation</a></li>
                            <li><a href="{{ route('student-welfare') }}">Student’s Welfare</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        {{-- <h4 class="menu-title">ACADEMICS</h4> --}}
                        <ul class="menu-item">
                            <li><a href="{{ route('career-counseling') }}">Career Counseling</a></li>
                            <li><a href="{{ route('course-counseling') }}">On-Course Counseling</a></li>
                            <li><a href="{{ route('internet') }}">Wi-Fi and Internet</a></li>
                            <li><a href="{{ route('canteen') }}">Canteen & Common Rooms</a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
