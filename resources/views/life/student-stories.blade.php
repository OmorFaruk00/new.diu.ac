@extends('layouts.master')
@section('content')
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Student & Alumni Stories</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Student & Alumni Stories</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- <section class="mbanner">
<p>HI this is</p>
</section>  -->


    <section class="inner-page internship">
        <img src="assets/img/page-headers/campus-life.jpg" alt="Admission Process" class="img-fluid w-100">
        <div class="bannertext">
            <h2>Student & Alumni <br /> Stories</h2>
        </div>
        <div class="container my-4">

            <div class="row">
                <div class="col-12">

                    <h2>
                        Student & Alumni Stories
                    </h2>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="assets/img/t-sai-prasanth.jpg" class="img-fluid" alt="T Sai Prasanth" class="mx-auto d-block">
                        </div>

                        <div class="col-md-10">
                            <p>At the KLH-GBS, future administrators and entrepreneurs are given a
                                holistic view of the BBA and MBA courses. They provide a complete picture of the
                                business environment. Courses are designed to match the requirements of many
                                multinational companies. The syllabus is constantly updated to provide students
                                with up-to-date content.&nbsp;</p>
                            <p>Infrastructure plays a vital role in displaying the capability of a
                                university regarding its power to adapt to the dynamic world. KLH GBS is
                                designed in a way that complements the courses that are offered on campus. The
                                lecture halls offer a seating capacity of up to 60 members. The classrooms are
                                designed to be very student and faculty friendly. They are equipped with digital
                                boards and centralized air conditioning systems. Digital boards replace
                                traditional blackboards and act as a streamlined and integrated solution for
                                teaching young entrepreneurs and future administrators. Modernized classrooms
                                facilitate teaching with advanced tools and techniques.</p>
                        </div>
                    </div>


                    <p>Sports are also given equal importance at the KLH-GBS. A dedicated
                        sports room is provided to the students for indoor games such as table tennis,
                        chess, and carroms, and facilities are also provided for outdoor games such as
                        badminton.</p>
                    <p><b>T. Sai Prasanth, II-BBA , 2110560085</b></p>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection