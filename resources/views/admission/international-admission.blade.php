@extends('layouts.master')
@section('content')
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">International Admissions</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>International Admissions</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

<!-- <section class="mbanner">
<p>HI this is</p>
</section>  -->


    <section class="inner-page internship">
        <img src="assets/images/international-admissions.png" alt="International Admissions" class="img-fluid w-100 page-bg">
        <div class="bannertext">
        <h2>International
            <br> Admissions</h2>
        </div> 
        <div class="container my-4">

            <div class="row">
                <div class="col-12">

                 
                  
                         
                                <div class="row g-xl-0 align-items-center">
                                    <div class="col-md-5 col-lg-7 text-xl-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/side-images/center-of-excellence.png" width="620" alt="International Admissions" /></div>
                                    <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
                                        <h2 class="fw-semi-bold">International Admissions</h2>
                                        <p>Who can apply under the International student category?</p>
                                        <ul>
                                            <li>Foreign national</li>
                                            <li>NRI students</li>
                                            <li>NRI sponsored students</li>
                                            <li>OCI (Dual Citizens)</li>
                                            <li>PIO card holders</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <P class="my-3">15% of the seats at KLEF are reserved under this category.</P>

                                <p>Foreign national, NRI students, PIO card holder, OCI (Dual Citizens) get preference over NRI sponsored students.</p>

                                <p>The office of International Relations of KLEF is the nodal point for International admissions. International students will be admitted at the 
                                    beginning of the academic year commencing in July/August every year. However, students can also be admitted under Exchange Program for which 
                                    there should be a Memorandum of Understanding. The admissions are based on merit based on the marks/grades obtained in the qualifying examination (equivalent 
                                    to the 10+2 examinations of India/ Graduation/Post Graduation). International students are not required to take the entrance examination conducted for resident Indian students.
                                </p>

                                

                </div>
            </div>

        </div>
    </section>

</main>

@endsection