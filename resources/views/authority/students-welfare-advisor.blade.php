@extends('layouts.master')
@section('content') 

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Student Welfare Adviser</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Authority</li>
                    <li>Student Welfare Adviser</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="demo">
            <div class="container">
                <div class="authority">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_190.jpg" alt="" style="height: 125px">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Mohammad Shah Alam Chowdhury</h2>
                        <span class="post">Professor of English <br> & Additional Registrar (Student Welfare Adviser)</span>
                        <a class="profile" href="https://profile.diu.ac/himu#PersonalInformation" target="_blank"> View
                            Profile</a>
                    </div>
                    <ul class="signature-content">
                        <li><i class="fa fa-phone"></i>  8801716559369</li>
                        <li><i class="fa fa-envelope"></i> shahalam.eng@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt"></i>Information & Admission Office, Permanent Campus: Satarkul, Badda, Dhaka-1212.</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container pt-5">
            <div class="message">
                <h4 class="text-center"><strong> Message From The Adviser of Student Welfare</strong></h4>
                <p class="desc">Dear Students,</p>
                <p class="desc">Welcome to Dhaka International University. We are delighted to have you as part of the DIU family. At the beginning of your academic career, you begin on a promising and hopeful path. The Office of Advisor Student Welfare looks forward to working with you on this amazing journey to take full advantage of the opportunities you will find at this wonderful institution.                   
                    
                   </p>
                    <p class="desc">We strive to meet the needs of all students. We have excellent faculty and caring staff, a beautiful campus, and an atmosphere conducive to your academic goals. We encourage you to join one or more of our student organizations like DIU Debating Organization, Alumni Association, Sports and Cultural Organization, language club of student organization. All of them offer opportunities for leadership development, academic support, networking, personal growth and community service. Our student representatives are involved in Student Government, Fraternity and Sorority Life, Student Orientation Staff, Recreational Sports and the list goes on.</p>
                    <p class="desc"> Walk around campus, ask questions, meet faculty and learn about the university. Study hard, make new friends, get involved and have fun. These are the best times for you. We are here to help you in any way we can. We hope you will reach all of your goals and realize all your dreams.</p>

                    <a class="profile" href="/existing-student-help/students-welfare">Browse Office Personnel</a>
            </div>
        </div>
    </section>
@endsection
