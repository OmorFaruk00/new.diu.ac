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
                <h1 style="text-transform: uppercase">DIU</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Diu </li>
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
                        <h4 class="menu-title">ABOUT US</h4>
                        <ul class="menu-item">
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="{{ route('vision-mission') }}">Vision and Mission</a></li>
                            <li><a href="{{ route('board-of-management') }}">Board of Management</a></li>
                            <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <h4 class="menu-title">Research Cell</h4>
                        <ul class="menu-item">
                            <li><a href="{{ route('iqac') }}"> IQAC</a></li>
                            <li><a href="{{ route('tcrc') }}"> TCRC</a></li>
                            <li><a href="{{ route('sbac') }}"> SBAC</a></li>
                            <li><a href="{{ route('cecd') }}"> CECD</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <h4 class="menu-title">ACADEMICS</h4>
                        <ul class="menu-item">
                            <li><a href="{{ route('faculty') }}">Faculty List</a></li>
                            <li><a href="{{ route('convocation') }}">Convocation</a></li>
                            <li><a href="{{ route('publications') }}">Publications</a></li>
                            <li><a href="{{ route('journals') }}">Journals</a></li>
                            <li><a href="{{ route('certificate-verification') }}">Certificate Verifications</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
