@extends('layouts.master')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->

 <section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <ol class="d-flex" style="
                justify-content: center;
                gap: 15px;
                list-style: none;
                text-transform: capitalize;
                font-size: 16px;
                font-weight: 600;
                color: #fff;
                margin: 0;
                padding: 10px 0;
            ">
                <li><a href="{{ route('home') }}" style="color: #fff;">Home</a></li>
                <li><a href="#" style="color: #fff;">Programs</a></li>
                <li style="text-transform: capitalize;">
                    {{ $slug ? str_replace('-', ' ', $slug) : 'N/A' }}
                </li>
            </ol>
        </div>
    </div>
</section>

    

          <x-department.notice :slug="$slug" />
        <!-- End Breadcrumbs -->
        <!--  Department Basic Info -->
        @if ($basic)
            <x-department.basic :basic="$basic" />
            <x-department.head :basic="$basic" />
        @endif


        <!--  Department Objective Info -->
        @if ($objective)
            <x-department.objective :objective="$objective" />
        @endif
       

        <!--  Department Facility-->
            <x-department.facility :slug="$slug" />

        <!--  Department gallery-->
        {{-- @if ($gallery)
            <x-department.gallery :gallery="$gallery" />
        @endif --}}

  
        <x-department.gallery :slug="$slug" />
        

        <!--  Department syllabus-->
        @if($syllabus)
            <x-department.syllabus :syllabus="$syllabus" />
        @endif


        @if($slug == 'department-of-civil-engineering')

            <div id="rs-learning-objectives" class="rs-learning-objectives">
                <x-lab-facilities  />
            </div>

         @endif



        <!--  Department faculty member-->
        @if ($facultyMember)
            <x-department.faculty-member :members="$facultyMember" />
        @endif


    </main>
@endsection
