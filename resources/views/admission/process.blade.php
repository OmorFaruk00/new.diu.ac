@extends('layouts.master')
@section('content')
<style>
    .main-timeline {
        position: relative;
    }

    .main-timeline:before,
    .main-timeline:after {
        content: "";
        display: block;
        width: 100%;
        clear: both;
    }

    .main-timeline:before {
        width: 2px;
        height: 100%;
        background: #e5e9ed;
        margin: 0 auto;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .main-timeline .timeline {
        width: 50%;
        padding-right: 30px;
        float: left;
        position: relative;
    }

    .main-timeline .timeline:last-child {
        margin-bottom: 0;
    }

    .main-timeline .timeline:after {
        content: "";
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #e5e9ed;
        position: absolute;
        top: 0;
        right: -6px;
        transition: all 0.3s ease 0s;
    }

    .main-timeline .timeline:hover:after {
        background: #0F619D;
        transform: scale(1.3);
    }

    .main-timeline .timeline-content {
        padding: 50px 40px;
        background: #e5e9ed;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    .main-timeline .timeline-content:hover {
        background: #0F619D;
    }

    .main-timeline .timeline-content:after {
        content: "";
        border-top: 30px solid #e5e9ed;
        border-right: 15px solid transparent;
        position: absolute;
        top: 0;
        right: -15px;
        transition: all 0.3s ease 0s;
    }

    .main-timeline .timeline-content:hover:after {
        border-top-color: #0F619D;
    }

   

    .main-timeline .post {
        display: block;
        font-size: 24px;
        font-weight: 600;
        color: #22272c;
        padding-bottom: 8px;
        margin: 8px 0 15px 0;
        position: relative;
    }

    .main-timeline .post:after {
        content: "";
        display: block;
        width: 30px;
        border-top: 2px solid #22272c;
        position: absolute;
        bottom: 0;
        left: 0;
        transition: all 0.3s ease 0s;
    }

    .main-timeline .timeline-content:hover .post:after {
        border-top-color: #fff;
    }

    .main-timeline .title {
        font-size: 20px;
        font-weight: 600;
        color: #0F619D;
        text-transform: capitalize;
        transition: all 0.3s ease 0s;
    }

    .main-timeline .description {
        font-size: 16px;
        color: #000;
        line-height: 25px;
        text-align: justify
    }

    .main-timeline .timeline-content:hover .year,
    .main-timeline .timeline-content:hover .title,
    .main-timeline .timeline-content:hover .description {
        color: #fff;
    }

    .main-timeline .timeline:nth-child(2n) {
        padding: 0 0 0 30px;
        margin-top: 75px;
    }

    .main-timeline .timeline:nth-child(2n):after {
        right: auto;
        left: -6px;
    }

    .main-timeline .timeline:nth-child(2n) .timeline-content:after {
        border-left: 15px solid transparent;
        border-right: none;
        left: -15px;
        right: auto;
    }

    @media only screen and (max-width: 767px) {
        .main-timeline:before {
            margin: 0;
            left: 0;
        }

        .main-timeline .timeline {
            width: 100%;
            float: none;
            padding: 0 0 0 30px;
            margin-bottom: 20px;
        }

        .main-timeline .timeline:after {
            right: auto;
            left: -6px;
        }

        .main-timeline .timeline-content {
            padding: 20px;
        }

        .main-timeline .timeline-content:after {
            border-left: 15px solid transparent;
            border-right: none;
            left: -15px;
            right: auto;
        }

        .main-timeline .timeline:nth-child(2n) {
            margin-top: 0;
        }
    }
</style>
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Admission Process</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Admission Process</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page internship">
        <img src="{{ asset('assets/images/admission-process.png') }}" alt="Admission Process"
            class="img-fluid w-100 page-bg">
        <div class="bannertext">
            <h2>Admission <br> Process</h2>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <div class="timeline-content">
                                <span class="post">Admission Eligibility</span>
                                <p class="description">Candidates seeking admission must apply in prescribed application
                                    Form which can be collected on
                                    payment of Tk. 1000.00 Candidates having 2nd division or at least GPA 2.50 in both
                                    SSC & HSC
                                    examinations, or their equivalents are eligible to apply for admission into Honours
                                    program in
                                    Law,English, Sociology and Business Administration. For B.Sc in (Computer Science &
                                    Engineering), B.Sc.( Electrical, Electronics and Telecommunication Engineering) and
                                    B.Sc (Civil
                                    Engineering) programs, candidate must have physics & Mathematics at their HSC
                                    level.For Bachelor
                                    of Pharmacy (B.Pharm.) program, candidates must have Biology & Chemistry at their
                                    HSC level.For
                                    LL.M (2 years), M.A English (2.5 Years), MSS Sociology (2 Years), MHRL, and MBA
                                    programs, the
                                    applicants must have at least Bachelor Degree with GPA-2.00 (minimum). For LL.M (2
                                    Years),
                                    student must complete LL.B (Pass) Course.</p>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content">
                                <span class="post">Required Documents</span>
                                <h4 class="title">For Undergraduate/ Honors Program:</h4>

                                <p class="description"><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                                        style="height: 18px"></i> Original Transcript & Certificate of
                                    S.S.C. or
                                    Equivalent with 2 photocopies.</p>
                                <p class="description"><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                                        style="height: 18px"></i> Original Transcript & Certificate of
                                    H.S.C. or
                                    Equivalent with 2 photocopies.</p>
                                <p class="description"><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                                        style="height: 18px"></i> 7 Copies of Pass Port size Photograph .
                                </p>

                                <h4 class="title">For Master’s / Graduate Program:</h4>

                                <p class="description"><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                                        style="height: 18px"></i> Original Transcript & Certificate of S.S.C. or
                                    Equivalent with 2 photocopies.</p>
                                <p class="description"><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                                        style="height: 18px"></i> Original Transcript & Certificate of H.S.C. or
                                    Equivalent with 2 photocopies.</p>
                                <p class="description"><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                                        style="height: 18px"></i> Original Transcript & Certificate of Undergraduate/
                                    Honor’s Program with 2 photocopies.
                                </p>
                                <p class="description"><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                                        style="height: 18px"></i> 7 Copies of Pass Port size Photograph .
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection