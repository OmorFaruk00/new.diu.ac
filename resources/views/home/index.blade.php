 @extends('layouts.master')
 @section('content')  


     <main id="main">
        <x-home.slider />
         <x-home.leader />
         <x-home.notice />

           <x-home.event />

         <x-home.why />
         <x-home.founder />

         {{-- <x-home.chairman /> --}}
         
         
         {{-- <x-campuslife /> --}}
         @if($counter)
         <x-home.counter :counter="$counter"/>
         @endif
         <x-home.partner />

         {{-- <x-home.follow /> --}}

     </main>
 @endsection
