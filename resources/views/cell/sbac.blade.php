@extends('layouts.master')
@section('content')
<style>
    .cellBox{
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
.cellBox .cell-icon{
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
.cellBox .cell-icon i{
    transform: rotate(0deg);
    transition: all 0.3s ease 0s;
}
.cellBox:hover .cell-icon i{
    text-shadow: 0 0 5px #555;
    transform: rotate(360deg);
}
.cellBox .cell-content{
    background-color: #fff;
    padding: 30px 10px 10px;
    border-radius: 10px;
    box-shadow: 0 0 7px 3px rgba(0,0,0,0.2);
}
.cellBox .title{
    color: #01AFD2;
    font-size: 22px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.cellBox .description{
    font-size: 17px;
    text-align: center;
    line-height: 25px;
    margin-bottom: 20px;
    color: gray;
    font-weight: 400;
    text-align: justify;
    padding: 0px 10px;
}
.cellBox img{
    height: 400px;
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
}

@media only screen and (max-width:990px){
    .cellBox{ margin: 25px 0 50px; }
}

</style>
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform:uppercase;">SBAC</h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a> </li>
                <li>Cell</li>
                <li>SBAC</li>
            </ol>
        </div>
        
    </div>
</section>
<!-- End Breadcrumbs -->


<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                <div class="cellBox">
                    <div class="cell-icon">
                        <span><i class="fa fa-home" aria-hidden="true"></i></i></span>
                    </div>
                    <div class="cell-content">
                        <h3 class="title">SBAC</h3>
                        <p class="description">Nobel Peace Prize Winner Prof. Muhammad Yunus want to remove proverty from the world. For this reson, he launches a new business for heping for helping the poor which is known as social busniess is a causedriven business. In a social business, the investors or owners can gradually recoup the money invested, but cannot take any dividend beyond that point. The purpose of the investment is purely to achieve one or more social objectives though the operation of the company; no personal gain is desired by the investors. The company must cover all cost, make aprofit, and at the same time achieve a social objective, such as, healthcare for the poor, housing for the poor, financial cells for the poor, nutrition for malnourished children, providing safe drinking water, introducing renewable energy, etc. The impact of the business on people or the enviroment, rather then amount of profit made in a given period measures the success of a social business. sustainability of the company indicates that it is running as a business.</p>
                    </div>
                    {{-- <img src="{{ asset('assets/img/campuslife/health.png') }}" alt="Outdoor-Activities" /> --}}
                </div>
            </div>
         
        </div>
    </div>
</section>
@endsection