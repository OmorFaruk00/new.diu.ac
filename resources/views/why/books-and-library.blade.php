@extends('layouts.master')
@section('content')
<style>
    .why-desc{
        text-align: justify;
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
                <h1 style="text-transform:uppercase;"> Books And Library</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Books And Library</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->


    <section>
        <div class="container">
            <div class="text-center pt-5 pb-3">
                <h4 class="heading">WELCOME TO OUR Books And Library </h4>                
            </div>
            <p class="why-desc">Due to the explosion of knowledge in both traditional and digital forms, DIU Library has developed a system that is capable of serving the best of its users. DIU Library is working closely with faculties to integrate resources and also to ensure that our collections meet with needs of our teaching and research programs.</p>

            <div class="course pt-4">
                <a href="http://koha.diu.ac.bd/"  target="_blank">Library Website</a>               
            </div>
            

        </div>
    </section>
@endsection