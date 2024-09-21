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
         <x-home.counter />
         <x-home.partner />

         {{-- <x-home.follow /> --}}

     </main>
 @endsection
