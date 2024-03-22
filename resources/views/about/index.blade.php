@extends('layouts.master')
@section('content')
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">About Us</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>About Us</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <section class="inner-page internship">
        <img src="{{asset('assets/images/about.png')}}" alt="about-us" class="img-fluid w-100 page-bg" >
        <div class="bannertext">
        <h2>About Us</h2>
        {{-- <p>A Legacy of Academic Excellence <br>for More Than Four Decades</p> --}}
        </div>
        <div class="container my-4">

            <div class="row">
            <div class="col-md-6">
                    <img src="{{asset('assets/images/campus.jpg')}}" alt="About us" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="text-center my-4">INTRODUCTION</h2>
                    <p style="text-align: justify">
                        Dhaka International University (DIU) is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline. This university was founded by Late Alhaj Professor Dr. A. B. M. Mafizul Islam Patwari, Former Chairman of the Department of Law, University of Dhaka, Bangladesh.
                    </p>
                    <p style="text-align: justify">It is recognized that Dhaka International University is such a private university, which was founded by a person who was a renowned humanist and academician.He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the motto of DIU is the universal adage, "Knowledge is Power". DIU generates this power of Knowledge in an individual through teaching-learning, training, research and guidance by using modern, pragmatic and well-designed curriculum and syllabus.</p>
                   
                </div>
            </div>



            <div class="row my-5">
              
                    <div class="col-md-6">
                        <h2 class="text-center my-5">DIU AND ITS FOUNDER</h2>
                        <p style="text-align: justify">
                            Dhaka International University was founded by Late Alhaj Professor Dr. A.B.M. Mafizul Islam Patwari. He was a Professor of the Department of Law, University of Dhaka, Bangladesh. It may be observed that Dhaka International University is perhaps the only private university which was established by a person who was basically an academician.
                        </p>
                        <p style="text-align: justify">He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the slogan of DIU is the universal adage, “Knowledge is Power.” DIU wants to generate this power among individuals through teaching, training and guidance by using age worthy, pragmatic and well-designed curricula and syllabi.</p>
                       
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('assets/images/founder.jpg')}}" alt="About us" class="img-fluid">
                    </div>
                </div>
    

        </div>
    </section>

</main><!-- End #main -->

@endsection