@extends('layouts.master')
@section('content')
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Internships</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Internships</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

<!-- <section class="mbanner">
<p>HI this is</p>
</section>  -->


    <section class="inner-page internship">
        <img src="assets/img/page-headers/internships.jpg" alt="Internships" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Internship</h2>
        <p>Gain Valuable Insights into the <br> Corporate World</p>
        </div> 
        <div class="container my-4">

            <div class="row">
                <div class="col-12">

                    <p>
                        Internship Program forms an important component of education at K L University. It is a vehicle for introducing students to real – life situation, which cannot be simulated in classroom training. Internship provides an opportunity for students to know more details about the corporate world, exposes them to Management, Technical and social skills by drawing them into communication with professionals for continuous interaction. The duration of the program is 90 days. Some of the internship companies are listed below:
                    </p>
                    <ul>
                        <li>FUNDSROOM</li>
                        <li>H & R Blocks</li>
                        <li>Capital Box</li>
                        <li>Briisk Insur-Fintech Pvt Ltd</li>
                        <li>Mozo Hunt</li>
                        <li>PGK Tech</li>
                        <li>SarvHr</li>
                        <li>Tricad Design</li>
                        <li>Agumentic Group</li>
                        <li>Denaurlen</li>
                        <li>NPK Softwares Technologies Pvt Ltd</li>
                        <li>Growup Advisory Pvt Ltd</li>
                        <li>Mesons Software Solutions Pvt Ltd</li>
                        <li>WhiteHorse Impex</li>
                        <li>Airbound</li>
                        <li>FinancePeer</li>
                        <li>Srivay Group of Companies</li>
                        <li>Data Labs Ind Sol</li>
                        <li>Verzeo</li>
                        <li>Rainbow Hospitals</li>
                        <li>GMR & Associates</li>
                        <li>Zen Technologies Ltd</li>
                        <li>Shriram Life Insurance</li>
                        <li>Hucon Solutions Pvt Ltd</li>
                        <li>CHIRANJIVI BUSINESS SOLUTIONS OPC PVT LTD</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection