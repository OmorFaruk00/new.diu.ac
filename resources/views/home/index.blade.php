 @extends('layouts.master')
 @section('content')  


     <main id="main">
        <x-home.slider />
         <x-home.leader />
         <x-home.newsEvent />

         <x-home.why />

         <x-home.partner />

         {{-- <x-campuslife /> --}}
         <x-home.counter />

         <x-home.follow />

     </main>
 @endsection
