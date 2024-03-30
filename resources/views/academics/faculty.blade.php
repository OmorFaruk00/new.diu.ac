@extends('layouts.master')
@section('content')
    <main id="main" style="margin-top: 80px">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="text-transform: uppercase">Faculty</h1>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Faculty</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="heading">Our Expert Faculty</h2>
                </div>
                <div class="row g-4 justify-content-center align-self-center">
                    @if ($keyResourcePersons)
                        @foreach ($keyResourcePersons->vital_persons as $persion)
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item bg-light">
                                    <div class="overflow-hidden" style="height: 280px">
                                        <img class="img-fluid" src="{{ $persion->image_url }}" alt="image"
                                            style="height: 280px;width:100%" />
                                    </div>
                                    <div class="text-center p-4" style="height: 130px">
                                        <h5 class="mb-0">{{ $persion->name }}</h5>
                                        <small>{{ $persion->title }}</small><br />
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
        <!-- Team End -->
    </main>
@endsection
