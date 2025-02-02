@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Geotechnical Engineering Lab
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
                    <td>Field Identification of Soil</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Determination of Specific Gravity of Soil</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Grain Size Analysis by Sieves</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Grain Size Analysis by Hydrometer</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Determination of Moisture Content and Atterberg Limits</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Compaction Test</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Minimum and maximum Index Density and Unit Weight Test</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Direct Shear Test</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Unconfined Compression Test</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Permeability tests</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Consolidation Test</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Tri-axial Compression Test (UU, CU and CD )</td>
                </tr>
            </tbody>
        </table>

        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Direct Shear Testing 
                    Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Direct Shear Testing Machine.png" alt="Direct Shear Testing Machine">                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Consolidation Testing 
                    Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Consolidation Testing.png" alt="Consolidation Testing Apparatus">                
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Unconfined Compression 
                    Testing Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Unconfined Compression.png" alt="Unconfined Compression Testing Machine" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Tri-axial Compression Testing Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Tri-axial Compression.png" alt="Tri-axial Compression Testing Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Automatic Sieve Shaker</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Automatic Sieve Shaker.png" alt="Automatic Sieve Shaker" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Permeability Test Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Permeability Test.png" alt="Permeability Test Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Relative Density Testing Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Relative Density Testing.png" alt="Relative Density Testing Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Balance</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Balance.png" alt="Balance" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Water Bath</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Water Bath.png" alt="Water Bath" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Oven</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Oven.png" alt="Oven" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Casagrande Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Geotechnical/Casagrande Apparatus.png" alt="Casagrande Apparatus" >                
            </div>

           




        </div>


        </div>
    </div>
</div>
@endsection
