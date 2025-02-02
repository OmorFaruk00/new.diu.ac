@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Mechanics Lab
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
                    <td>Tension Test of Mild Steel Specimen</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Compression Test of Timber Specimen</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Impact Test of Metal Specimen</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Test of Helical Spring</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Direct Shear Test of Metal Specimens</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Hardness Test of Metal Specimen</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Buckling Test of Slender Columns</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Static Bending Test of Beam</td>
                </tr>
               
            </tbody>
        </table>

        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>UNIVERSAL TESTING MACHINE</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/UNIVERSAL TESTING MACHINE.png" alt="lab">                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Buckling Test Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Buckling Test Apparatus.png" alt="lab">                
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Flexural Testing Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Flexural Testing Apparatus.png" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Impact Testing Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Impact Testing Machine.png" alt="Impact Testing Machine" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Hardness Testing Aparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Hardness Testing Aparatus.png" alt="Hardness Testing Aparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Vernier Caliper</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Vernier Caliper.png" alt="Vernier" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                {{-- <h2>Vernier Caliper</h2> --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Vernier.png" alt="Vernier" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                {{-- <h2>Turbidity Meter</h2> --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Vernier1.png" alt="Vernier" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                {{-- <h2>Sterilizer</h2> --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Vernier2.png" alt="Vernier" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                {{-- <h2>Incubator</h2> --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Vernier3.png" alt="Vernier" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                {{-- <h2>Hot Air Oven</h2> --}}
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Mechanics/Vernier4.png" alt="Vernier" >                
            </div>

          



        </div>


        </div>
    </div>
</div>
@endsection
