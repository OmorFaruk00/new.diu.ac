@extends('layouts.master')
@section('content')
<style>
    .build-title {
        color: #333;
        font-weight: 600;
        margin-bottom: 30px;
        /* text-transform: capitalize; */
    }
    .build-desc {
        color: #000 !important;
        font-size: 16px;
        line-height: 25px;
        text-align: justify;
    }
    .build {
        font-size: 18px;
        line-height: 30px;
        font-weight: 500;
        text-align: justify;
    }
    .build-img {
        width: 100%;
        height: 350px;
        margin-bottom: 20px;
    }
    .mou {
        margin-bottom: 20px;
    }

    .mou-img {
        width: 100%;
        height: 150px;
        object-fit: contain;
        border-radius: 5px;
        background-color: #f8f9fa;
        padding: 5px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    .build li a{
        color: #2a2929 !important;
    }
     .build li a:hover{
        color: #01AA4D !important;
        cursor: pointer;
    }

</style>
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform: uppercase">Build Partnership </h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Build Partnership </li>
            </ol>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <h3 class="build-title">DIU has international collaboration with the following Universities/institutions: </h3>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 order-md-1 order-2">
                <ol class="build">
                    <li><a href="https://mahsa.edu.my" target="_blank">Mahsa University, Malaysia </a></li>
                    <li><a href="https://www.mtcglobal.org" target="_blank">MTC Global, Bangalore,India </a></li>
                    <li><a href="https://www.vicas.org" target="_blank">Vivekanadha College of Arts & Science of Women, Tamil Nadu, India </a></li>
                    <li><a href="https://iitmjp.ac.in" target="_blank">Institute of Innovation in Technology & Management, New Delhi, India </a></li>
                    <li><a href="https://www.bitm.edu.in" target="_blank">Ballari Institute of Technology and Management, India </a></li>
                    <li><a href="https://drait.edu.in" target="_blank">Dr. Ambedkar Institute of Technology, Bengaluru, India </a></li>
                    <li><a href="https://iba.ac.in" target="_blank">Indus Business Academy, Bangalore, India</a></li>
                    <li><a href="https://www.jisuniversity.ac.in/" target="_blank"> JIS University, Kolkata, India</li>
                    <li><a href="https://unfccc.int/" target="_blank">United Nations Framework Convention on Climate Change (UNFCCC)</a></li>
                    <li><a href="https://www.gku.ac.in/" target="_blank">Guru Kashi University, Punjab, India</a></li>
                    <li><a href="https://gitarattan.edu.in/" target="_blank">Gitarattan International Business School, Delhi, India</a></li>
                    <li><a href="https://www.rvitm.edu.in/" target="_blank">RV Institute of Management, Bangalore, India</a></li>
                </ol>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 order-md-2 order-1">
                <img src="{{asset('/assets/images/build1.jpg')}}" alt="" class="build-img">
            </div>
        </div>


        <div class="row pt-5">
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/Mahsa.png')}}" alt="Mahsa" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/MTC.png')}}" alt="MTC" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/Vivekanadha.png')}}" alt="Vivekanadha" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/Innovation.jpg')}}" alt="Innovation" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/BITM.png')}}" alt="Ballari" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/Ambedkar.png')}}" alt="Ambedkar" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/Indus.png')}}" alt="Indus" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/JIS.png')}}" alt="JIS" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/United-nation.jpg')}}" alt="United Nation" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/Guru.png')}}" alt="Guru" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/Gitarattan.png')}}" alt="Gitarattan" class="mou-img">
            </div>
            <div class="col-lg-2 col-md-3 col-6 mou">
                <img src="{{asset('/assets/images/mou/RV.png')}}" alt="RV" class="mou-img">
            </div>
        </div>
    </div>
</section>

<section>
    <x-community.partner />

    <x-community.contact />



</section>

@endsection
