@extends('layouts.master')
@section('content')
<style>
    .notice{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 20px;
    }
    .contant{
        display: flex;
        align-items: center;
    }
    .notice-date{
        background: #49B5E7;
        color: #000;
        font-weight: 700;
        margin-right: 30px;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: 15px;   

    }
    .notice-title{  
        
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis;
    color: #000;
    font-size: 18px;
    font-weight: 600;

    }
    .notice-title:hover{ 
      color:#49B5E7; 

     }
</style>
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1 style="text-transform: uppercase">Notice Board</h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Notice Board</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  @php
    // dd($notice->items())
  @endphp
 
 {{-- <x-notice /> --}}

  <div class="container py-5">
   <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <x-notice />

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
     
      <x-event />

  </div>
   </div>
  </div>
@endsection

