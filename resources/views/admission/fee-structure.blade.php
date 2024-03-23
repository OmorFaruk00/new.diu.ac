@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Fee Structure</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Fee Structure</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <img src="assets/images/program-fee-structure.png" alt="Program Fee Structure" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Program <br>Fee Structure</h2>
      
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center font-bold">COURSE FEE STRUCTURE</h2>
                    <h6 class="text-center">
                        Here you can review some statistics about our Education Center</h6>
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped ">
                    <thead class="bg-info text-white">
                        <tr>
                            <th>Program Name</th>
                            <th>Duration</th>
                            <th>Credit </th>                           
                            <th>Admission Fee</th>
                            <th>Total Fees</th>
                        </tr>
                    </thead>
                    @if($programsFee)
                    @foreach ($programsFee as $index =>$rows )                     
                        <tr>                           
                            <td>{{$rows->name}}</td>
                            <td>{{$rows->duration}}</td>
                            <td>{{$rows->credit}}</td>
                            <td>{{$rows->admission_fee}}</td>
                            <td>{{$rows->tuition_fee}}</td>
                        </tr>
                        @endforeach
                        @endif                    
                       
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>


@endsection