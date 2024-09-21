@extends('layouts.master')
@section('content')
    <style>
        .authority {
            background: linear-gradient(80deg, #DDDDDD, #DDDDDD);
            font-family: 'Poppins', sans-serif;
            font-size: 0;
            padding: 40px 20px 60px;
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .authority:after {
            content: '';
            background-color: #2C3137;
            height: 30px;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .authority .signature-icon {
            color: #fff;
            background: #5bc908;
            font-size: 55px;
            text-align: center;
            line-height: 105px;
            width: 160px;
            height: 160px;
            padding: 18px;
            border-radius: 50%;
            box-shadow: 0 0 0 25px #e7e7e7;
            transform: translateY(-50%) translateX(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 1;
        }

        .authority .signature-icon img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .authority .signature-details {
            text-align: center;
            width: 50%;
            padding-right: 120px;
            vertical-align: top;
            display: inline-block;
        }

        .authority .title {
            color: #111;
            font-size: 24px;
            font-weight: 700;
            text-transform: capitalize;
            margin: 0;
        }

        .authority .title span {
            color: #5bc908;
        }

        .authority .post {
            color: #838383 !important;
            font-weight: 600;
            font-size: 18px;
            text-transform: capitalize;
            margin: 10px 0 7px;
            display: block;
        }

       .profile {
            color: #5bc908;
            font-weight: 600;
            font-size: 16px;
            text-transform: capitalize;
            margin: 10px 0 7px;
            display: block;
        }

       .profile:hover {
            color: #2EAA4D;

        }

        .authority .signature-content {
            width: 50%;
            padding: 0 0 0 140px;
            margin: 0;
            list-style: none;
            display: inline-block;
        }

        .authority .signature-content li {
            color: #333;
            font-size: 12px;
            font-weight: 500;
            padding: 2px 0 2px 25px;
            margin: 0 0 12px;
            position: relative;
        }

        .authority .signature-content li:last-child {
            margin-bottom: 0;
        }

        .authority .signature-content li i {
            color: #111;
            background-color: #5bc908;
            font-size: 14px;
            text-align: center;
            line-height: 20px;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            transform: translateY(-50%);
            position: absolute;
            left: 0;
            top: 50%;
        }

        .message {
            background: linear-gradient(80deg, #DDDDDD, #DDDDDD);
            font-family: 'Poppins', sans-serif;
            padding: 40px 20px 60px;
            box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.3);
            position: relative;

        }

        .message:after {
            content: '';
            background-color: #2C3137;
            height: 30px;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .message .desc {
            color: #838383 !important;
            font-size: 16px;
            line-height: 25px;
            text-align: justify
        }

        .message h3 {
            font-size: 18px;
            font-weight: bold;
            color: #313131;
        }

        @media screen and (max-width:767px) {
            .authority {
                width: 95%;
                padding: 20px 20px 45px;
                margin: 0 auto;
            }
            .message {
                width: 95%;
                padding: 20px 20px 45px;
                margin: 0 auto;
            }

            .authority .signature-icon {
                box-shadow: 0 0 0 10px #e7e7e7;
                transform: translateX(-50%) translateY(0);
                top: 125px;
                left: 50%;
            }

            .authority .signature-details,
            .authority .signature-content {
                text-align: center;
                width: 100%;
                padding: 0;
            }

            .authority .signature-details {
                margin: 0 0 200px;
            }
         

            .authority .signature-content li {
                padding: 0;
                margin: 0 0 10px;
            }

            .authority .signature-content li i {
                position: relative;
                transform: translateY(0);
            }
        }
    </style>

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
                        <span class="post">Registrar</span>
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
                <a class="profile" href="{{route('registerOffice')}}">Browse Office Personnel</a>

                {{-- <h3>Registrar</h3> --}}
            </div>
        </div>
    </section>
@endsection
