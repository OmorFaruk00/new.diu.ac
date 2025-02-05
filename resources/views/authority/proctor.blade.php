@extends('layouts.master')
@section('content')

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Proctor</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Authority</li>
                    <li>Proctor</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="demo">
            <div class="container">
                <div class="authority">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_257.jpg" alt="" style="height: 125px">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Dr. Sazzad Hossain</h2>
                        <span class="post">Professor, Proctor & Provost</span>
                        <a class="profile" href="https://profile.diu.ac/sazzad.hossain#PersonalInformation" target="_blank"> View
                            Profile</a>
                    </div>
                    <ul class="signature-content">
                        <li><i class="fa fa-phone"></i>8801720557276</li>
                        <li><i class="fa fa-envelope"></i> sazzad.eng@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt"></i>Department of English, Permanent Campus: Satarkul, Badda, Dhaka-1212.</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container pt-5">
            <div class="message">
                <p class="desc">Professor Dr. Sazzad Hossain is the Proctor of Dhaka International University and Provost of all halls. He has been teaching in the Department of English for more than twenty five years. He joined here as a lecturer and by dint of his academic excellence, merit and commitment to the profession, he has overcome all the promotional steps and now he is a professor in the Department of English. He completed his BA (Hons) & MA in English from Dhaka University. He has obtained his PhD degree on Applied Linguistics and ELT from the Department of English, Jahangirnagar University. In recognition of his past academic record and performance, Professor Dr. Sazzad Hossain was promoted as an Assistant Professor in 2004, Senior Assistant Professor in 2006, an Associate Professor in 2010 and finally as a Professor in 2015 respectively. For your kind information, Professor Dr. Sazzad Hossain has written eleven publications and twelve books to his credit. Besides, he has completed two publications and two books on English language and literature which are ready to be published. Professor Dr. Sazzad Hossain is the pioneer and the driving force of the Department of English as he contributed immensely to design the syllabus of English which is still going on in the department, though now it has been revised according to the requirement of BAC. Apart from this, he played an active role as an acting chairman from 1999 to 2006 and later on he acted as a full-fledged chairman from 2006 to 2009. He was the head of SAC (Self Assessment Committee) in the Department of English at Dhaka International University under HEQEP controlled by UGC and funded by World Bank. He also played the role of an advisor in the Department of Pharmacy to promote self-assessment activities. He is the member of the Academic Council and also coordinating CECD (Centre for Excellence and Carrier Development) at DIU.</p>

                    <a class="profile" href="/existing-student-help/proctor-office">Browse Office Personnel</a>
            </div>
        </div>
    </section>
@endsection
