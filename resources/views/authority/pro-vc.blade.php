@extends('layouts.master')
@section('content')
    <style>
        .authority {
            background: #fff;
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

        .authority .profile {
            color: #5bc908;
            font-weight: 600;
            font-size: 16px;
            text-transform: capitalize;
            margin: 10px 0 7px;
            display: block;
        }

        .authority .profile:hover {
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
            background: #fff;
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
                <h1 style="text-transform: uppercase">Pro-Vice-Chancellor</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Authority</li>
                    <li>Pro-Vc</li>
                </ol>
            </div>
        </div>
    </section>


    <section class="py-5" style="background: #f5f5f5">
        <div class="demo">
            <div class="container">
                <div class="authority">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_813.jpg" alt="" style="height: 125px">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Prof. Dr. Ganesh Chandra Saha </h2>
                        <span class="post">Pro-Vice-Chancellor</span>
                        <a class="profile" href="https://profile.diu.ac/prof.dr.ganeshchandrasaha#PersonalInformation" target="_blank"> View
                            Profile</a>
                    </div>
                    <ul class="signature-content">
                        <li><i class="fa fa-phone"></i> 01971538024</li>
                        <li><i class="fa fa-envelope"></i> ganesh@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt"></i> Office of the Vice-Chancellor, Satarkul, Badda,
                            Dhaka-1212.</li>
                    </ul>
                </div>
            </div>
        </div>



        <div class="container py-5">
            <div class="message">
                <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quia alias ipsa cum
                    repudiandae dolores veniam esse! Cupiditate asperiores expedita velit et nihil error sequi recusandae
                    vel quibusdam ex reprehenderit debitis voluptates repellendus consequatur dolorem possimus doloremque
                    amet enim laudantium, corporis neque accusamus tenetur, sint dolorum! Iure, dolorum et. Nostrum, sunt
                    minima! Quisquam perferendis aliquid obcaecati nemo facilis ipsam maiores mollitia veritatis delectus
                    dicta distinctio voluptatem corporis repudiandae optio, debitis eligendi voluptates velit quos, nostrum
                    dolor quaerat incidunt similique accusamus. Amet, recusandae corporis. Magni, rerum fugiat eaque unde
                    nostrum vitae neque iure voluptates animi odit voluptatum? Iusto sint fugiat dignissimos ex quos ipsa
                    iure, eaque, debitis impedit, ea culpa molestias sunt ducimus laboriosam! Delectus soluta dolorum
                    aliquid saepe, quam architecto ea id repellat numquam sapiente deleniti cum fuga eaque reprehenderit
                    tempore error! Atque voluptatem, soluta repellat ratione blanditiis minima, iusto ipsam enim a hic,
                    consectetur quisquam fugiat quod. Doloremque, sapiente earum. Sint impedit nostrum aut necessitatibus
                    modi explicabo facilis eius et iure dicta illum labore pariatur, atque vitae, optio eos nihil vero
                    voluptates? Natus ipsam exercitationem, quisquam, veniam quos cum esse quam magni dolorem vel nemo
                    dolore veritatis sequi, culpa aspernatur error deleniti dolorum adipisci. Corporis saepe libero quaerat
                    in. Dolorem dicta impedit quam, vero expedita adipisci atque sunt repellat quasi. Atque nam ipsam
                    repellendus mollitia facere, facilis esse aspernatur eaque deserunt quidem commodi velit, totam animi
                    officia, tempore dolore quod sed omnis dignissimos voluptatem reprehenderit exercitationem laudantium
                    eligendi. Pariatur, quam ipsa dolorem, natus magni facilis commodi perferendis in iusto quod doloremque
                    laboriosam accusamus sequi. Suscipit minima similique, corrupti labore nemo sunt consectetur ut. Sequi,
                    vero nostrum! Perferendis officia consequuntur fuga hic, excepturi labore voluptatibus obcaecati
                    voluptate quae dolor, ipsam quidem modi assumenda accusamus, autem totam maxime ratione eaque sint
                    deserunt. !</p>

                <h3>Pro-Vice-Chancellor</h3>
            </div>
        </div>
    </section>
@endsection
