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

        .message p {
            color: #838383 !important;
            font-weight: 500;
            /* color: #333 !important; */
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
                <h1 style="text-transform: uppercase">Vice-Chancellor</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Authority</li>
                    <li>Vc</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="py-4">
        <div class="demo">
            <div class="container">
                <div class="authority">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_786.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Professor Dr. Saiful Islam </h2>
                        <span class="post">Vice-Chancellor</span>
                        <a class="profile" href="https://profile.diu.ac/sislamk#PersonalInformation" target="_blank"> View
                            Profile</a>
                    </div>
                    <ul class="signature-content">
                        <li><i class="fa fa-phone"></i> 01925694215</li>
                        <li><i class="fa fa-envelope"></i> sislamk@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt"></i> Office of the Vice-Chancellor, Satarkul, Badda,
                            Dhaka-1212.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container py-4">
            <div class="message">
                <h3 class="text-center">BScEngg Electrical (BUET), MScEnggElectrical (BUET), PhD (Cambridge) CEng(UK), FIET(UK), FIEB FBCS SrMIEEE(USA)</h3>
                {{-- <h3 class="text-center">Vice-Chancellor</h3> --}}
                <p>Prof. Dr. Saiful Islam is currently the Vice-Chancellor of Dhaka International University (DIU) since 7 February 2022. During 22 June 2016 to 25 June 2020, Prof. Dr. Saiful Islam worked as the Vice-Chancellor of Bangladesh University of Engineering and Technology (BUET) for the full term of 4 years. During 26 August 2013 - 22 June 2016, he worked as the Pro-Vice Chancellor of Primeasia University, Banani, Dhaka, Bangladesh for a period of 2 years 9 months after being appointed by the Honorable President of Bangladesh and on leave from BUET.</p>

                <p>Prof. Islam obtained his BScEng in Electrical Engineering degree from BUET in 1975, obtained First Class with Honours marks and stood First in order of merit. He obtained MScEng in EE in 1977 from BUET and PhD in EE from Cambridge University, UK in 1986. With a strong academic background, Prof. Islam started his career as a Lecturer of Electrical Engineering in BUET in 1975 and became Professor of Electrical & Electronic Engineering department in 1988.</p>

                <p>Professor Saiful Islam is a Life Fellow of the Institution of Engineers Bangladesh (IEB), a Life Fellow of Bangladesh Computer Society, a Fellow of the Institution of Engineering & Technology (IET) UK, a Chartered Engineer (CEng) of the Engineering Council, UK.</p>

                <p>He is a Fellow of Cambridge Commonwealth Society, Cambridge, UK, a Senior Member of IEEE SrMIEEE (USA) . He is a former Vice President of Bangladesh Electronics Society. Professor Islam is a Life member of Caius Club of Gonville & Caius College, Cambridge University, Cambridge, UK.</p>

                <p>During 1991-93, Professor Saiful Islam was the Head of the Electrical and Electronic Engineering Department of BUET and during 1995-97 he was the Dean of the Electrical and Electronic Engineering Faculty. During this period he also worked twice as the Chairman of the Admission Committee for two consecutive years. He was also the Head of the Computer Science and Engineering Department of BUET during 1996.</p>
                <p>During 1991, Professor Islam was with the Electrical and Computer Engineering Department of Kanazawa University, Kanazawa, Japan with the status of a Visiting Professor and as a Matsumae International Foundation Fellow for a period of 3 months. During 1999-2000, he was a Visiting Professor of Islamic Institute of Technology (now IUT), Gazipur for one year (on sabbatical leave from BUET). During 2002-2006 he was the first Dean of Engineering Faculty of American International University- Bangladesh (AIUB), Banani, Dhaka and put significant contribution in building the Engineering Faculty. He has shown significant success in building and help growing private Universities. Thus, he has developed significant skill in academic administration and management in both public and private Universities.</p>
                <p>During his illustrious service career he has earned significant reputation and professional excellence in his tenure of service spanning over 46 years in teaching, research and academic administration.</p>

                <p>An eminent educationist, Prof. Islam has been involved in a large number of National Engineering Projects and has left significant contribution in National level Engineering and Educational fields. He is well known for his innovative nature, unsurpassable quality in dynamic leadership and exceptional managerial capability.</p>

                <p>He has been involved in research in Microwave coupled line devices, Semiconductor MQW Lasers, DFB Lasers, VCSELs, OPVCSELs. He has a large number of research papers in these areas in reputed journals. His professional experience covered a broad spectrum of areas like Microwave & RF Engineering, Satellite Communications, designing distribution systems for buildings and cities, special lighting for stadiums, exterior lighting of buildings, computer controlled exterior lighting. In recent years, he got involved in research on electrical energy, electrical power generation and planning. His expertise in the fields of Microwave & RF Engineering, RADAR, Satellite Communications, Lasers, designing electrical distribution systems for buildings and cities, special lighting is well known. Further information: <a href="https://sislamk.tripod.com" style="color:#f05d23">https://sislamk.tripod.com</a>  <a href="https://sislamk0.wixsite.com/saifulislameee" style="color:#f05d23">https://sislamk0.wixsite.com/saifulislameee</a></p>

                <a class="profile" href="{{route('viceChancellorOffice')}}">Browse Office Personnel</a>
            </div>
        </div>
    </section>
@endsection
