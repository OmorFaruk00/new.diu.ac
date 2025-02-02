@extends('layouts.master')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Department of Civil Engineering
            </h4>
            <ol class="d-flax justify-content-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="../program">Programs</a></li>
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
            <div class="col-lg-8 colmd-8 col-sm-12 pb-5 mb-5">
               
             <p style="text-align: justify">The Computer Lab, located on the 1st floor, is equipped with 38 advanced PCs and a multimedia projector. It provides a comprehensive environment for students with sophisticated software like AutoCAD, Python, MATLAB, ETABS and ArcGIS. The lab is capable of running the latest versions of Civil Engineering software.</p>
             <img src="/images/lab/computer-lab.png" alt="computer lab" >
               

            </div>
        </div>
    </div>
@endsection
