@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Surveying Lab
            </h4>
            <ol class="d-flax justify-content-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Programs</a></li>
                <li style="text-transform:capitalize">Department of Civil Engineering
                </li>
            </ol>
        </div>

    </div>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 pb-5">
            <x-lab-sidebar />
        </div>
        <div class="col-lg-8 colmd-8 col-sm-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name of the Experiment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Chain Surveying</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Plane Table Surveying</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Theodolite Traverse Surveying</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Leveling/ Route Surveying</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>House Setting</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Height Measurement</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Contouring</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Total Station</td>
                    </tr>

                </tbody>
            </table>

            <div class="row pb-5">
                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <h2>Chain Survey Equipment</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                    <img src="/images/lab/Surveying/Chain Survey Equipment.jpg" alt="Chain Survey Equipment">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <h2>Plane table survey equipment</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                    <img src="/images/lab/Surveying/Plane table survey.jpg" alt="Plane table survey equipment">
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <h2>Theodolite</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                    <img src="/images/lab/Surveying/Theodolite.png" alt="Theodolite">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <h2>Dumpy Level</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                    <img src="/images/lab/Surveying/Dumpy Level.jpg" alt="Dumpy Level">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                    <h2>Total Station</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                    <img src="/images/lab/Surveying/Total Station.png" alt="BOD Incubator">
                </div>





            </div>


        </div>
    </div>
</div>
@endsection
