@extends('layouts.master')
@section('content')
<style>
       .journal {
            margin-top: 40px;
            margin-bottom: 200px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;

        }
        .journal-desc{
            color: gray;
            line-height: 25px;
            text-align:justify;
            font-size: 16px;
            font-weight: 500;
        }
        .volume{
            color: red;
            font-size: 18px;
            margin-top: 50px;
            font-weight: 400;
        }
</style>
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform:uppercase;"> Journals </h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li> Journals</li>
            </ol>
        </div>

    </div>
</section>
<div class="container">
    <div class="journal p-5">       
    <div class="sec-title-2 mb-70 text-center">
        <h2 class="heading">WELCOME TO OUR Journals</h2>
        <p class="journal-desc">DIU is profoundly esteemed for it's own reputation which is
            built upon credibility, practical knowhow and a feasible archive of books, bulletins and journals.
            DIU has published a few original books written by its teachers and faculties. Whereas bulletins help
            students to keep upto date regarding their class and exam routines, schedule and other important
            notices. Both faculties and students of extraordinary merit are allowed to write their own
            journals.</p>
    </div>
    <h2 style="font-weight: bold;margin:40px 0px">Our Journals</h2>
    <ul>
    <li>
        <i class="fa fa-arrow-circle-right mr-2"></i>
        <a href="{{url('/journals/volume/12')}}" target="_blank" class="volume"> Volume 12 No 2 2022</a>
    </li>
    </ul>
</div>

<section>

</section>
@endsection