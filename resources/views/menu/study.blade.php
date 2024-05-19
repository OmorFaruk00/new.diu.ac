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
                <h1 style="text-transform: uppercase">STUDTY</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Study</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section>
        <div class="container py-5">
            <div class="menu-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <h4 class="menu-title">ADMISSIONS</h4>
                        <ul class="menu-item">
                            <li><a href="{{ route('admission-process') }}">Admission Process</a></li>
                            <li><a href="{{ route('program-fee-structure') }}">Fee Structure</a></li>
                            <li><a href="{{ route('scholarships') }}">Scholarships</a></li>
                            <li><a href="https://international.diu.ac" target="_blank">International
                                    Admissions</a></li>
                            <li><a href="{{ route('admission-help-desk') }}">Admission Help Desk</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <h4 class="menu-title">Programs</h4>
                        <ul class="menu-item">
                            <li><a href="/programs/department-of-english" target="_blank">Department of
                                English</a></li>
                        <li><a href="/programs/department-of-law" target="_blank">Department of Law</a></li>
                        <li><a href="/programs/department-of-sociology" target="_blank">Department of
                                Sociology</a></li>
                        <li><a href="/programs/department-of-business-administration"
                                target="_blank">Department of Business Administration</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <h4 class="menu-title">Programs</h4>
                        <ul class="menu-item">
                            <li><a href="/programs/department-of-pharmacy" target="_blank">Department of
                                Pharmacy</a></li>
                        <li><a href="/programs/department-of-eee" target="_blank">Department of EEE</a></li>
                        <li><a href="/programs/department-of-cse" target="_blank">Department of CSE</a></li>
                        <li><a href="/programs/department-of-civil-engineering" target="_blank">Department
                                of Civil Engineering</a></li>

                        </ul>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <h4 class="menu-title">Programs</h4>
                        <ul class="menu-item">
                            <li><a href="/programs/department-of-political-science" target="_blank">Department
                                of Political Science</a></li>
                        <li><a href="/programs/department-of-economics" target="_blank">Department of
                                Economics</a></li>
                        <li><a href="/programs/department-of-microbiology" target="_blank">Department of
                                Microbiology</a></li>
                        <li><a href="/programs/department-of-biochemistry-and-molecular-biology"
                                target="_blank">Department of Biochemistry and Molecular Biology</a></li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
