@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Semester Abroad Program</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Semester Abroad Program (SAP)</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->




    <img src="assets/img/page-headers/semester-abroad-program.jpg" alt="semester-abroad-program" class="img-fluid w-100">
    <div class="bannertext">
        <h2>semester abroad <br>program</h2>
        <p>Expanding Intellectual Horizons</p>
        </div>

    <section id="libraries" class="my-5">
        <div class="container">
            <div class="row g-xl-0 align-items-center">
                <div class="col-md-5 col-lg-7 text-xl-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/side-images/Semester-Abroad-Program.jpg" width="620" alt="Semester Abroad Program"></div>
                <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
                    <h2 class="fw-semi-bold">Semester Abroad Program</span></h2>
                    <p>
                    Under this program, the KLH Global Business School students will get an opportunity to
                    spend 4 to 6 months abroad during their final year of study toward their project work or
                    thesis. This will provide an opportunity for these students to develop contacts with those
                    universities later for their higher studies. Further, the quality of these project works is of
                    superior academic content and high practical value.
                    </p>
                </div>
            </div>
        </div>
    </section>



</main>
@endsection