@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Hydraulics lab
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
                    <td>Determination of State of Flow and Critical Depth in Open Channel</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Flow over Broad Crested Weir</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Flow Through a Venturi Flume</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Flow Through A Parshall Flume</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Flow Through a Cut Throat Flume</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Flow Beneath a Sluice Gate</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Study on Hydraulic Jump</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Development Of Generalized Specific Energy and Specific Force Curves</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Velocity Distribution in open channel</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Determination of Discharge & Mean Velocity of an Open Channel Flow</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Centre of Pressure</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Bernoulli’s Theorem</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Flow through Venturimeter</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Flow through Orifice</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Flow through Mouthpiece</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Flow Over V-notch</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Flow over sharp-crested rectangular weir</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Fluid Friction in Pipe</td>
                </tr>
            </tbody>
        </table>

        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Broad crested weir</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Broad crested weir.jpg" alt="lab">                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Venturi Flume</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Venturi Flume.jpg" alt="lab">                
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Parshall Flume </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Parshall Flume.jpg" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Cut Throat Flume</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Cut Throat Flume.jpg" alt="Cut Throat Flume" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sluice Gate </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Sluice Gate.jpg" alt="Sluice Gate " >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sluice Gate & Sharp Crested Weir</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Sluice Gate & Sharp.jpg" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sluice Gate & Broad  Crested Weir</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Sluice Gate & Broad.jpg" alt="Sluice Gate & Broad  Crested Weir" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Tilting Flume</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Tilting Flume.jpg" alt="Tilting Flume" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Hydrostatic Pressure</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Hydrostatic Pressure.jpg" alt="Hydrostatic Pressure" >                
            </div>
           

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Bernoulli’s Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Bernoulli’s Apparatus.jpg" alt="Bernoulli’s Apparatus" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Venturimeter</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Venturimeter.jpg" alt="Venturimeter" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Orifice Flowmeter</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Orifice Flowmeter.jpg" alt="Orifice Flowmeter" >                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Mouthpiece  Flowmeter </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Mouthpiece.jpg" alt="Mouthpiece" >                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Triangular Weir or V-notch Weir </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Triangular Weir.png" alt="Triangular Weir" >                
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sharp-Crested Weir apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Sharp-Crested.png" alt="Sharp-Crested" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Fluid Friction Apparatus </h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Fluid Friction.jpg" alt="Fluid Friction Apparatus " >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sluice gate, Sharp & Broad Crested Weir Apparatus</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Hydraulics/Sluice gate, Sharp & Board.jpg" alt="Sluice gate, Sharp & Broad Crested Weir Apparatus" >                
            </div>




        </div>


        </div>
    </div>
</div>
@endsection
