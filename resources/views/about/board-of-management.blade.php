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

        .vital-person {
            padding: 20px 15px 30px;
            background: #fff;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 30px;
        }

        .vital-person .pic {
            display: inline-block;
            width: 100%;
            height: 100%;
            /* background: #fff; */
            padding: 10px;
            margin-bottom: 25px;
            transition: all 0.5s ease 0s;

        }

        .pic img {
            width: 70%;
            height: 150px;
            border-radius: 50%;
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
                    <h1 style="text-transform:uppercase;">Board Of Management</h1>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Management</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($boardOfManagement->vitalPersonType as $index => $rows)
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
                                    <div class="row">
                                        @foreach ($rows->vital_persons as $person)
                                            <div class="col-md-3 col-sm-6">
                                                <div class="vital-person">
                                                    <div class="pic">
                                                        <img src="{{ $person->image_url }}">
                                                    </div>
                                                    <div class="desc-body">
                                                        <h3 class="title">{{ $person->name }}</h3>
                                                        <span class="post">{{ $person->title }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </main>
@endsection
