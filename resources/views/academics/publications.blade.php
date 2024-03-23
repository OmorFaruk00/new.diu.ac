@extends('layouts.master')
@section('content')
<style>
.page-title h2 {
    position: relative;
    text-transform: uppercase;
    display: inline-block; 
    margin-bottom: 40px;
    font-weight: 800;
}


.page-title h2:after {
    content: "";
    position: absolute;
    left: 50%; 
    bottom: -10px;
    height: 3px;
    width: 100px;
    background: #1474B5;
    transform: translateX(-50%); 
}
.publication{
    font-size: 20px;
    color: #1576B7;
    font-weight: 800;
    margin-left: 10px;
}

</style>
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1 style="text-transform: uppercase">Publications</h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Publications</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  <section>
    <div class="container py-5">
        <div class="page-title text-center">
            <h2>WELCOME TO OUR publications</h2>
            <p>DIU is profoundly esteemed for it's own reputation which is
                built upon credibility, practical knowhow and a feasible archive of books, bulletins and journals.
                DIU has published1576B7 a few original books written by its teachers and faculties. Whereas bulletins help
                students to keep upto date regarding their class and exam routines, schedule and other important
                notices. Both faculties and students of extraordinary merit are allowed to write their own
                journals.</p>
        </div>

        <h2 class="py-3" style="font-weight:600">Our Journals</h2>

     
            @if($publications)
            @foreach ( $publications as $rows )           
                <p><img src="{{ asset('assets/images/right-arow.png') }}" alt=""
                    style="height: 18px"><a href="{{$rows->image_url}}" class="publication" target="_blank">{{$rows->title}}</a></p>          
                
            @endforeach                
            @endif
         
    </div>
  </section>

@endsection