@extends('layouts.master')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="text-center">
                    <h4 style="text-transform:uppercase;font-weight:700">{{ $slug ? str_replace('-', ' ', $slug) : 'N/A' }}
                    </h4>
                    <ol class="d-flax justify-content-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="../program">Programs</a></li>
                        <li style="text-transform:capitalize">{{ $slug ? str_replace('-', ' ', $slug) : 'N/A' }}
                        </li>
                    </ol>
                </div>

            </div>
        </section>
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
