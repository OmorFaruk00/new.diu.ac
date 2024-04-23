 @extends('layouts.master')
 @section('content')
 <style>
.follow-links a {
    font-size: 18px;
    display: inline-block;
    background: #F6880C;;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 4px;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    /* margin-right: 20px; */
}
</style>
     {{-- <div class="d-none d-md-block">
         <section id="hero" class="mt-5">
             <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-inner">
                     @if ($sliders)
                         @foreach ($sliders as $index => $item)
                             <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                 <img src="{{ $item->image_url }}" class="w-100" alt="Slider 02" style="height: 80vh">
                             </div>
                         @endforeach
                     @endif
                 </div>
                 <ol class="carousel-indicators">
                    @if ($sliders)
                        @foreach ($sliders as $index => $item)
                            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    @endif
                </ol>
                 
       
             </div>
         </section>
         <!-- End Hero -->
     </div>
     <div class="d-block d-sm-none">
         <section class="hero" id="mbannermobile">
             <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-inner">
                     @if ($sliders)
                         @foreach ($sliders as $index => $item)
                             <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                 <img src="{{ $item->image_url }}" class="d-block w-100" alt="Slider 02"
                                     style="height: 40vh">
                             </div>
                         @endforeach
                     @endif
                 </div>
             </div>
   
     </div>
     </div> --}}
     <x-slider />
     </section>
     </div>
     <main id="main">
         <section id="section2">
             <div class="container-xxl">
                 <div class="section2-block" style="min-height: 442px;">
                     <div class="row">
                         <div class="col-12">
                             <div class="choice">
                                 <h2 class="">Building Leaders of Tomorrow</h2>
                                 <br>
                                 <p>KL Hyderabad Global Business School is one of the most prestigious business schools in
                                     the
                                     country. It offers a unique combination of <b>BBA and MBA programs,</b>
                                     allowing students to understand business principles more deeply. With our
                                     comprehensive and advanced learning experience, we prepare students to face
                                     challenges and lead in the professional world of business.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section> 
        
     </main>
     <x-why />  
     <x-partner />     
     <!-- Our Campus Life -->
     <x-campuslife />
     <section class="">
         <div class="container py-5">
             <div class="row">
                 <div class="col-md-12">
                    <x-counter />                    
                 </div>
             </div>
         </div>
     </section>
     <section class="applynow">
         <div class="container py-5">
             <div class="d-flex  justify-content-center">
                 <div class=" ">
                     <h4 class=" pt-2" style="margin-right: 40px">FOLLOW US</h4>
                     
                 </div>
                 <div class="">
                    <div class="follow-links">
                        <a href="https://twitter.com/diubd" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/diu.net.bd" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/diu.net.bd/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.linkedin.com/school/dhaka-international-university" target="_blank"class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        <a href="https://www.youtube.com/diudhaka" target="_blank" class="youtube mt-3"><i class="bx bxl-youtube"></i></a>

                    </div>
                </div>
             </div>
         </div>
     </section>
     </main>
 @endsection
