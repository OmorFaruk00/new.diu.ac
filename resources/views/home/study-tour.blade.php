@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Study Tour</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Study Tour</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    <img src="assets/img/page-headers/study-tour.png" alt="Study tour" class="img-fluid w-100">
    <div class="bannertext">
    <h2>Study Tour</h2>
        <p>Explore the World Beyond Classroom</p>
        </div> 
    <section id="libraries" class="my-5">
        <div class="container">
            <div class="row g-xl-0 align-items-center">
                <div class="col-md-5 col-lg-7 text-xl-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/side-images/Study-Tour.jpg" width="620" alt="study tour"></div>
                <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
                    <h2 class="fw-semi-bold">Study Tour (ST)</span></h2>
                    <p>Students of KLH Global Business School will have the option to visit partner universities
                    abroad as a part of a study tour and can attend the classes offered by foreign
                    Professors for two weeks. In addition to academic exposure, students are also exposed
                    to International cultural issues by associating with the locals there.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection