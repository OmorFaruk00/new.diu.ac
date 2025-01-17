<style>
    body{
	margin: 0;
	padding: 0;
	font: 300 14px/18px Roboto;
	background-image: url('../images/texture.png');
 }
  

 *,
:after,
:before {
  box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
  content: '';
  display: table
}

.clearfix:after {
  clear: both;
  display: block
}
ul{
	list-style:none;
	margin: 0;
	padding: 0;
}
a, a:hover, a.active, a:active, a:visited, a:focus{
	color:#fefefe;
	text-decoration:none;
}
.content{
	margin: 50px 100px 0px 100px;
}

.exo-menu{
	width: 100%;
	float: left;
	list-style: none;
	position:relative;
	background: #fff;
}
.exo-menu > li {	display: inline-block;float:left;}
.exo-menu > li > a{
	color: #000;
	text-decoration: none;
	text-transform: uppercase;
	-webkit-transition: color 0.2s linear, background 0.2s linear;
	-moz-transition: color 0.2s linear, background 0.2s linear;
	-o-transition: color 0.2s linear, background 0.2s linear;
	transition: color 0.2s linear, background 0.2s linear;
}
.exo-menu > li > a.active,
.exo-menu > li > a:hover,
li.drop-down ul > li > a:hover{
	background:#009FE1;
	color:#fff;
}
.exo-menu i {
  float: left;
  font-size: 18px;
  margin-right: 6px;
  line-height: 20px !important;
}
li.drop-down,
.flyout-right,
.flyout-left{position:relative;}
li.drop-down:before {
  content: "\f103";
  color: #000;
  font-family: FontAwesome;
  font-style: normal;
  display: inline;
  position: absolute;
  right: 6px;
  top: 20px;
  font-size: 14px;
}
li.drop-down>ul{
	left: 0px;
	min-width: 230px;

}
.drop-down-ul{display:none;}
.flyout-right>ul,
.flyout-left>ul{
  top: 0;
  min-width: 230px;
  display: none;
  border-left: 1px solid #365670;
  }

li.drop-down>ul>li>a,
.flyout-right ul>li>a ,
.flyout-left ul>li>a {
	color: #000;
	display: block;
	padding: 20px 22px;
	text-decoration: none;
	background-color: #fff;
	border-bottom: 1px dotted #547787;
	-webkit-transition: color 0.2s linear, background 0.2s linear;
	-moz-transition: color 0.2s linear, background 0.2s linear;
	-o-transition: color 0.2s linear, background 0.2s linear;
	transition: color 0.2s linear, background 0.2s linear;
}



/*Flyout Mega*/
.flyout-mega-wrap {
	top: 0;
	right: 0;
	left: 100%;
	width: 100%;
	display:none;
	height: 100%;
	padding: 15px;
	min-width: 742px;

}
h4.row.mega-title {
  color:#eee;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid #ccc;
 }
.flyout-mega ul > li > a {
  font-size: 90%;
  line-height: 25px;
  color: #fff;
  font-family: inherit;
}
.flyout-mega ul > li > a:hover,
.flyout-mega ul > li > a:active,
.flyout-mega ul > li > a:focus{
  text-decoration: none;
  background-color: transparent !important;
  color: #ccc !important
}
/*mega menu*/

.mega-menu {
  left: 0;
  right: 0;
  padding: 15px;
  display:none;
  padding-top: 0;
  min-height: 100%;

}
h4.row.mega-title {
  color: #000;
  margin-top: 0px;
  font-size: 14px;
  padding-left: 15px;
  padding-bottom: 13px;
  text-transform: uppercase;
  border-bottom: 1px solid #547787;
  padding-top: 15px;
  background-color: #fff
  }
 .mega-menu ul li a {
  line-height: 25px;
  font-size: 90%;
  display: block;
}
ul.stander li a {
    padding: 3px 0px;
}

ul.description li {
    padding-bottom: 12px;
    line-height: 8px;
}

ul.description li span {
    color: #ccc;
    font-size: 85%;
}
a.view-more{
  border-radius: 1px;
  margin-top:15px;
  background-color: #009FE1;
  padding: 2px 10px !important;
  line-height: 21px !important;
  display: inline-block !important;
}
a.view-more:hover{
	color:#fff;
	background:#0DADEF;
}
ul.icon-des li a i {
    color: #fff;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    text-align: center;
    background-color: #009FE1;
    line-height: 35px !important;
}

ul.icon-des li {
    width: 100%;
    display: table;
    margin-bottom: 11px;
}

/*common*/
.flyout-right ul>li>a ,
.flyout-left ul>li>a,
.flyout-mega-wrap,
.mega-menu{
	background-color: #fff;
}

/*hover*/
.Blog:hover,
.Images:hover,
.mega-menu:hover,
.drop-down-ul:hover,
li.flyout-left>ul:hover,
li.flyout-right>ul:hover,
.flyout-mega-wrap:hover,
li.flyout-left a:hover +ul,
li.flyout-right a:hover +ul,
.blog-drop-down >a:hover+.Blog,
li.drop-down>a:hover +.drop-down-ul,
.images-drop-down>a:hover +.Images,
.mega-drop-down a:hover+.mega-menu,
li.flyout-mega>a:hover +.flyout-mega-wrap{
	display:block;
}
/*responsive*/
 @media (min-width:767px){
	.exo-menu > li > a{
	display:block;
	padding: 20px 22px;
 }
.mega-menu, .flyout-mega-wrap, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:absolute;
}
 .flyout-right>ul{
	left: 100%;
	}
	.flyout-left>ul{
	right: 100%;
}
 }
@media (max-width:767px){

	.exo-menu {
		min-height: 58px;
		background-color: #23364B;
		width: 100%;
	}
	
	.exo-menu > li > a{
		width:100% ;
	    display:none ;
	
	}
	.exo-menu > li{
		width:100%;
	}
	.display.exo-menu > li > a{
	  display:block ;
	  	padding: 20px 22px;
	}
	
.mega-menu, .Images, .Blog,.flyout-right>ul,
.flyout-left>ul, li.drop-down>ul{
		position:relative;
}

}
a.toggle-menu{
    position: absolute;
    right: 0px;
    padding: 20px;
    font-size: 27px;
    background-color: #ccc;
    color: #23364B;
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
.visit-my-blog {
    background: #379fe1;
}

.logo {
        float: left;
        margin-right: 20px;
        margin-right: 25% !important;
    }

    .logo img {
        height: 50px;
        margin-top: 2px;
    }
</style>




</head>

<body class="background">
	 <div class="content">
        <div class="container">
	 
		<ul class="exo-menu">
			<ul class="exo-menu">
           
                <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/images/logo.png') }}"
                        alt="DIU Logo"></a>
    
                        
                        <li class="drop-down"><a href="#"></i> Flyout</a>
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
                            <!--//End drop down-->
                        
                        </li>
                     
                <li class="mega-drop-down"><a href="#"> DIU<img src="{{ asset('/assets/img/down-arow.png') }}"
                            alt="" style="margin-bottom: 2px;height:20px"></a>
                    <div class="animated fadeIn mega-menu">
                        <div class="mega-menu-wrap">
                            <div class="row">
    
                                <div class=" col-xl-4 col-md-4 col-sm-12">
                                    <h4 class="row mega-title">ABOUT US</h4>
                                    <ul>
                                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                                        {{-- <li><a href="{{ route('why-diu') }}">Why Choose DIU</a></li> --}}
                                        <li><a href="{{ route('vision-mission') }}">Vision and Mission</a></li>
                                        <li><a href="{{ route('board-of-management') }}">Board of Management</a></li>
                                        <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                        {{-- <li><a href="{{ route('student-facilities') }}">Student Facilities</a></li> --}}
    
    
                                    </ul>
                                </div>
    
                                <div class=" col-xl-4 col-md-4 col-sm-12">
                                    <h4 class="row mega-title">Research Cell</h4>
                                    <ul>
                                        {{-- <li><a href="http://koha.diu.ac.bd" target="_blank">Library</a></li> --}}
                                        <li><a href="{{ route('iqac') }}"> IQAC</a></li>
                                        <li><a href="{{ route('tcrc') }}"> TCRC</a></li>
                                        <li><a href="{{ route('sbac') }}"> SBAC</a></li>
                                        <li><a href="{{ route('cecd') }}"> CECD</a></li>
    
                                        {{-- <li><a href="https://iqac.diu.ac" target="_blank">IQAC</a></li> --}}
    
                                    </ul>
                                </div>
                                <div class=" col-xl-4 col-md-4 col-sm-12">
                                    <h4 class="row mega-title">ACADEMICS</h4>
                                    <ul>
                                        <li><a href="{{ route('faculty') }}">Faculty List</a></li>
                                        {{-- <li><a href="{{ route('workshop-seminars') }}">Workshop & Seminars</a></li> --}}
                                        <li><a href="{{ route('convocation') }}">Convocation</a></li>
                                        <li><a href="{{ route('publications') }}">Publications</a></li>
                                        <li><a href="{{ route('certificate-verification') }}">Certificate Verifications</a>
                                        </li>
                                        {{-- <li><a href="https://students.diu.ac/" target="_blank">Students Portal </a></li> --}}
    
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
                                        <li><a href="{{ route('scholarships') }}">Scholarships</a></li>
                                        <li><a href="https://international.diu.ac" target="_blank">International
                                                Admissions</a></li>
                                        <li><a href="{{ route('admission-help-desk') }}">Admission Help Desk</a></li>
                                    </ul>
                                </div>
    
                                <div class=" col-xl-3 col-md-3 col-sm-12">
                                    <h4 class="row mega-title">Programs</h4>
                                    <ul>
    
                                        <li><a href="/programs/department-of-english" target="_blank">Department of
                                                English</a></li>
                                        <li><a href="/programs/department-of-law" target="_blank">Department of Law</a></li>
                                        <li><a href="/programs/department-of-sociology" target="_blank">Department of
                                                Sociology</a></li>
                                        <li><a href="/programs/department-of-business-administration"
                                                target="_blank">Department of Business Administration</a></li>
    
    
                                    </ul>
                                </div>
                                <div class=" col-xl-3 col-md-3 col-sm-12">
                                    <h4 class="row mega-title">Programs</h4>
                                    <ul>
                                        <li><a href="/programs/department-of-pharmacy" target="_blank">Department of
                                                Pharmacy</a></li>
                                        <li><a href="/programs/department-of-eee" target="_blank">Department of EEE</a></li>
    
    
                                        <li><a href="/programs/department-of-cse" target="_blank">Department of CSE</a></li>
                                        <li><a href="/programs/department-of-civil-engineering" target="_blank">Department
                                                of Civil Engineering</a></li>
    
    
                                    </ul>
                                </div>
                                <div class=" col-xl-3 col-md-3 col-sm-12">
                                    <h4 class="row mega-title">Programs</h4>
                                    <ul>
    
                                        <li><a href="/programs/department-of-political-science" target="_blank">Department
                                                of Political Science</a></li>
                                        <li><a href="/programs/department-of-economics" target="_blank">Department of
                                                Economics</a></li>
                                        <li><a href="/programs/department-of-microbiology" target="_blank">Department of
                                                Microbiology</a></li>
                                        <li><a href="/programs/department-of-biochemistry-and-molecular-biology"
                                                target="_blank">Department of Biochemistry and Molecular Biology</a></li>
    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- <li><a href="{{ route('notice-board') }}">Notice Board</a></li> --}}
                <li class="mega-drop-down"><a href="#"> Campus Life<img
                            src="{{ asset('/assets/img/down-arow.png') }}" alt=""
                            style="margin-bottom: 2px;height:20px"></a>
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
                <li class="mega-drop-down"><a href="#"> Community<img
                            src="{{ asset('/assets/img/down-arow.png') }}" alt=""
                            style="margin-bottom: 2px;height:20px"></a>
                    <div class="animated fadeIn mega-menu">
                        <div class="mega-menu-wrap">
                            <div class="row">
    
    
    
                                <div class=" col-xl-4 col-md-4 col-sm-12">
                                    <h4 class="row mega-title"></h4>
                                    <ul>
                                        <li><a href="#"> Build Partnership</a></li>
                                        <li><a href="#"> Engage On Strength</a></li>
    
                                    </ul>
                                </div>
                                <div class=" col-xl-4 col-md-4 col-sm-12">
                                    <h4 class="row mega-title"></h4>
                                    <ul>
                                        <li><a href="#">Events & Opportunity</a></li>
                                        <li><a href="#">Alumni</a></li>
    
                                    </ul>
                                </div>
                                <div class=" col-xl-4 col-md-4 col-sm-12">
                                    <h4 class="row mega-title"></h4>
                                    <ul>
                                        <li><a href="{{ route('institute') }}"> Institute</a></li>
                                        <li><a href="https://jobs.diu.ac/" target="_blank">Career</a></li>
    
    
                                    </ul>
                                </div>
    
    
    
    
    
                            </div>
                        </div>
                    </div>
                </li>
                {{-- <li><a href="{{ route('contact') }}"><span>CONTACT</span></a> --}}
    
            </ul>
            <a href="#" class="toggle-menu d-block d-lg-none d-md-none"><i class="fa fa-bars"></i></a>
				
	</ul>
        </div>
	 
	 
	 </div>
     <script>
        $(function () {
 $('.toggle-menu').click(function(){
	$('.exo-menu').toggleClass('display');
	
 });
 
});

     </script>
	 

