@extends('layouts.master')
@section('content')
<style>
    .serviceBox{
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
.serviceBox .service-icon{
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
.serviceBox .service-icon i{
    transform: rotate(0deg);
    transition: all 0.3s ease 0s;
}
.serviceBox:hover .service-icon i{
    text-shadow: 0 0 5px #555;
    transform: rotate(360deg);
}
.serviceBox .service-content{
    background-color: #fff;
    padding: 30px 10px 10px;
    border-radius: 10px;
    box-shadow: 0 0 7px 3px rgba(0,0,0,0.2);
}
.serviceBox .title{
    color: #01AFD2;
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.serviceBox .description{
    font-size: 17px;
    text-align: center;
    line-height: 25px;
    margin-bottom: 20px;
    color: gray;
    font-weight: 400;
    text-align: justify;
}

@media only screen and (max-width:990px){
    .serviceBox{ margin: 25px 0 50px; }
}

</style>
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform:uppercase;">Academic Session</h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a> </li>
                <li>Campus Life</li>
                <li>Academic Session</li>
            </ol>
        </div>

    </div>
</section>
<!-- End Breadcrumbs -->


<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa fa-home"></i></span>
                    </div>
                    <div class="service-content">
                        <h3 class="title">Academic Session</h3>
                        <p class="description">The Academic year is mainly divided into three semesters. Each semester consists of 18 weeks including examinations. Dhaka International University (DIU) has its own Holiday list.</p>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</section>
@endsection