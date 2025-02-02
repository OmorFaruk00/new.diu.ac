@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Transportation Engineering Lab
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
           
            <tbody>
                <tr>
                    <th colspan="2">TESTING OF AGGREGATES</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Determination of Aggregate Impact Value (AIV)</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Determination of Aggregate Crushing Value (ACV)</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Determination of the Ten Percent Fines Value</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Determination of Flakiness Index</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Determination of Elongation Index</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Determination of Angularity Number</td>
                </tr>
                <tr>
                    <th colspan="2">TESTS ON BITUMINOUS MATERIALS</th>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Specific Gravity of Semi-Solid Bituminous Material</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Loss on Heating of Asphaltic Compound</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Penetrations of Bituminous Material</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Softening Point of Bituminous Materials (Ring and Ball Method)</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Flash and Fire Points of Bituminous Materials (Cleveland Open Cup)</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Solubility test of Bituminous Materials.</td>
                </tr>
                <tr>
                    <th colspan="2">CBR AND BITUMINOUS MIX DESIGN</th>
                </tr>
                <tr>
                    <td>13</td>
                    <td>California Bearing Ratio (CBR) Test</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Marshall Method of Mix Design</td>
                </tr>
                <tr>
                    <th colspan="2">CBR AND BITUMINOUS MIX DESIGN</th>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Determination of Roadway Capacity</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>A Method for Measuring Saturation Flow at Traffic Signal.</td>
                </tr>


            </tbody>
        </table>

        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Loss on Heating Oven</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Loss on Heating Oven.jpg" alt="lab">                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Marshall Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Marshall Apparatus.jpg" alt="lab">                
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>CBR Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/CBR Machine.jpg" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Penetration Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Penetration.jpg" alt="Penetration Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Ductility Machine</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Ductility Machine.jpg" alt="Ductility Machine" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Stripping Value Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Stripping Value Apparatus.jpg" alt="Stripping Value Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>AIV Apparatu</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/AIV Apparatus.jpg" alt="AIV Apparatu" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Water Bath</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Water Bath.jpg" alt="Water Bath" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Flash and Fire Point
                    Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Flash and Fire Point.jpg" alt="Flash and Fire Point Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Shelf</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Transportation/Shelf.jpg" alt="Shelf" >                
            </div>




        </div>


        </div>
    </div>
</div>
@endsection
