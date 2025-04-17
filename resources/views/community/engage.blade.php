@extends('layouts.master')
@section('content')
<style>
    .build-title{
        color: #333;
        font-weight: 600;
    }
    .build-desc{
    color: #000 !important;
    font-size: 18px;
    line-height: 30px;
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
            <h1 style="text-transform: uppercase">Engage Our strength </h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Engage Our strength  </li>
            </ol>
        </div>
    </div>
</section>
<section>
    <div class="container py-5">
        <h3 class="build-title">The Pillars of Our University’s Strength</h3>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12 order-md-1 order-2">
                <p class="build-desc">Students are the lifeblood of our university, embodying the spirit of innovation, resilience, and intellectual curiosity. Their passion for learning fuels academic excellence, while their creativity and critical thinking shape the future of research and innovation. As they challenge boundaries, explore new ideas, and engage in meaningful discussions, they strengthen the university’s foundation and contribute to a culture of growth and transformation. Their achievements, both in and beyond the classroom, reflect the institution’s commitment to empowering leaders, thinkers, and changemakers. Together, students and the university build a dynamic and forward-thinking community, fostering progress that extends far beyond campus walls.</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 order-md-2 order-1">
                <img src="{{asset('/assets/images/build1.jpg')}}" alt="" class="build-img">
            </div>
        </div>
    </div>
</section>

<section>
   
        <x-community.contact />
   


</section>

@endsection