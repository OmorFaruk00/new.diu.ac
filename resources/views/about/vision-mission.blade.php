@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Vision and Mission</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Vision and Mission</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <section class="inner-page internship">
        <img src="assets/images/vision-mission.png" alt="vision mission" class="img-fluid w-100 page-bg">
        <div class="bannertext">
        <h2>Vision and Mission</h2>
        </div>
        <div class="container my-4">
            <div class="row">
            <div class="col-md-12">
                    <h2><b>Vision:</b></h2>
                    <p>The vision of DIU is to contribute to the nation by producing age-worthy, pragmatic and eligible graduates through continual innovation in education and research.</p>
                    <hr>

            
                    <h2><b>Mission:</b></h2>
                    <p style="text-align: justify">The mission of DIU is to produce capable leaders in the respective field of study who can meet the challenges of present dynamic world. It wants to create multidisciplinary knowledge, communication and interpersonal skills at the highest level of excellence among the students which will make them honest, sincere and dedicated in their thoughts and deeds.</p>
                    

                  
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->


@endsection