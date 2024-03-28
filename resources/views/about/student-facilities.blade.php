@extends('layouts.master')
@section('content')
<style>
    :root{ --main-color: #FCAC03; }
.main-timeline{ font-family: 'Poppins', sans-serif; }
.main-timeline:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline .timeline{
    width: 50%;
    margin: 0 5px 25px 0;
    float: left;
}
.main-timeline .timeline-content{
    color: #999;
    text-align: right;
    min-height: 100px;
    border-bottom: 5px solid var(--main-color);
    display: block;
}
.main-timeline .timeline-content:hover{ text-decoration: none; }
.main-timeline .title{
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
.main-timeline .description{
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
.main-timeline .timeline:nth-child(even){
    margin: 0 0 25px 5px;
    float: right;
}
.main-timeline .timeline:nth-child(even) .timeline-content{
    text-align: left;
    border-color: var(--main-color);
}
.main-timeline .timeline:nth-child(even) .title{
    padding: 12px 35px 12px 20px;
    border-radius: 0 25px 0 0;
}
.main-timeline .timeline:nth-child(2){ --main-color: #7E64A5; }
.main-timeline .timeline:nth-child(3){ --main-color: #f47711; }
.main-timeline .timeline:nth-child(4){ --main-color: #2cb257; }
.main-timeline .timeline:nth-child(5){ --main-color: #49B5E7; }
.main-timeline .timeline:nth-child(6){ --main-color: #4C79DC; }
@media screen and (max-width:767px){
    .main-timeline .timeline,
    .main-timeline .timeline:nth-child(even){
        width: 100%;
        margin: 0 0 25px;
    }
}
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Student Facilities</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Student Facilities</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <section class="inner-page internship">
        <img src="assets/images/Student-facilities.png" alt="Student facilities" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Student
            <br> Facilities</h2>
            <p>Excel in Your Career with Our <br> Impeccable Campus Placements</p>
        </div> 

        <div class="container my-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline">
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <h3 class="title">Academic Session</h3>
                                <p class="description">
                                    The Academic year is mainly divided into three semesters. Each semester consists of 18 weeks including examinations. Dhaka International University (DIU) has its own Holiday list.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <h3 class="title">Health Service</h3>
                                <p class="description">
                                    Dhaka international University has health services department . Doctors are available in all campuses . They consult the students with their health related problems.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <h3 class="title">Accommodation</h3>
                                <p class="description">
                                    DIU officers well-decorated hotels with modern facilities. At present there are six boys hostel and one girls' hostel.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <h3 class="title">Student’s Welfare</h3>
                                <p class="description">
                                    Dhaka international University is committed to serve the students. As per private university act - 2010, DIU authority has appointed a student welfare adviser. Student welfare adviser conselts with the students regarding their problems and solv the problems.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <h3 class="title">Career Counseling</h3>
                                <p class="description">
                                    DIU has its career counseling department. An institute has been set up. The name of the instituted is Center for Excellence and Career Development. CECD organizes career related seminar, workshop and job fair for the students.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <h3 class="title">On-Course Counseling</h3>
                                <p class="description">
                                    Every teachers of Dhaka international University has allocated their time in their daily class routin for on cours counciling for students. Students get benefite form ther on-cours counseling. It is compulsary for all teachers to allocate time for the students.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                 
                    <h2 class="text-center my-5">Student Facilities</h2>

                    <ul>
                    <li>Transport</li>
                    <li>Canteen</li>
                    <li>Sports-Indoor/ Outdoor</li>
                    <li>Free WIFI </li>
                    <li>AC Classrooms</li>
                    <li>Hostel Facility</li>
                    <li>Information Center</li>
                    <li>Seminar Hall</li>
                    <li>Conference Halls </li>
                    <li>Guest House</li>
                    <li>Avenue Plantation</li>
                    <li>Generators</li>
                    <li>Social Spaces</li>
                    <li>Health Care Center</li>
                    <li>LCD projector/Multi-media Computers/ Audio System/ Still Camera/ Video Player</li>
                    <li>Audio Visual Room</li>
                    <li>Gym (Upcoming)</li>

                    </ul>
                </div>
            </div> --}}
        </div>
    </section>

</main><!-- End #main -->


@endsection