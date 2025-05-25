@extends('layouts.master')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');

        h1 {
            color: #fff;
            padding: 0 0 30px;
        }

        a:hover {
            text-decoration: none;
        }

        .our-member {
            background: #2EAA4D;
            font-family: 'Noto Sans', sans-serif;
            text-align: center;
            padding: 0 0 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .our-member .icon {
            background-color: #fff;
            padding: 5px 0;
            margin: 0 0 15px;
            list-style: none;
        }

        .our-member .icon li {
            display: inline-block;
            margin: 0 13px;
        }

        .our-member .icon li a {
            color: #000;
            font-size: 18px;
            line-height: 35px;
            height: 35px;
            width: 35px;
            border-radius: 50%;
            display: block;
            transition: all 0.3s;
        }

        .our-member .icon li a:hover {
            color: #fff;
            background-color: #2EAA4D;
            text-shadow: 0 0 5px #333;
        }

        .our-member .signature-icon {
            width: 135px;
            height: 135px;
            margin: 0 auto 15px;
            border: 10px solid transparent;
            box-shadow: 0 0 25px -7px #222;
            border-radius: 50%;
            overflow: hidden;
        }

        .our-member .signature-icon img {
            width: 100%;
            height: 100%;
        }

        .our-member .title {
            color: #000;
            font-size: 22px;
            font-weight: 500;
            text-transform: capitalize;
            padding: 0 15px;
            margin: 0 0 3px;
        }

        .our-member .title span {
            font-weight: 600;
        }

        .our-member .post {
            color: #fff;
            font-size: 18px;
            text-transform: capitalize;
            padding: 0 15px;
            margin: 0 0 10px;
            display: block;
            font-weight: 600;
        }

        .our-member .signature-content {
            background-color: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
            line-height: 24px;
            padding: 7px 12px;
            margin: 0 15px;
            list-style: none;
            border-radius: 10px;
        }

        @media screen and (max-width:359px) {
            .our-member .icon li {
                margin: 0 5px;
            }
        }
    </style>
    <section class="breadcrumbs">
        <div class="container">

            <div class="text-center">
                <h4 style="text-transform:uppercase;font-weight:700">Research and Publication Cell
                </h4>
                <ol class="d-flax justify-content-center">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#">Cell</a></li>
                    <li><a href="#">Research and Publication Cell</a></li>
                    </li>
                </ol>
            </div>

        </div>
    </section>

    <div class="container py-5 mb-5">

        <div class="row">
            <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
                <div class="our-member pt-3">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_944.jpg"
                            alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Prof. Dr. Shariful Alam</h2>
                        <span class="post">Director</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-mobile"></span> 017812200001</li>
                        <li><span class="fa fa-envelope"></span> shariful.poli@diu.ac</li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
                <div class="our-member pt-3">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_362.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Md. Abdul Based</h2>
                        <span class="post">Additional Director</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-mobile"></span> 8801716505902</li>
                        <li><span class="fa fa-envelope"></span> based@diu.ac</li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
                <div class="our-member pt-3">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_image_upload_142.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Mili Rahman</h2>
                        <span class="post">Joint Director</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-mobile"></span> 801716412498</li>
                        <li><span class="fa fa-envelope"></span> mili.eng@diu.ac</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
                <div class="our-member pt-3">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_310.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Mohammad Tareq</h2>
                        <span class="post">Joint Director</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-mobile"></span> 01713129987</li>
                        <li><span class="fa fa-envelope"></span> tareq.eee@diu.ac</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
                <div class="our-member pt-3">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_1128.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Mujahidul Islam</h2>
                        <span class="post">Lecturer</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-mobile"></span> 01874831773</li>
                        <li><span class="fa fa-envelope"></span> mujahidul.polic@diu.ac</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
                <div class="our-member pt-3">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_1140.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Kazi Farida Parvin</h2>
                        <span class="post">Lecturer</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-mobile"></span> 01635615173</li>
                        <li><span class="fa fa-envelope"></span> kazifarida.eco@diu.ac</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
                <div class="our-member pt-3">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_997.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Dola Das</h2>
                        <span class="post">Lecturer</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-mobile"></span> 01642144914

                        </li>
                        <li><span class="fa fa-envelope"></span> dola.plo@diu.ac</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
