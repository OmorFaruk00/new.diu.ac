@extends('layouts.master')
@section('content')
<style>
    .why-desc{
        text-align: center;
        color: #333;
        font-weight: 400;
        font-size: 16px;

    }
    .course a{
        color: red;
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 20px;

    }
    .course a i{
    margin-right: 10px;

    }
</style>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;"> Trending Courses </h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Trending Courses</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->


    <section>
        <div class="container">
            <div class="text-center pt-5 pb-3">
                <h4 class="heading">WELCOME TO TRENDING COURSES </h4>                
            </div>
            <p class="why-desc">We always try to teach trending courses. Our goal is to keep ourselves up to date in this new technology era.</p>

            <div class="course pt-4">
                <a href="{{asset('assets/pdf/cecd-course-outlines.pdf')}}"  target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Centre for Excellence and Career Development (CECD)</a>               
            </div>
            <div class="course py-4">          
                <a href="{{asset('assets/pdf/ccna-product-overview.pdf')}}" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>CCNA</a>
            </div>

        </div>
    </section>
@endsection