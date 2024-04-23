<style>
    
    body {
        margin: 0;
        padding: 0;
        font: 300 14px/18px Roboto;
        background-image: url('../images/texture.png');
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
        color: #009FE1;
    }

    h4.row.mega-title {
        color: #000;
        margin-top: 0px;
        font-size: 14px;
        padding-left: 15px;
        padding-bottom: 13px;
        text-transform: uppercase;
    }

    /*mega menu*/
    .mega-menu {
        left: 0;
        right: 0;
        padding: 15px;
        display: none;
        padding-top: 0;
        min-height: 100%;

    }

    h4.row.mega-title {
        color: #D48231;
        margin-top: 0px;
        font-size: 18px;
        font-weight: 600;
        padding-left: 15px;
        padding-bottom: 13px;
        text-transform: uppercase;
        padding-top: 15px;
    }

    .mega-menu ul li a {
        line-height: 35px;
        font-size: 17px;
        display: block;
        color: #000;
        font-weight: 400;
    }

    .mega-menu ul li a:hover {
        color: #009FE1
    }

    /*common*/
    .mega-menu {
        background-color: #fff;
        color: #000;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }


    .mega-menu:hover,
    .drop-down-ul:hover,
    .mega-drop-down a:hover+.mega-menu,
    li.flyout-mega>a:hover+.flyout-mega-wrap {
        display: block;

    }

    .logo {
        float: left;
        margin-right: 20px;
        margin-right: 25% !important;
    }

    .logo img {
        height: 50px;
        margin-top: 10px;
    }


    /*responsive*/

    @media (min-width:767px) {
        .exo-menu>li>a {
            display: block;
            padding: 20px 22px;
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

    @media (max-width:767px) {

        .exo-menu {
            min-height: 58px;
            background-color: #fff;
            width: 100%;
        }

        .exo-menu>li>a {
            width: 100%;
            display: none;

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
        height: 75px;
    }

    @media (max-width: 992px) {
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

<header id="header" class="fixed-top">

    <div class="container">
        <ul class="exo-menu">
            <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/images/logo.png') }}"
                    alt="DIU Logo"></a>
            <li class="mega-drop-down"><a href="#"> ABOUT<img src="{{ asset('/assets/img/down-arow.png') }}"
                        alt="" style="margin-bottom: 2px;height:20px"></a>
                <div class="animated fadeIn mega-menu">
                    <div class="mega-menu-wrap">
                        <div class="row">

                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">ABOUT US</h4>
                                <ul>
                                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                                    {{-- <li><a href="{{ route('why-diu') }}">Why Choose DIU</a></li> --}}
                                    <li><a href="{{ route('vision-mission') }}">Vision and Mission</a></li>
                                    <li><a href="{{ route('board-of-management') }}">Board of Management</a></li>

                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">ABOUT US</h4>
                                <ul>
                                    <li><a href="{{ route('student-facilities') }}">Student Facilities</a></li>
                                    <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                    <li><a href="https://iqac.diu.ac" target="_blank">IQAC</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">ABOUT US</h4>
                                <ul>
                                    <li><a href="{{ route('alumni') }}"> Alumni</a></li>
                                    <li><a href="{{ route('institute') }}"> Institute</a></li>
                                    <li><a href="{{ route('cell') }}"> Cell</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">ABOUT US</h4>
                                <ul>
                                    <li><a href="http://koha.diu.ac.bd" target="_blank">Library</a></li>
                                    <li><a href="{{ route('club') }}">Clubs</a></li>
                                    <li><a href="https://jobs.diu.ac/" target="_blank">Career</a></li>
                                </ul>
                            </div>




                        </div>
                    </div>
                </div>
            </li>
            <li class="mega-drop-down"><a href="#"> Study<img src="{{ asset('/assets/img/down-arow.png') }}"
                        alt="" style="margin-bottom: 2px;height:20px"></a>
                <div class="animated fadeIn mega-menu">
                    <div class="mega-menu-wrap">
                        <div class="row">

                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">ADMISSIONS</h4>
                                <ul>
                                    <li><a href="{{ route('admission-process') }}">Admission Process</a></li>
                                    <li><a href="{{ route('program-fee-structure') }}">Fee Structure</a></li>
                                    <li><a href="https://international.diu.ac" target="_blank">International
                                            Admissions</a></li>
                                    <li><a href="{{ route('scholarships') }}">Scholarships</a></li>
                                    <li><a href="{{ route('admission-help-desk') }}">Admission Help Desk</a></li>
                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">ACADEMICS</h4>
                                <ul>
                                    <li><a href="{{ route('faculty') }}">Faculty</a></li>
                                    <li><a href="{{ route('workshop-seminars') }}">Workshop & Seminars</a></li>
                                    <li><a href="{{ route('convocation') }}">Convocation</a></li>
                                    <li><a href="{{ route('publications') }}">Publications</a></li>
                                    <li><a href="{{ route('certificate-verification') }}">Certificate Verifications</a>
                                    </li>
                                    <li><a href="https://students.diu.ac/" target="_blank">Students Portal </a></li>

                                </ul>
                            </div>

                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">Programs</h4>
                                <ul>
                                    <li><a href="/programs/department-of-business-administration"
                                            target="_blank">Department of Business Administration</a></li>
                                    <li><a href="/programs/department-of-english" target="_blank">Department of
                                            English</a></li>
                                    <li><a href="/programs/department-of-eee" target="_blank">Department of EEE</a></li>
                                    <li><a href="/programs/department-of-law" target="_blank">Department of Law</a></li>
                                    <li><a href="/programs/department-of-pharmacy" target="_blank">Department of
                                            Pharmacy</a></li>

                                    <li><a href="/programs/department-of-biochemistry-and-molecular-biology"
                                            target="_blank">Department of Biochemistry and Molecular Biology</a></li>


                                </ul>
                            </div>
                            <div class=" col-xl-3 col-md-3 col-sm-12">
                                <h4 class="row mega-title">Programs</h4>
                                <ul>
                                    <li><a href="/programs/department-of-cse" target="_blank">Department of CSE</a></li>
                                    <li><a href="/programs/department-of-civil-engineering" target="_blank">Department
                                            of Civil Engineering</a></li>
                                    <li><a href="/programs/department-of-sociology" target="_blank">Department of
                                            Sociology</a></li>
                                    <li><a href="/programs/department-of-political-science" target="_blank">Department
                                            of Political Science</a></li>
                                    <li><a href="/programs/department-of-economics" target="_blank">Department of
                                            Economics</a></li>
                                    <li><a href="/programs/department-of-microbiology" target="_blank">Department of
                                            Microbiology</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a href="{{ route('notice-board') }}">Notice Board</a></li>
            <li><a href="{{ route('contact') }}"><span>CONTACT</span></a>

        </ul>
        <a href="#" class="toggle-menu d-block d-lg-none d-md-none"><i class="fa fa-bars"></i></a>
    </div>
    <script>
        $(function() {
            $('.toggle-menu').click(function() {
                $('.exo-menu').toggleClass('display');

            });

        });
    </script>
</header>
