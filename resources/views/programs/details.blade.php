@extends('layouts.master')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="text-center">
                    <h4 style="text-transform:uppercase;font-weight:700">{{ $slug ?? null }}</h4>
                    <ol class="d-flax justify-content-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="../program">Programs</a></li>
                        <li style="text-transform:capitalize">{{ $slug ?? null }}</li>
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

    </main>
@endsection