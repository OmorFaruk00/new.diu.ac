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
            /* color: #838383 !important; */
            color: #333 !important;
            font-weight: 500;
            font-size: 16px;
            line-height: 25px;
            text-align: justify
        }

        .auth-title {
            font-size: 20px;
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
            .authority .title {
            font-size: 18px;
            
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
                <h1 style="text-transform: uppercase">Chairman, BOT</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Authority</li>
                    <li>Chairman</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="demo">
            <div class="container">
                <div class="authority">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_245.jpg" alt="" style="height: 125px">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Shameem Haider Patwary</h2>
                        <span class="post">Chairman, BOT</span>
                        <a class="profile" href="https://profile.diu.ac/patwary#PersonalInformation" target="_blank"> View
                            Profile</a>
                    </div>
                    <ul class="signature-content">
                        <li><i class="fa fa-phone"></i>  8801817152079</li>
                        <li><i class="fa fa-envelope"></i> chairman@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt"></i> Office of the Chairman (BOT), Satarkul, Badda,
                            Dhaka-1212.</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container pt-5">
            <div class="message">
                
                <p class="desc">Barrister Shameem Haider Patwary is a distinguished legal professional and former Member of Parliament for Gaibandha-1 (Sundargonj). With a robust career in law and a commitment to social and educational initiatives, he has established himself as a prominent figure in Bangladesh. He currently heads Patwary Jurists and Associates, a reputable law firm based in Rupayan Karim Tower, Dhaka, where he leads a team dedicated to delivering comprehensive legal services.</p>


                <h4 class="auth-title">Personal Life</h4>
                <p class="desc">Barrister Shameem Haider Patwary's extensive legal expertise, educational contributions, media presence, and political involvement make him a prominent and influential figure in Bangladesh. His unwavering commitment to law, social justice, and education exemplifies his dedication to making a positive impact on society. Born on September 25, 1981, Barrister Patwary is the son of the late Alhaj Prof. Dr. A.B.M. Mafizul Islam Patwari, a respected legal scholar, and Advocate Rokeya Islam. He is married and proudly identifies as Bangladeshi by birth. His commitment to his country and its people is evident in his extensive professional and social endeavors. He can be contacted at shameemlaw@hotmail.com.</p>

                <h4 class="auth-title">Educational Background</h4>
                <p class="desc">Barrister Patwary's academic journey is marked by excellence and achievement. He holds a BVC (PG Diploma in Professional & Legal Skills) from the Inns of Court School of Law, City University, London, and a PG Certificate in Intellectual Property Law from the University of London. He also earned his LL.B (Hons) from both the University of London and Dhaka International University, graduating with top honors. Additionally, he completed a Diploma in Human Rights with distinction from the Humanist & Ethical Association of Bangladesh in collaboration with Dhaka International University.</p>


                <h4 class="auth-title">Legal Career</h4>
                <p class="desc">Enrolled as an advocate at the Supreme Court of Bangladesh since 2007 and the Dhaka Bar Association since 2003, Barrister Patwary has a wealth of legal experience. He began his career at Amir and Amir Law Associates under the mentorship of Barrister M. Amir-Ul Islam, gaining expertise in public procurement, banking, and corporate governance. His role in several landmark cases has cemented his reputation as a skilled and knowledgeable legal professional.</p>

                <h4 class="auth-title">Training and Seminars</h4>
                <p class="desc">Barrister Patwary has been an active participant in numerous international conferences and workshops. His contributions cover a range of topics, including combating trafficking, child rights, judicial activism, freedom of the press, and social business. As a speaker and resource person, he has shared his insights and knowledge, demonstrating his commitment to legal education and social justice.</p>

                <h4 class="auth-title">Media Presence</h4>
                <p class="desc">A familiar face in the media, Barrister Patwary has appeared in over 1000 TV talk shows, including popular programs like "Channel I-Tritio Mattra," "ATN Bangla Onnodristi," "Ekattor Journal," and almost all news media in Bangladesh. He has also performed as an international speaker in several significant conferences, seminars and workshops in many countries all over the world. His extensive media presence highlights his role as a public intellectual and advocate for legal and social issues, making him a respected voice in Bangladesh.</p>


                <h4 class="auth-title">Political and Social Involvement</h4>
                <p class="desc">In addition to his legal career, Barrister Patwary has held significant political positions. He is a Presidium Member of the Jatio Party and the Additional Secretary for Rangpur Division. He has also served on the Standing Committee on the Ministry of Law and Parliamentary Affairs, contributing to legislative oversight and reform. His political and social engagement reflects his dedication to public service and governance. He was also the chairman of standing committee on Ministry of Expatriates Welfare and Overseas Employment.</p>

                <h4 class="auth-title">Educational and Social Contributions</h4>
                <p class="desc">Barrister Patwary is deeply committed to education and social welfare. He serves as the Chairman of the Board of Trustees at Dhaka International University and the President of the Social Business Academia Cell and Tobacco Control & Research Cell (TCRC). He also holds presidential roles in several technical and vocational education institutes, promoting skill development and education across Bangladesh. His initiatives in social business and tobacco control further illustrate his dedication to improving societal well-being. </p>

                

                <a class="profile" href="{{route('chairmanOffice')}}">Browse Office Personnel</a>
            </div>
        </div>
    </section>
@endsection
