@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Environmental Engineering Lab
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
                    <td>Determination of pH of water</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Determination of Dissolved Oxygen</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Determination of Total Dissolved Solids (TDS)</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Determination of Turbidity of water</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Determination of Biochemical Oxygen Demand (BOD)</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Chemical Coagulation of water: Alum Coagulation</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Determination of Arsenic in Water</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Determination of Chemical Oxygen Demand</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Determination of Iron Concentration of Water</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Determination of Carbon-dioxide of Water</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Determination of Total and Fecal Coliform in water</td>
                </tr>
            </tbody>
        </table>

        <div class="row pb-5">
            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Spectrophotometer</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Spectrophotometer.png" alt="lab">                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Jar Tester</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Jar Tester.png" alt="lab">                
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>COD Reactor</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/COD Reactor.png" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Colorimeter</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Colorimeter.png" alt="Colorimeter" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>BOD Incubator</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/BOD Incubator.png" alt="BOD Incubator" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Multimeter with Probes</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Multimeter with Probes.png" alt="lab" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Turbidity Meter</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Turbidity Meter.png" alt="Turbidity Meter" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sterilizer</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Sterilizer.png" alt="Sterilizer" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Incubator</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Incubator.png" alt="Incubator" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Hot Air Oven</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Hot Air Oven.png" alt="Hot Air Oven" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Sensitive Balance</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Sensitive Balance.png" alt="Sensitive Balance" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Vortex Mixer</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Vortex Mixer.png" alt="Vortex Mixer" >                
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                <h2>Suction Pump</h2>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 py-4 experiment-img">
                <img src="/images/lab/Environmental/Suction Pump.png" alt="Suction Pump" >                
            </div>




        </div>


        </div>
    </div>
</div>
@endsection
