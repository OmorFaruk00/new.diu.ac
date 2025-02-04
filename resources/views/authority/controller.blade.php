@extends('layouts.master')
@section('content') 

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Controller </h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Authority</li>
                    <li>Controller </li>
                </ol>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="demo">
            <div class="container">
                <div class="authority">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_57.jpg" alt="" style="height: 125px">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Md. Abu Tareque</h2>
                        <span class="post">Controller of Examinations</span>
                        <a class="profile" href="https://profile.diu.ac/mdabutareque#PersonalInformation" target="_blank"> View
                            Profile</a>
                    </div>
                    <ul class="signature-content">
                        <li><i class="fa fa-phone"></i>8801712668246</li>
                        <li><i class="fa fa-envelope"></i> controller@diu.ac, tareque@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt"></i>Office of the Vice-Chancellor, Permanent Campus: Satarkul, Badda, Dhaka-1212.</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container pt-5">
            <div class="message">
                <p class="desc">The Controller's Office always stays connected with examinational activities either for Mid-term/Final Exams or for Improvement Exams through online. It plays a pivotal role in preserving the exam records of the students' academic results and delivering certificates (main, provisional and transcript) etc. for the passing out of the students of different faculties. But in the ease of students' urgency, a partial normal transcript is issued for them. So, the office is regarded as the soul of the university for which it is confidential and sensitive. The holding of any convocations and informative data required by another office depend solely on this office. Examination records are in safe keeping from the inception of the university. The officers of the Controller Office are fully committed to fulfilling the requnements of the students. </p>

                <p class="desc">
                    Last but not the least, another service app for apostille under Hague Convention has been introduced recently. by the government of Bangladesh and embodied by UGC in the Controller Office of the university for the verification of academic certificates for those students who are willing to go abroad for higher studies.
                </p>
                    <a class="profile" href="/existing-student-help/controller-office">Browse Office Personnel</a>
            </div>
        </div>
    </section>
@endsection
