@extends('layouts.master')
@section('content')
    <style>

        .accordion-body {
            background: #f5f5f5;
        }

        .accordion-button {
            font-size: 20px;
            font-weight: 600
        }

        .accordion-item {
            margin-bottom: 10px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        }

        .accordion-header .accordion-button:not(.collapsed) {
            background-color: #49B5E7;
            color: #fff;
        }

        .accordion-button {
  
    }

      

   

        .pic img {
            width: 100%;
            height: 150px;
           
        }

        .desc-body {
            height: 70px;

        }

        .vital-person .title {
            display: block;
            font-size: 18px;
            font-weight: 600;
            color: #2e282a;
            text-transform: capitalize;
            margin: 0 0 7px 0;
        }

        .vital-person .post {
            display: block;
            font-size: 15px;
            color: gray;
            font-weight: 500;
            text-transform: capitalize;
            margin-bottom: 15px;
        }

        @media only screen and (max-width: 990px) {
            .vital-person {
                margin-bottom: 30px;
            }
        }
    </style>

    <main id="main" style="background-color: #f5f5f5">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="text-transform:uppercase;">Convocation</h1>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Convocation</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <div class="container-xxl pb-5">
            <div class="container">
                <div class=" text-center py-4">
                    <h3 class="heading ">WELCOME TO OUR CONVOCATION</h3>
                    <p>Convocation is a formal gathering of people who have been asked to come together, or a formal ceremony at a college or university where awards are given. Dhaka International University is organized the convocation ceremony to confer the degree to the graduate students almost every year.</p>
                   
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @if($convocations)               
                    @foreach ($convocations as $index => $rows)
                        <div class="accordion-item">
                            <div class="accordion-header" id="flush-heading{{ $index }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false"
                                    aria-controls="flush-collapse{{ $index }}">
                                    {{ $rows->title }} 
                                </button>
                            </div>
                            <div id="flush-collapse{{ $index }}"
                                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                aria-labelledby="flush-heading{{ $index }}" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h5 style="font-weight: 600">  {{ $rows->short_description }} </h5>
                                    <div style="text-align: justify">{!! $rows->description !!}</div>
                                    <div class="row">
                                        @foreach ($rows->convoction_images as $image)
                                            <div class="col-md-3 col-sm-6">
                                              
                                                    <div class="pic my-3">
                                                        <img src="{{ $image->image_url }}">
                                                    </div>
                                                   
                                                
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div>
    </main>
@endsection