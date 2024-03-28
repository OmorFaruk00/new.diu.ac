@extends('layouts.master')
@section('content')
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Monthly NewsLetter</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Monthly NewsLetter</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    
    <section class="inner-page internship">
        <img src="assets/img/page-headers/about-us.jpg" alt="about-us" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Monthly NewsLetter</h2>
        </div>
        <div class="container my-4">

            <div class="row">
            <div class="col-md-6">
                <a href="assets/pdfs/Monthly-newsletter/January_2023_newsletter.pdf" target="_blank">
                   
                    <img src="assets/img/side-images/Newsletter_Thumbnails.jpg" alt="Newsletter_Thumbnails" class="img-fluid">
                    </a>
                </div>
            
            <div class="col-md-6">
                <a href="assets/pdfs/Monthly-newsletter/Newsletter_February.pdf" target="_blank">
                    <img src="assets/img/side-images/Newsletter_Thumbnails2.jpg" alt="Newsletter_Thumbnails2" class="img-fluid">
                    </a>
                </div>
                   
               
            </div>

            <div class="row my-3">
                <div class="col-md-6">
                    <a href="assets/pdfs/Monthly-newsletter/Newsletter_October_2022.pdf" target="_blank">
                        <img src="assets/img/side-images/Newsletter_Thumbnails3.jpg" alt="Newsletter_Thumbnails3" class="img-fluid">
                        </a>
                    </div>
                
                <div class="col-md-6">
                    <a href="assets/pdfs/Monthly-newsletter/GBS_NEWSLETTER_High_August_September_ Issue.pdf" target="_blank">
                        <img src="assets/img/side-images/Newsletter_Thumbnails4.jpg" alt="Newsletter_Thumbnails4" class="img-fluid">
                        </a>
                    </div>
                       
                   
                </div>


        </div>
    </section>


    </main>
@endsection