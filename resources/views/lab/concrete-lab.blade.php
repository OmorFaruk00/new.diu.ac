@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Concrete Lab
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
         <table class="table table-bordered" >
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name of the Experiment</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Determination of Normal Consistency of Cement with Vicat’s Apparatus </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Determination of Initial Setting Time of Cement with Vicat’s Apparatus</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Soundness Test of Cement</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Test for Direct Compressive and Tensile Strength of Cement mortar</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sieve Analysis of Fine and Coarse Aggregate</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Specific Gravity and Absorption Capacity of Fine Aggregate</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Specific Gravity and Absorption Capacity of Coarse Aggregate</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Unit Weight and Voids in Aggregate</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Resistance to Degradation of Small Size Coarse Aggregate by Abrasion and Impact of the Los Angeles Machine</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Compressive Strength of Cylindrical and Cubical Concrete Specimens</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Slump Test of Concrete</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Trial and Error Method of Proportioning for Concrete Mixes</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Water Absorption Test of Bricks</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Determination of the Compressive Strength of Bricks</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Efflorescence Test of Clay Bricks</td>
                </tr>
            </tbody>
        </table>

        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Vicat’s Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Vicat’s Apparatus.png" alt="lab">                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Digital Compression Testing Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Digital Compression Testing Machine.png" alt="lab">                
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Los Angeles Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Los Angeles Machine.png" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Briquette Testing Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Briquette Testing Machine.png" alt="Briquette Testing Machine" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Concrete Mixer</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Concrete Mixer.png" alt="Concrete Mixer" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Oven</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Oven.png" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sieve Shaker</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Sieve Shaker.png" alt="Sieve Shaker" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Water Bath</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Water Bath.png" alt="Water Bathr" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Le-Chatelier Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Le-Chatelier Apparatus.png" alt="Le-Chatelier Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Cylindrical and Cubical Mold</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Cylindrical and Cubical Mold.png" alt="Cylindrical and Cubical Mold" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Cube and Briquette Molds</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Concrete/Cube and Briquette Molds.png" alt="Cube and Briquette Molds" >                
            </div>

            




        </div>


        </div>
    </div>
</div>
@endsection
