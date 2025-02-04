@extends('layouts.master')
@section('content') 

    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Registrar</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Authority</li>
                    <li>Registrar</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="demo">
            <div class="container">
                <div class="authority">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_186.jpg" alt="" style="height: 125px">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Md. Rofiqul Islam</h2>
                        <span class="post">Professor & Registrar</span>
                        <a class="profile" href="https://profile.diu.ac/md.rofiqul.islam#PersonalInformation" target="_blank"> View
                            Profile</a>
                    </div>
                    <ul class="signature-content">
                        <li><i class="fa fa-phone"></i>  8801819163047</li>
                        <li><i class="fa fa-envelope"></i> registrar@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt"></i>Office of the Registrar, Permanent Campus: Satarkul, Badda, Dhaka-1212.</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container pt-5">
            <div class="message">
                <p class="desc">The Registrar’s Office serves as the hub of all academic activities of Dhaka International University and promotes integrity through service. It is the first contact point for the enrolled students with all their queries and issues. Their problems are resolved either directly by this office or by forwarding them to the concerned offices after consultation with the students. All student records are regularly maintained, updated, and verified by this office. Scheduling classes and updating the academic calendar fall under the purview of this office. The Registrar’s Office is actively involved in organizing orientation and convocation programs of the university. It provides support in organizing other programs of interest as required. It arranges various important meetings of the university such as syndicate meetings and academic council meetings, and keeps records of those meetings. The office is responsible for channeling major university notifications to the students and faculty members. It works as the first contact point for the external stakeholders and does everything necessary to fulfill their requirements. The office is run by a team headed by the Registrar and Additional Registrar. 

                </p>
                <a class="profile" href="/existing-student-help/registrar-office">Browse Office Personnel</a>

                {{-- <h3>Registrar</h3> --}}
            </div>
        </div>
    </section>
@endsection
