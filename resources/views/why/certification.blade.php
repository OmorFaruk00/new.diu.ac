@extends('layouts.master')
@section('content')
<style>
    .why-desc{
        text-align: center;
        color: #333;
        font-weight: 400;
        font-size: 16px;

    }
 </style>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;"> Certification</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Certification</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->


    <section>
        <div class="container">
            <div class="text-center pt-5 pb-3">
                <h4 class="heading">WELCOME TO CERTIFICATION</h4>                
            </div>
            <p class="why-desc pb-5">We provide certification courses. Global certification is essential for one's career growth.</p>

       

        </div>
    </section>
@endsection