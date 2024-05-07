@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Centre of Excellence</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Centre of Excellence</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->




    <img src="assets/img/page-headers/Centre-of-Excellence.jpg" alt="Centre of Excellence" class="img-fluid w-100">
    <div class="bannertext">
        <h2>Centre of <br>Excellence</h2>
        <p>Shaping the Leaders of Tomorrow</p>
        </div>

    <section id="libraries" class="my-5">
        <div class="container">
            <div class="row g-xl-0 align-items-center">
                <div class="col-md-5 col-lg-7 text-xl-center">
                    <!-- <img class="img-fluid mb-5 mb-md-0" src="assets/img/side-images/center-of-excellence.png" width="620" alt="center-of-excellence" /> -->
                    <iframe width="620" height="406" src="https://www.youtube.com/embed/_ysNzMc2x6g" title="MAHAMOUDA SALOUHOU Ph.D shares his thoughts on the students at KL University." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
                    <h2 class="fw-semi-bold">Center of Excellence</span></h2>
                    <p>KL Deemed to be University, in collaboration with&nbsp;Celonis, a global leader in
                        execution management,&nbsp;signed a MoU on 5th Jan 2023 at KLH GBS campus. Celonis is
                        the global leader in execution management. They have a global presence with
                        headquarters in Munich.&nbsp;</p>
                    <p>To improve the effectiveness and efficiency of processes, Celonis provides
                        tools and approaches for process mining. They launched the Celonis Academic
                        Alliance in partnership with the world’s leading universities, colleges, and
                        schools to empower and encourage the Process Miners of tomorrow to share in
                        learning and experiencing the power of process-oriented data science across the
                        globe.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Banner Hero -->
    <section class="w-100" style="background-color: #e6e6e6;">
        <div class="container">
            <div class="row d-flex align-items-center py-5">
                <div class="col-lg-12 text-start">
                    <h2 class="h2 py-2 typo-space-line">What is process mining?</h2>
                    <p>Process mining is the combined use of process science and data science. In
                        short, it uses data science and analytics tools and methods to simplify process
                        modeling. It can find the exact locus of pain areas and help provide
                        optimization using data science. “They x-ray processes and find inefficiencies.”</p>
                    <p>Their goal was to&nbsp;empower and inspire the Process Miners of the future to
                        share in learning and experiencing the power of process-oriented data science
                        throughout the globe&nbsp;by establishing the Celonis Academic Alliance in
                        collaboration with the top universities, colleges, and schools in the world.</p>
                    <p>Through the partnership, students will have free access to Celonis technology
                        for educational purposes, classroom work, online certifications, thesis support,
                        and guest lecturers. Access to free software licenses, online training for
                        academics and students, and research scholars are included. Additionally, access
                        to the Learning Management System (LMS), multi-levels of free certificates,
                        digital badges in association with Credly, and other resources, including
                        initiatives like train the trainer.</p>
                    <p class="light-300">In the presence of Dr. L Koteshwara Rao, Principal Engineering, Dr. Vani, and
                        other staff and students, the agreement was exchanged by Mr. Manjunath
                        Chandrashekar, Senior Academic Alliance Manager, APAC, Celonis, SE, and Dr. A
                        RamaKrishana, Director, KLH Global Business School, Hyderabad.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Banner Hero -->

    <section class="inner-page py-4" style="background-color: #f6ffff;">

        <div class="container">
            <div class="row mt-4">
                <div class="col-6">
                    <h2 class="mb-4">What are the 4 levels of certifications?</h2>
                    <p>Level 1- Introduction to process mining (1 hour)</p>
                    <p>Level 2- Process mining fundamentals (9 hours)</p>
                    <p>Level 3- Rising Star (19-24 hours)</p>
                    <p>Level 4- Consultant (open only on completion of either track of Level 3)</p>
                    <p>** There are no eligibility criteria for any of the certifications but Level
                        1, 2 and business track of Level 3 are better suited for BBA/MBA students.</p>
                </div>
                <div class="col-6 checkedlist">
                    <h2 class="mb-4">What are the different tracks of Level 3 certification?</h2>

                    <ul>
                        <li>Business- 19 hours</li>
                        <li>Technical- 23.5 hours</li>
                        <li>Automation- 19 hours</li>
                        <li>Research- 20 hours</li>
                    </ul>


                </div>
            </div>

        </div>
    </section>

</main>
@endsection