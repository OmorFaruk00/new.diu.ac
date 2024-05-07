 @extends('layouts.master')
 @section('content')  


     <main id="main">
        <x-home.slider />
         <x-home.leader />
         <x-home.newsEvent />

         @if($event)            
           <x-home.event :event="$event" />
         @endif

         <x-home.why />
         <x-home.founder />

         <x-home.partner />
         

         {{-- <x-campuslife /> --}}
         <x-home.counter />

         <x-home.follow />

     </main>
 @endsection
