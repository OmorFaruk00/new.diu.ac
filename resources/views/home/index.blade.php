 @extends('layouts.master')
 @section('content')
  <div class="d-none d-md-block">
    <section id="hero" class="mt-5">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">    
        <div class="carousel-inner">
          @if($sliders)
          @foreach ($sliders as $index=>$item )           
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{$item->image_url}}" class="w-100" alt="Slider 02" style="height: 90vh">
          </div>
          @endforeach  
          @endif
        </div>
        <div class="text-center">
          <div class="formdiv">
            <div id="form-container">
              <h3 class="underline2 text-center">Admissions Open 2024-25</h3>
              <!-- <p class="text-center mb-1"><b></b></p> -->
              <div class="npf_wgts" data-height="470px" data-w="30a8c66c6ffa07398a043dd983fbf980"></div>
            </div>
          </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
      </div>
    </section>
    <!-- End Hero -->
  </div>
  <div class="d-block d-sm-none">
    <section class="hero" id="mbannermobile">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          @if($sliders)
          @foreach ($sliders as $index=>$item )           
          <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
            <img src="{{$item->image_url}}" class="d-block w-100" alt="Slider 02" style="height: 40vh">
          </div>
          @endforeach  
          @endif
        </div>
      </div>
      <!--div class="d-flex align-items-center justify-content-between">
  <div class="d-none d-sm-block d-md-block"><img src="assets/img/b2.jpg" class="img-fluid"></div>
  <div class="d-sm-none text-center"><img src="assets/img/banner-mobile3.jpg" class="img-fluid"></div>
  <div class="text-center">
  
  </div>
  </div>
  
  <div class="d-flex flex-column align-items-center d-md-none">
  <div style="margin-top:40px;"><img src="assets/img/banner-mobile3.jpg" class="img-fluid"></div>
  <div-->
      <div class="formdiv1 text-center" id="hero">

        <div id="form-container">
          <h3 class="underline2 text-center">Admissions Open - 2024</h3>
          <div class="npf_wgts" data-height="470px" data-w="30a8c66c6ffa07398a043dd983fbf980"></div>
        </div>

      </div>
  </div>
  </div>
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
                <p>KL Hyderabad Global Business School is one of the most prestigious business schools in the
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

    <section id="section3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="assets/img/backgrounds/section-3-back.jpg" class="img-fluid" alt="Section 3 Background Image">
          </div>
          <div class="col-md-6">
            <div class="design">
              <h2>Bridge Your Business Ambitions</h2>
              <p>At KL Hyderabad Global Business School, we provide top-notch business education that propels our students towards success. Our experienced faculty and hands-on learning
                opportunities equip our students with the in-demand skills and knowledge essential to succeed in the business world.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section id="section4">
      <div class="container">
        <div class="row g-0">
          <div class="col-md-6 order-md-1 order-2">
            <div class="enchance">
              <h2>Enhance your Career Prospects</h2>
              <p>Whether you’re looking to land your dream job or advance in your current role or want to be your own boss, we have the right resources and support to help you reach your goals.</p>
            </div>
            <div class="w-100">
              <img src="assets/img/sect-4-bars.jpg" alt="" class="w-100" />
            </div>
          </div>
          <div class="col-md-6 order-md-2 order-1">
            <img src="assets/img/backgrounds/section-4-background.png" class="img-fluid" alt="Section 3 Background Image" />
          </div>

        </div>
      </div>
    </section>
  </main>

  <section id="whykl" class="pt-5">
    <div class="container">
      <div class="row g-0 align-items-end">
        <div class="col-md-6">
          <img src="assets/img/why.jpg" class="img-fluid" alt="Why KL?" style="vertical-align:bottom !important;" />
        </div>
        <div class="col-md-6">
          <div class="carddeck">
            <div class="row">
              <div class="col-md-6">
                <div class="mycard1 mycard1-one">
                  <h2>Eminent Faculty</h2>
                  <p>Our faculty members are passionate to provide you with the highest quality education and in-demand skills to lead the business world.</p>
                </div>

              </div>
              <div class="col-md-6">
                <div class="mycard1 mycard1-two">
                  <h2>Modern Curriculum</h2>
                  <p>Our cutting-edge curriculum is designed to equip you with the skills and knowledge essential to succeed in your workplace.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mycard1 mycard1-three">
                  <h2>Global Exposure</h2>
                  <p>You will gain global exposure by attending global conferences, internships abroad, and engaging with industry leaders.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mycard1 mycard1-four">
                  <h2>100% Placements</h2>
                  <p>We are proud of placing 100% of the eligible students every year since 2006 in top-notch national and international companies.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mycard1 mycard1-five">
                  <h2>Paid Internships</h2>
                  <p>We offer stipend assisted internships to gain exposure to the corporate world and the ability to apply your newly acquired skills into practice.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mycard1 mycard1-six">
                  <h2>Harvard Pedagogy</h2>
                  <p>We encourage you to think critically and analytically about business problems by collaborating with teams to solve complex business problems.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Start Programs -->
  @if($programs)    
  <x-programs :programs="$programs" ></x-programs>
  @endif
  <!-- End Programs -->
  <section class="applynow">
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <a href="#hero" class="smoothScroll"><img src="assets/img/apply-now.jpg" alt="Apply Now" class="mx-auto d-block" /></a>
        </div>
      </div>
    </div>
  </section>

  <section class="beyond">
    <div class="container">
      <div class="row  align-items-end">
        <div class="col-md-4">
          <img src="assets/img/beyond.png" alt="EDUCATION BEYOND BORDERS" class="img-fluid" />
        </div>
        <div class="col-md-8 mt-3">
          <div class="beyond-text">
            <h2>EDUCATION BEYOND BORDERS</h2>
            <p>KLH Global Business School encourages global education through its international partnership with <span>83 leading universities</span>
              in various countries and provide you with opportunities like</p>
          </div>
          <div class="colored-text colored-text-01">
            <a href="/semester-abroad-program" style="color: #fff !important;">
            Semester Abroad Program (SAP)</a>
          </div>
          <div class="colored-text colored-text-02">
            <a href="/internship-abroad-program" style="color: #fff !important;">
            Internship Abroad Program (IAP)</a>
          </div>
          <div class="colored-text colored-text-03">
            <a href="/study-tour" style="color: #fff !important;">
            Study Tour (ST)</a>
          </div>
          <div class="colored-text colored-text-04">
            <a href="/faculty-exchange-program" style="color: #fff !important;">
            Faculty Exchange Program (FEP)</a>
          </div>
          <div class="partner-univ">
            <h2 class="mb-3">Our Partners</h2>
            <div class="row">
              @if($partners)       
              @foreach ($partners as $item )             
              <div class="col-md-3 col-6">
                <div class="partner-univ-card"> <img src="{{$item->image_url}}" class="img-fluid" alt="Harvard University"></div>
              </div>
              @endforeach
              @endif            
         
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="full-width-bars">
    <div class="w-100">
      <img src="assets/img/four-bars-full.jpg" alt="" class="w-100">
    </div>
  </section>

  <section class="spark">
    <div class="container">
      <div class="row g-0">
        <div class="col-md-6">
          <img src="assets/img/Spark.jpg" alt="SPARK YOUR ENTREPRENEURIAL SPIRIT" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <div class="spark-gradiant">
            <h2>SPARK YOUR<br /> ENTREPRENEURIAL<br /> SPIRIT</h2>
            <p>We have a Start-Ups ecosystem under KL Incubation Center for Innovation, Start-up, and Entrepreneurship (KLICISE) to encourage Innovative ideas to bring start-up culture. We support you from idea generation, advice funding, techno-mentorship to market and launch of products.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Campus Life -->
  <x-campuslife />

  <section class="">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">

          <img src="assets/img/backgrounds/rankings.jpg" alt="rankings-nirf" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>

  <section class="applynow">
    <div class="container py-5">
      <div class="row">
        <div class="col-12">
          <h4 class="my-4">WANT TO STAY AHEAD IN AN EVER-EVOLVING BUSINESS WORLD?</h4>
          <a href="#hero" class="smoothScroll"><img src="assets/img/apply-now.jpg" alt="Apply Now" class="mx-auto d-block" /></a>
        </div>
      </div>
    </div>
  </section>
  </main>
  @endsection
