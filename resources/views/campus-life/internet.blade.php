@extends('layouts.master')
@section('content')
<style>
    .capusLife{
    color: #606060;
    background-color: #f5f5f5;
    font-family: 'Noto Sans', sans-serif;
    text-align: center;
    padding:0 10px 20px;
    margin: 25px 0 0;
    border: 1px solid transparent;
    border-bottom: 10px solid #01AFD2;
    border-radius: 0 30px;
}
.capusLife .service-icon{
    color: #fff;
    background: #01AFD2;
    font-size: 35px;
    padding: 5px 40px;
    margin: -30px 0 0 0;
    box-shadow: 0 -10px 10px -5px rgba(0,0,0,0.2) inset;
    border-radius: 15px 15px 0 0;
    display: inline-block;
    transition: all 0.3s;
}
.capusLife .service-icon i{
    transform: rotate(0deg);
    transition: all 0.3s ease 0s;
}
.capusLife:hover .service-icon i{
    text-shadow: 0 0 5px #555;
    transform: rotate(360deg);
}
.capusLife .service-content{
    background-color: #fff;
    padding: 30px 10px 10px;
    border-radius: 10px;
    box-shadow: 0 0 7px 3px rgba(0,0,0,0.2);
}
.capusLife .title{
    color: #01AFD2;
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.capusLife .description{
    font-size: 17px;
    text-align: center;
    line-height: 25px;
    margin-bottom: 20px;
    color: gray;
    font-weight: 400;
    text-align: justify;
}
.capusLife img{
    height: 400px;
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
}

@media only screen and (max-width:990px){
    .capusLife{ margin: 25px 0 50px; }
}

</style>
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform:uppercase;">Wi-Fi and Internet</h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a> </li>
                <li>Campus Life</li>
                <li>Wi-Fi and Internet</li>
            </ol>
        </div>

    </div>
</section>
<!-- End Breadcrumbs -->


<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                <div class="capusLife">
                    <div class="service-icon">
                        <span><i class="fa fa-wifi" aria-hidden="true"></i></span>
                    </div>
                    <div class="service-content">
                        <h3 class="title">Wi-Fi and Internet</h3>
                        <p class="description">D'All DIU compuses are under Wi-Fi facilities. Internet facilities are available for all
                            students.</p>
                    </div>
                    <img src="{{ asset('assets/img/campuslife/666.jpg') }}" alt="Outdoor-Activities" /> 
                </div>
            </div>
         
        </div>
    </div>
</section>
@endsection