@extends('layouts.master')
@section('content')
<style>
    .build-title{
        color: #333;
        font-weight: 600;
    }
    .build-desc{
    color: #838383 !important;
    font-size: 16px;
    line-height: 25px;
    text-align: justify;
    }


  

    .build-img {
       width: 100%;
        height: 300px;
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
        <h3 class="build-title">Reasons to Become Partner</h3>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 order-md-1 order-2">
                <p class="build-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda impedit nihil dignissimos quas corporis nostrum earum. Voluptatibus dolorum fugiat ipsa quam illo a, accusamus ex, hic exercitationem, excepturi unde? Error explicabo delectus nihil ex magnam totam, inventore nobis. Dolorum, nisi non asperiores, earum eaque illumbuild-img quasi consectetur nulla ducimus dignissimos iusto eius nihil debitis. Nihil mollitia praesentium harum corrupti voluptas odit id ab sed, hic earum totam, culpa ad, voluptatum nam vel nesciunt magnam. Quibusdam, tempore nulla! Inventore fuga veritatis distinctio sit qui alias deserunt, totam ullam dolorum tenetur. Asperiores nulla quam nostrum id, blanditiis neque molestias recusandae, iure esse a beatae adipisci nihil commodi laborum obcaecati? Ad assumenda reprehenderit aliquam sed temporibus. Eos, ipsa vel fuga nisi, doloremque ipsum suscipit totam ipsam corporis eius aspernatur hic quo tempore dolore minima libero aut sint omnis alias facere dignissimos magnam, quas natus perferendis. Rem ab aliquam amet ipsam iste labore? Soluta sint doloremque impedit earum eaque distinctio neque dolores officiis hic nemo alias, nam optio dolorum in modi consequuntur saepe nesciunt sunt eveniet quod consectetur, fugit voluptatum debitis? Quas voluptatibus voluptatem, harum sequi odit ipsam exercitationem officia deleniti! Deserunt error architecto doloremque officia nobis aut, fugiat quisquam recusandae dolorem culpa explicabo.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 order-md-2 order-1">
                <img src="{{asset('/assets/images/build1.jpg')}}" alt="" class="build-img">
            </div>
        </div>
    </div>
</section>

<section>
    <x-community.partner />
   
        <x-community.contact />
   


</section>

@endsection