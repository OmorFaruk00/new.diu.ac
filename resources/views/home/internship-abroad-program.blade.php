@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Internship Abroad Program(IAP)</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Internship Abroad Program(IAP)</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <img src="assets/img/page-headers/internship-abroad-program.png" alt="Internship abroad program" class="img-fluid w-100">
        <div class="bannertext">
        <h2>INTERNSHIP ABROAD <br>PROGRAM</h2>
        <p>Go Global and Gain Valuable Experience</p>
        </div> 

    <section id="libraries" class="my-5">
        <div class="container">
            <div class="row g-xl-0 align-items-center">
                <div class="col-md-5 col-lg-7 text-xl-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/side-images/Internship-Abroad-Program.jpg" width="620" alt="Internship Abroad Program"></div>
                <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
                    <h2 class="fw-semi-bold">Internship Abroad Program (IAP)</span></h2>
                    <p>Under this program, the KLH Global Business School final year MBA and BBA students
                       will get an opportunity to spend 30 days abroad with the partnered University. The
                       student will participate in practical exercises using a state-of-the-art laboratory to ensure
                       that they get the requisite hands-on experience. Finally, students must complete a
                       research project with the guidance of faculty from abroad.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection