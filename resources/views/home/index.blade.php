 @extends('layouts.master')
 @section('content')  


     <main id="main">
        <x-home.slider />
         <x-home.leader />
         <x-home.newsEvent />

           <x-home.event />

         <x-home.why />
         <x-home.founder />

         <x-home.partner />
         <x-home.chairman />
         

         {{-- <x-campuslife /> --}}
         <x-home.counter />

         <x-home.follow />

     </main>
 @endsection
