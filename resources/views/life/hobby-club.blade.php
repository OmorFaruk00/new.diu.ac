@extends('layouts.master')
@section('content')
<style>
  .club-heading{
    position: relative;
    text-transform: uppercase;
    display: inline-block; 
    margin-bottom: 40px;
    font-weight: 800;
}


.club-heading:after {
    content: "";
    position: absolute;
    left: 50%; 
    bottom: -10px;
    height: 3px;
    width: 70px;
    background: #1474B5;
    transform: translateX(-50%); 
}
    :root{ --main-color: #FCAC03; }
.main-club{ font-family: 'Poppins', sans-serif; }
.main-club:after{
    content: '';
    display: block;
    clear: both;
}
.main-club .club{
    width: 50%;
    margin: 0 5px 25px 0;
    float: left;
}
.main-club .club-content{
    color: #999;
    text-align: right;
    min-height: 100px;
    border-bottom: 5px solid var(--main-color);
    display: block;
}
.main-club .club-content:hover{ text-decoration: none; }
.main-club .title{
    color: #fff;
    background-color: var(--main-color);
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 12px 20px 12px 35px;
    margin: 0;
    border-radius: 25px 0 0 0;
    display: inline-block;
}
.main-club .description{
    color: #444;
    background: linear-gradient(#f5f5f5,#eee);
    font-size: 15px;
    font-weight: 500;
    line-height: 22px;
    text-align: left;
    letter-spacing: 0.5px;
    padding: 25px;
    margin: 0;
    text-align: justify
}
.main-club .club:nth-child(even){
    margin: 0 0 25px 5px;
    float: right;
}
.main-club .club:nth-child(even) .club-content{
    text-align: left;
    border-color: var(--main-color);
}
.main-club .club:nth-child(even) .title{
    padding: 12px 35px 12px 20px;
    border-radius: 0 25px 0 0;
}
.main-club .club:nth-child(2){ --main-color: #7E64A5; }
.main-club .club:nth-child(3){ --main-color: #f47711; }
.main-club .club:nth-child(4){ --main-color: #2cb257; }
.main-club .club:nth-child(5){ --main-color: #49B5E7; }
.main-club .club:nth-child(6){ --main-color: #4C79DC; }
@media screen and (max-width:767px){
    .main-club .club,
    .main-club .club:nth-child(even){
        width: 100%;
        margin: 0 0 25px;
    }
}
</style>
<main id="main" style="margin-top: 80px;">
    
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;"> Clubs</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li> Clubs</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page internship">    

    <div class=" text-center py-4">
        <h3 class="club-heading ">WELCOME TO OUR CLUB</h3>
        <p>Dhaka International University has formally formed different separate clubs for development of student . The following clubs are run successfully by the students and teachers.</p>
    </div>

               </section>
               <section class="hobby">
                <div class="container my-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-club">
                                <div class="club">
                                    <a href="#" class="club-content">
                                        <h3 class="title">Debating Club</h3>
                                        <p class="description">
                                            Dhaka International University has formed Dhaka international University debating society for the development of the students .DIUDS has glorious background .DIUDS has achived first position in several times at the national debate competition .
                                        </p>
                                    </a>
                                </div>
                                <div class="club">
                                    <a href="#" class="club-content">
                                        <h3 class="title">Computer Programming Club</h3>
                                        <p class="description">
                                            Dhaka International University Computer and Programming Club is the largest club and one of the prestigious clubs in the university. In short, this club is named DIU CPC. We work together as a family to enlighten students knowledge in every field of computer science.
                                        </p>
                                    </a>
                                </div>
                                <div class="club">
                                    <a href="#" class="club-content">
                                        <h3 class="title">Cultural Club</h3>
                                        <p class="description">
                                            Dhaka International University has formd DIU cultural club. Cultural club ogranizes cultural competiton for the students. Cultural club also organizes seminer and workshops related to cultural affairs for the students. Cultural club team members participate in different national and internationl cultural competition.
                                        </p>
                                    </a>
                                </div>
                                <div class="club">
                                    <a href="#" class="club-content">
                                        <h3 class="title">Sports Club</h3>
                                        <p class="description">
                                            Dhaka International University sports clb organizes different sports competetion for the students every year. Sports club team members participate in different national and internationl Sports competition.
                                        </p>
                                    </a>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                  
        </div>
    </section>

    


</main>
@endsection