<style>
    body {
        margin: 0;
        padding: 0;
        font: 300 14px/18px Roboto;
        /* background-image: url('../images/texture.png'); */
    }

    ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .exo-menu {
        width: 100%;
        list-style: none;
        position: relative;
        background-color: #FFFFFF !important;
    }

    .exo-menu>li {
        display: inline-block;
        float: left;
    }

    .exo-menu>li>a {
        color: #000;
        font-size: 17px;
        font-weight: 500;
        text-decoration: none;
        text-transform: uppercase;
        -webkit-transition: color 0.2s linear, background 0.2s linear;
        -moz-transition: color 0.2s linear, background 0.2s linear;
        -o-transition: color 0.2s linear, background 0.2s linear;
        transition: color 0.2s linear, background 0.2s linear;
    }

    .exo-menu>li>a.active,
    .exo-menu>li>a:hover,
    li.drop-down ul>li>a:hover {
        color: #01AA4D;
    }

    .mega-menu ul li a:hover {
        color: #01AA4D !important;
    }

    /* .exo-menu > li > a.active::after,
.exo-menu > li > a:hover::after
 {
    content: "";
    display: block;
    width: 100%;
    height: 3px;
    background-color: #01AA4D;
} */
    /* h4.row.mega-title {
        color: #000;
        margin-top: 0px;
        font-size: 14px;
        padding-left: 15px;
        padding-bottom: 5px;
        text-transform: uppercase;
    } */

    /*mega menu*/
    .mega-menu {
        left: 0;
        right: 0;
        padding: 15px;
        display: none;
        padding-top: 0px;
        min-height: 100%;
        /* margin-top: 5px; */

    }

    h4.row.mega-title {
        color: #D48231;
        margin-top: 0px;
        font-size: 18px;
        font-weight: 600;
        padding-left: 15px;
        padding-bottom: 5px;
        text-transform: uppercase;
        padding-top: 15px;
    }

    .mega-menu ul li a {
        line-height: 35px;
        font-size: 17px;
        display: block;
        color: #000;
        /* color: #fff; */
        font-weight: 400;
    }



    /*common*/
    .mega-menu {
        /* background: rgba(4, 4, 4, 0.7); */
        /* opacity: 0.8; */
        background-color: #fff;
        color: #000;
        /* color: #fff !important; */
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }



    .mega-menu:hover,
    .drop-down-ul:hover,
    li.flyout-left>ul:hover,
    li.flyout-right>ul:hover,
    .flyout-mega-wrap:hover,
    li.flyout-left a:hover+ul,
    li.flyout-right a:hover+ul,
    li.drop-down>a:hover+.drop-down-ul,
    .mega-drop-down a:hover+.mega-menu,
    li.flyout-mega>a:hover+.flyout-mega-wrap {
        display: block;
    }

    .drop-down-ul {
        display: none;
    }
    .drop-down-ul.show {
    display: block;
}

    .flyout-right>ul,
    .flyout-left>ul {
        top: 0;
        min-width: 230px;
        display: none;
        border-left: 1px solid #365670;
    }

    li.drop-down>ul>li>a,
    .flyout-right ul>li>a,
    .flyout-left ul>li>a {
        font-size: 17px;
        color: #000;
        font-weight: 400;
        display: block;
        padding: 15px 25px;
        text-decoration: none;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        background-color: #fff;
        /* background-color: rgba(255, 255, 255, 0.7); */
        /* opacity: 0.8; */
        /* border-bottom: 1px dotted #547787; */
        -webkit-transition: color 0.2s linear, background 0.2s linear;
        -moz-transition: color 0.2s linear, background 0.2s linear;
        -o-transition: color 0.2s linear, background 0.2s linear;
        transition: color 0.2s linear, background 0.2s linear;
    }

    .logo {
        float: left;
        margin-right: 20px;
        margin-right: 12% !important;
    }

    .logo img {
        height: 50px !important;
        margin-top: 2px;
        margin-left: -15px;
    }


    /*responsive*/

    @media (min-width:767px) {
        .exo-menu>li>a {
            display: block;
            padding: 12px 22px;
        }


        .mega-menu,
        .flyout-mega-wrap,
        .Images,
        .Blog,
        .flyout-right>ul,
        .flyout-left>ul,
        li.drop-down>ul {
            position: absolute;
        }

        .flyout-right>ul {
            left: 100%;
        }

        .flyout-left>ul {
            right: 100%;
        }

    }
    @media (max-width:580px) {
        .mega-menu{
            max-height: 400px;
            overflow: auto;
        }
        /* .exo-menu {
            max-height: 500px;
            overflow: auto;

        } */
    }

    @media (max-width:980px) {

        .exo-menu {
            min-height: 50px;
            background-color: #fff;
            width: 100%;

        }

        .exo-menu>li>a {
            width: 100%;
            display: none;

        }

        .toggle-menu {
            display: block;

        }

        .exo-menu>li {
            width: 100%;
        }

        .display.exo-menu>li>a {
            display: block;
            padding: 20px 22px;
        }

        .mega-menu,
        .Images,
        .Blog,
        .flyout-right>ul,
        .flyout-left>ul,
        li.drop-down>ul {
            position: relative;
        }

    }

    a.toggle-menu {
        position: absolute;
        right: 0px;
        padding: 20px;
        font-size: 27px;
        color: #000;
        top: 0px;
    }

    .blink-soft {
        animation: blinker 1.5s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }

    #header {
        padding: 10px 0;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.05);
        height: 60px;
    }

    @media (max-width: 1080px) {
        .exo-menu li a {
            background-color: #fff !important;
        }

        .logo {
            margin-right: 0% !important;
        }
    }
</style>




<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<header id="header" class="fixed-top" style="margin-top: 30px">

    <div class="container">
        <ul class="exo-menu">

            <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/images/logo1.png') }}"
                    alt="DIU Logo"></a>

            {{-- <li class="drop-down"><a href="#"></i> Flyout</a>
                        <!--Drop Down-->
                        <ul class="drop-down-ul animated fadeIn">
                        <li class="flyout-right"><a href="#">Flyout Right</a><!--Flyout Right-->
                            <ul class="animated fadeIn">
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Watch</a></li>
                            </ul>
                        </li>

                        <li class="flyout-left"><a href="#">Flyout Left</a><!--Flyout Left-->
                            <ul class="animated fadeIn">
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Watch</a></li>
                            </ul>
                        </li>

                        <li><a href="#">No Flyout</a></li>

                        </ul>

                    </li>  --}}
            <li class="mega-drop-down"><a href="#"> DIU</a>
                <div class="animated fadeIn mega-menu">
                    <div class="mega-menu-wrap">
                        <div class="row">

                            <div class=" col-xl-4 col-md-4 col-sm-12">
                                <h4 class="row mega-title">ABOUT US</h4>
                                <ul>
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    <li><a href="{{ route('vision-mission') }}">Vision and Mission</a></li>
                                    <li><a href="{{ route('board-of-management') }}">Board of Management</a></li>
                                    <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-4 col-md-4 col-sm-12">
                                <h4 class="row mega-title">ACADEMICS</h4>
                                <ul>
                                    <li><a href="{{ route('certificate-verification') }}">Certificate Verifications</a>
                                    </li>
                                    <li><a href="{{ route('faculty') }}">Faculty List</a></li>
                                    <li><a href="{{ route('convocation') }}">Convocation</a></li>
                                    <li><a href="{{ route('publications') }}">Publications</a></li>
                                    <li><a href="{{ route('journals') }}">Journals</a></li>


                                </ul>
                            </div>

                            <div class=" col-xl-4 col-md-4 col-sm-12">
                                <h4 class="row mega-title">Research Cell</h4>
                                <ul>
                                    <li><a href="{{ route('iqac') }}"> IQAC</a></li>
                                    <li><a href="{{ route('tcrc') }}"> TCRC</a></li>
                                    <li><a href="{{ route('sbac') }}"> SBAC</a></li>
                                    <li><a href="{{ route('cecd') }}"> CECD</a></li>
                                    <li><a href="{{ route('research-and-publication-cell') }}"> Research and Publication Cell</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
            <li class="drop-down"><a href="#" ></i> Authority</a>
                <ul class="drop-down-ul animated fadeIn">

                    <li><a href="{{ route('controller') }}"> Controller of Exam.</a></li>
                    <li><a href="{{ route('proctor') }}"> Proctor</a></li>
                    <li><a href="{{ route('students-welfare') }}"> Student Welfare Adviser</a></li>
                    <li><a href="{{ route('registrar') }}"> Registrar</a></li>
                    <li><a href="{{ route('treasurer') }}"> Treasurer</a></li>
                    {{-- <li><a href="{{ route('pro_vc') }}">Pro-Vice-Chancellor </a></li> --}}
                    <li><a href="{{ route('vc') }}">Vice-Chancellor</a></li>
                    <li><a href="{{ route('viceChairman') }}">Vice-Chairman </a></li>
                    <li><a href="{{ route('chairman') }}"> Chairman </a></li>
                </ul>
            </li>


            <li class="mega-drop-down"><a href="#"> Programs</a>
                <div class="animated fadeIn mega-menu">
                    <div class="mega-menu-wrap">
                        <div class="row">
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">ADMISSIONS</h4>
                                <ul>
                                    <li><a href="{{ route('admission-process') }}">Admission Process</a></li>
                                    <li><a href="{{ route('program-fee-structure') }}">Fee Structure</a></li>
                                    <li><a href="{{ route('scholarships') }}">Scholarships</a></li>
                                    <li><a href="https://international.diu.ac" target="_blank">International
                                            Admissions</a></li>
                                    <li><a href="{{ route('admission-help-desk') }}">Admission Help Desk</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">Faculty of Science and Engineering </h4>
                                <ul>
                                    <li><a href="/programs/department-of-civil-engineering" >Department
                                            of Civil Engineering</a></li>

                                    <li><a href="/programs/department-of-eee" >Department of EEE</a></li>
                                    <li><a href="/programs/department-of-cse" >Department of CSE</a></li>
                                    <li><a href="/programs/department-of-pharmacy" >Department of
                                            Pharmacy</a></li>
                                    <li><a href="/programs/department-of-microbiology" >Department of
                                            Microbiology</a></li>
                                    <li><a href="/programs/department-of-biochemistry-and-molecular-biology"
                                           >Department of Biochemistry and Molecular Biology</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">Faculty of Arts and Social Sciences</h4>
                                <ul>
                                    <li><a href="/programs/department-of-english" >Department of
                                            English</a></li>
                                    <li><a href="/programs/department-of-political-science" >Department
                                            of Political Science</a></li>
                                    <li><a href="/programs/department-of-sociology" >Department of
                                            Sociology</a></li>
                                    <li><a href="/programs/department-of-economics" >Department of
                                            Economics</a></li>
                                    <li><a href="/programs/department-of-development-studies" >Department of
                                        Development Studies</a></li>


                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">Faculty of Business Studies</h4>
                                <ul>
                                    <li><a href="/programs/department-of-business-administration"
                                            >Department of Business Administration</a></li>
                                </ul>
                                <h4 class="row mega-title">Faculty of Law</h4>
                                <ul>
                                    <li><a href="/programs/department-of-law" >Department of Law</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="drop-down"><a href="#"></i> Faculty</a>
                <ul class="drop-down-ul animated fadeIn">
                    <li><a href="{{ route('law') }}"> Faculty of Law</a></li>
                    <li><a href="{{ route('business') }}"> Faculty of Business Studies</a></li>
                    <li><a href="{{ route('science') }}"> Faculty of Science and Engineering </a></li>
                    <li><a href="{{ route('arts') }}"> Faculty of Arts and Social Sciences</a></li>
                </ul>
            </li>


            <li class="mega-drop-down"><a href="#"> Campus Life</a>
                <div class="animated fadeIn mega-menu">
                    <div class="mega-menu-wrap">
                        <div class="row">
                            <div class=" col-xl-4 col-md-4 col-sm-12">
                                <h4 class="row mega-title"></h4>
                                <ul>
                                    <li><a href="{{ route('library') }}"> Libray</a></li>
                                    <li><a href="{{ route('lab') }}" target="_blank">Lab</a></li>
                                    <li><a href="{{ route('club') }}">Clubs</a></li>
                                    <li><a href="{{ route('alumni') }}"> Alumni</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-4 col-md-4 col-sm-12">
                                <h4 class="row mega-title"></h4>
                                <ul>
                                    <li><a href="{{ route('academic-session') }}">Academic Session</a></li>
                                    <li><a href="{{ route('health-service') }}">Health Service</a></li>
                                    <li><a href="{{ route('accommodation') }}">Accommodation</a></li>
                                    <li><a href="{{ route('student-welfare') }}">Student’s Welfare</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-4 col-md-4 col-sm-12">
                                <h4 class="row mega-title"></h4>
                                <ul>
                                    <li><a href="{{ route('career-counseling') }}">Career Counseling</a></li>
                                    <li><a href="{{ route('course-counseling') }}">On-Course Counseling</a></li>
                                    <li><a href="{{ route('internet') }}">Wi-Fi and Internet</a></li>
                                    <li><a href="{{ route('canteen') }}">Canteen & Common Rooms</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="drop-down"><a href="#"></i> Community</a>
                <ul class="drop-down-ul animated fadeIn">
                    <li><a href="{{ route('build_partnership') }}"> Build Partnership</a></li>
                    <li><a href="{{ route('engage') }}"> Engage Our Strength</a></li>
                    <li><a href="{{ route('event_and_opportunity') }}">Events & Opportunity</a></li>
                    <li><a href="https://alumni.diu.ac/" target="_blank">Alumni</a></li>
                    <li><a href="{{ route('institute') }}"> Institute</a></li>
                    <li><a href="https://jobs.diu.ac/" target="_blank">Career</a></li>
                </ul>
            </li>

        </ul>
        <a href="#" class="toggle-menu d-block d-lg-none"><i class="fa fa-bars"></i></a>
    </div>
    <script>
        $(function() {
            $('.toggle-menu').click(function() {
                $('.exo-menu').toggleClass('display');

            });

        });



    </script>
    {{-- <script>
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.addEventListener('mouseenter', () => {
                dropdown.querySelector('.dropdown-menu').classList.add('show');
            });

            dropdown.addEventListener('mouseleave', () => {
                dropdown.querySelector('.dropdown-menu').classList.remove('show');
            });
        });
    </script> --}}




</header>
