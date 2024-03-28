@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">International Conference</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>International Conference</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page internship">
        <img src="assets/img/page-headers/international-conference.jpg" alt="international conference" class="img-fluid w-100">
        <div class="bannertext">
        <h2>International
            <br> Conference</h2>
        </div> 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>International Conference</h2>
                </div>

                <div class="col-12">
                    <p> 
                        Please click on this link to know about
                  
                    <a href="{{route('home')}}assets/pdfs/international-conference.pdf" target="_blank">International Conference</a></p>
                </div>
            </div>
        </div>

    </section>


</main>
@endsection