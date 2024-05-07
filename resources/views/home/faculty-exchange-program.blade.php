@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Faculty Exchange Program (FEP)</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Faculty Exchange Program</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->




    <img src="assets/img/page-headers/faculty-exchange-program.jpg" alt="Faculty Exchange Program" class="img-fluid w-100">
    <div class="bannertext">
        <h2>Faculty Exchange <br>Program</h2>
        <p>Connecting Global Universities <br>Gaining Global Perspectives</p>
        </div>

    <section id="libraries" class="my-5">
        <div class="container">
            <div class="row g-xl-0 align-items-center">
                <div class="col-md-5 col-lg-7 text-xl-center"><img class="img-fluid mb-5 mb-md-0" src="assets/img/side-images/Faculty-Exchange-Program.jpg" width="620" alt="Faculty Exchange Program" ></div>
                <div class="col-md-7 col-lg-4 text-center text-md-start offset-lg-1 offset-xxl-0">
                    <h2 class="fw-semi-bold">Faculty Exchange Program (FEP)</span></h2>
                    <p>KLH Global Business School is regularly in touch with leading global universities for the
                        Faculty Exchange Program (FEP) to impart global standard education. In this initiation,
                        KLH GBS faculty will be deputed to leading universities abroad for teaching and
                        research assignments, and their faculty will come and teach KLHGBS students.
                    </p>
                
                </div>
            </div>
        </div>
    </section>



</main>
@endsection