@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Placement Process</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Placement Process</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <img src="assets/img/page-headers/placement-process.png" alt="Placement Process" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Placement <br>Process</h2>
        <p>Connecting the Dots Between <br>Talent and Endless Opportunities</p>
        </div> 
        <div class="container my-4">
            <div class="row">
                <div class="col-12">
                    <p>
                        The Placement department processes at KLH GBS campus can be easily understood
                        by following eight steps as mentioned below. It clearly gives details
                        about the documentation process, data collection against each activity.</p>
                        <table class="table table-bordered">
                    <thead class="bg-info text-white">
                        <tr>
                            <th>S.No</th>
                            <th>Placement Activity</th>
                            <th>Steps involved</th>
                            <th>Documentation Details</th>
                            <th>Data Collection</th>
                        </tr>
                    </thead>
                        <tr>
                            <td rowspan="3">
                                1</td>
                            <td rowspan="3">
                                Database Preparation of Placement companies</td>
                            <td>
                                (1) Allotment of team member</td>
                            <td rowspan="3">
                                Prepare complete details of company name, HR numbers, emails,
                                roles.</td>
                            <td rowspan="3">
                                Creation of database of the companies</td>
                        </tr>
                        <tr>
                            <td>
                                (2) Searching of companies through different sources like
                                LinkedIn, Naukri.com, Fresher’s world, Indeed.com, Internshala &amp; so
                                on.</td>
                        </tr>
                        <tr>
                            <td>
                                (3) From the sites of Peer colleges, training partners database,
                                recruiting databases and contacts.</td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                2</td>
                            <td rowspan="2">
                                Selection of company for campus drive</td>
                            <td>
                                (1) Get consent letters/confirmation mail from recruiters</td>
                            <td rowspan="2">
                                Discussion with recruiter &amp; get confirmation for the placement
                                drive</td>
                            <td rowspan="2">
                                Company turn over, salary package, no of openings, Job
                                Descriptions.</td>
                        </tr>
                        <tr>
                            <td>
                                (2) If new company, schedule meeting &amp; discuss</td>
                        </tr>
                        <tr>
                            <td rowspan="3">
                                3</td>
                            <td rowspan="3">
                                Students Details</td>
                            <td>
                                1) Registration of students for placement by collecting the fees</td>
                            <td rowspan="3">
                                Preparation of database of students like name, ID number, CGPA,
                                Adhaar card number, contact details, etc in Excel sheets</td>
                            <td rowspan="3">
                                Collection of resumes of students.</td>
                        </tr>
                        <tr>
                            <td>
                                (1) Collection of resumes of the students</td>
                        </tr>
                        <tr>
                            <td>
                                (2) Forwarding the resumes to recruiter
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="4">
                                4</td>
                            <td rowspan="4">
                                Finalize campus Drive</td>
                            <td>
                                (1 )Send Invitation mail to recruiter</td>
                            <td rowspan="4">
                                Students should undergo training</td>
                            <td rowspan="4">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                (2) Finalization of drive date by recruiter
                            </td>
                        </tr>
                        <tr>
                            <td>
                                (3) Intimation of drive date &amp; selection process to faculty &amp;
                                students</td>
                        </tr>
                        <tr>
                            <td>
                                (4) Send mail to HOD's/Trainers for providing industry specific
                                training to recruiters</td>
                        </tr>
                        <tr>
                            <td rowspan="5">
                                5</td>
                            <td rowspan="5">
                                Preparations for Campus Drive</td>
                            <td>
                                (1) Taking budget approval for the campus drive</td>
                            <td rowspan="5">
                                Coordination with different persons &amp; vendors for the completion
                                of the required activities</td>
                            <td rowspan="5">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                (2) Arrangement of logistics/lodging/boarding facilities for the
                                recruiters</td>
                        </tr>
                        <tr>
                            <td>
                                (3) Preparation of Banner</td>
                        </tr>
                        <tr>
                            <td>
                                (4) Intimidation to the photographer</td>
                        </tr>
                        <tr>
                            <td>
                                (5) Booking of seminar halls, panel rooms, labs for the interview</td>
                        </tr>


                        <tr>
                            <td rowspan="3">
                                6</td>
                            <td rowspan="3">
                                Conducting campus drive</td>
                            <td>
                                (1) On time start of drive</td>
                            <td>
                                1) Receiving recruiters
                            </td>
                            <td rowspan="3">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                (2) Getting names of shortlisted students</td>
                            <td>
                                (2) Preplacement talk is delivered by recruiters</td>
                        </tr>
                        <tr>
                            <td>
                                (3)Taking recruiter’s feed back</td>
                            <td>
                                (3) Conducting tests, interviews</td>
                        </tr>
                        <tr>
                            <td rowspan="3">
                                7</td>
                            <td rowspan="3">
                                Receive offer letters</td>
                            <td>
                                1) Receive offer letters from recruiters</td>
                            <td rowspan="3">
                                Update excel file with the list of number of selected students
                                against the companies conducted the placement drives</td>
                            <td rowspan="3">
                                Updation of students names by removing the selected students from
                                the list</td>
                        </tr>
                        <tr>
                            <td>
                                (2) Follow up with the students for the acceptance of offer
                                letters</td>
                        </tr>
                        <tr>
                            <td>
                                (3) Remove selected student name from placement database</td>
                        </tr>
                        <tr>
                            <td rowspan="2">
                                8</td>
                            <td rowspan="2">
                                Gap Analysis review</td>
                            <td>
                                1) Prepare gap analysis report</td>
                            <td rowspan="2">
                                Preparing gap analysis report from recruiter’s feed back.</td>
                            <td rowspan="2">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                (2) Send gap analysis report to Board of Academic council</td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </section>

</main>
@endsection