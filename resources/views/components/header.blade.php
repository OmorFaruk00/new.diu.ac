<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo"><img src="assets/img/logo.png" alt="DIU Logo"
                class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use text as a logo -->
        <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown"><a href="{{route('home')}}"><span>HOME</span></a>

                <li class="dropdown"><a href="#"><span>ABOUT DIU</span><img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
                    <ul>
                        <li><a href="{{route('about-us')}}">About Us</a></li>
                        <li><a href="{{route('why-diu')}}">Why Choose DIU</a></li>
                        <li><a href="{{route('vision-mission')}}">Vision and Mission</a></li>
                        <li><a href="{{route('board-of-management')}}">Board of Management</a></li>
                        {{-- <li><a href="infrastructure">Infrastructure</a></li> --}}
                        <li><a href="{{route('student-facilities')}}">Student Facilities</a></li>
                        <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                        <li><a href="https://iqac.diu.ac" target="_blank">IQAC</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>ACADEMICS</span> <img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
                    <ul>
                        <li><a href="faculty">Faculty</a></li>
                        <li><a href="workshop-seminars">Workshop & Seminars</a></li>
                        <li><a href="research-publications">Research Publications</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="program"><span>PROGRAMS</span> <img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
                    <ul>
                        <li><a href="programs/bba">BBA</a></li>
                        <li><a href="programs/bba-it">BBA - IT</a></li>
                        <li><a href="programs/bba-acca">BBA - ACCA</a></li>
                        <li><a href="programs/mba-dual-specialization">MBA Multi Specialization
                                <!--(DS, Fintech, Entrepreneurship and venture development)--></a></li>
                        <li><a href="programs/bsc-animation-gaming">B. Sc Animation & Gaming</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>ADMISSIONS</span><img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
                    <ul>
                        <li><a href="admission-process">Admission Process</a></li>
                        <li><a href="important-dates">Important Dates</a></li>
                        <!-- <li><a href="#">Brochure</a></li> -->
                        <li><a href="program-fee-structure">Fee Structure</a></li>
                        <li><a href="international-admission">International Admissions</a></li>
                        <li><a href="scholarships">Scholarships</a></li>
                        <li><a href="admission-help-desk">Admission Help Desk</a></li>
                        <li><a href="faq">FAQ</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>LIFE @ GBS</span> <img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
                    <ul>
                        <li><a href="campus-life">Campus Life</a></li>
                        <li><a href="student-faculty-achievements">Student & Faculty Achievements</a></li>
                        <li><a href="student-stories">Student & Alumni Stories</a></li>
                        <li><a href="centre-of-excellence">Centre of Excellence</a></li>
                        <li><a href="business-analytical-lab">Business Analytical Lab</a></li>
                        <li><a href="newsletter">Monthly NewsLetter</a></li>
                        <li><a href="https://gbs.klh.edu.in/assets/pdfs/Code-of-Conduct.pdf" target="_blank">Code
                                of Conduct</a></li>
                        <li><a href="library">Library</a></li>
                        <li><a href="hobby-club">Hobby clubs</a></li>
                        <li><a href="entrepreneurship-cell">Entrepreneurship Cell</a></li>
                        <li><a href="sports">Sports</a></li>
                        <li><a href="arka">Arka Fest</a></li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>PLACEMENT</span> <img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
                    <ul>
                        <li><a href="placement-process">Placement Process</a></li>
                        <li><a href="recruiters">Recruiters</a></li>
                        <li><a href="pre-placement-training">Pre-Placement Training (CRT)</a></li>
                        <li><a href="student-placements">Students Placements</a></li>
                        <li><a href="internship">Internships</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>GLOBAL CONNECTS</span> <img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
                    <ul>
                        <li><a href="mou">MoU</a></li>
                        <li><a href="semester-abroad-program">Semester Abroad Program</a></li>
                        <li><a href="faculty-exchange-program">Faculty Exchange Program</a></li>
                        <li><a href="international-conference">International Conference</a></li>
                        <li><a href="internship-abroad-program">Internship Abroad Program</a></li>
                        <li><a href="study-tour">Study Tour</a></li>
                    </ul>
                </li>
                <!-- <li><a class="getstarted scrollto" href="index#hero">Apply Now</a></li> -->
                <li>&nbsp</li>
                <li>&nbsp</li>
                <li><button type="button"
                        class="npfWidgetButton npfWidget-30a8c66c6ffa07398a043dd983fbf980">Enquire Now!</button>
                </li>

                <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <img src="{{ asset('/assets/img/down-arow.png') }}" alt="" style="margin-bottom: 2px;height:20px"></a>
        <ul>
          <li><a href="#">Drop Down 1</a></li>
          <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">Deep Drop Down 1</a></li>
              <li><a href="#">Deep Drop Down 2</a></li>
              <li><a href="#">Deep Drop Down 3</a></li>
              <li><a href="#">Deep Drop Down 4</a></li>
              <li><a href="#">Deep Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#">Drop Down 2</a></li>
          <li><a href="#">Drop Down 3</a></li>
          <li><a href="#">Drop Down 4</a></li>
        </ul>
      </li> -->

            </ul>
            {{-- <i class="bi bi-list mobile-nav-toggle" style="color: red"></i> --}}
            <img src="{{asset('/assets/img/menu.png')}}" class="mobile-nav-toggle" alt="">
        </nav><!-- .navbar -->

    </div>
    <script src="https://cdn.npfs.co/js/widget/npfwpopup.js"></script>
    <script>
        let npfW30a8c66c6ffa07398a043dd983fbf980 = new NpfWidgetsInit({
            'widgetId': '30a8c66c6ffa07398a043dd983fbf980',
            'baseurl': 'widgets.nopaperforms.com',
            'formTitle': 'Enquiry Form',
            'titleColor': '#FF0033',
            'backgroundColor': '#ddd',
            'iframeHeight': '500px',
            'buttonbgColor': '#4c79dc',
            'buttonTextColor': '#FFF',
        });
    </script>
</header>