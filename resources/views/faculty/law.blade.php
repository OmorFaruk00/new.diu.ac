@extends('layouts.master')
@section('content')
    <style>
        .faculty {
            background: linear-gradient(80deg, #DDDDDD, #DDDDDD);
            font-family: 'Open Sans', sans-serif;
            padding: 30px 30px 40px 175px;
            margin: 0 auto;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
        }

        .faculty:after {
            content: '';
            background-color: #fff;
            height: 30px;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
        }

        .message {
            background: linear-gradient(80deg, #DDDDDD, #DDDDDD);
            font-family: 'Open Sans', sans-serif;
            padding: 30px 30px 40px 30px;
            margin: 0 auto;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 1;
        }

        .message:after {
            content: '';
            background-color: #fff;
            height: 30px;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
        }

        .message .desc {
            color: #6c6a6a !important;
            font-size: 16px;
            line-height: 25px;
            text-align: justify;
            font-weight: 500;
        }

        .message h3 {
            font-size: 18px;
            font-weight: bold;
            color: #313131;
        }

        .faculty .faculty-icon {
            width: 150px;
            height: 155px;
            border: 3px solid #fff;
            box-shadow: 0 0 5px #555;
            transform: translateY(-50%);
            overflow: hidden;
            position: absolute;
            left: 30px;
            top: 50%;
        }

        .faculty .faculty-icon img {
            width: 100%;
            height: auto;
        }

        .faculty .faculty-details {
            width: 49%;
            padding: 15px 15px 15px 25px;
            margin: 0 25px 0 15px;
            border-right: 1px solid #000;
            border-left: 1px solid #000;
            vertical-align: top;
            display: inline-block;
        }

        .faculty-details .title {
            color: #333;
            font-size: 24px;
            font-weight: 600;
            text-transform:capitalize;
            margin: 0 0 3px;
        }

        .faculty .post {
            color: #333;
            font-weight: 600;
            font-size: 16px;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0 0 10px;
            display: block;
        }

        .faculty .icon {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .faculty .icon li {
            display: inline-block;
            margin: 0 3px;
        }

        .faculty .icon li a {
            color: #000;
            background-color: #fff;
            font-size: 13px;
            text-align: center;
            line-height: 28px;
            height: 28px;
            width: 28px;
            border-radius: 50%;
            display: block;
            transition: all 0.3s;
        }

        .faculty .icon li a:hover {
            color: #fff;
            background-color: #F83673;
            text-shadow: 0 0 5px #333;
        }

        .faculty .faculty-content {
            color: #000;
            font-weight: 500;
            letter-spacing: 0.5px;
            line-height: 28px;
            padding: 0;
            margin: 0;
            vertical-align: top;
            list-style: none;
            display: inline-block;
        }

        .profile {
            color: #2EAA4D;
            font-weight: 600;
            font-size: 16px;
            text-transform: capitalize;
            margin: 10px 0 7px;
            display: block;
        }

        .profile:hover {
            color: #0ee143;

        }

        @media screen and (max-width:767px) {
            .faculty {
                text-align: center;
                width: 95%;
                padding: 190px 15px 40px;
                margin: 0 auto;
            }

            .message {
                width: 95%;
            }

            .faculty .faculty-icon {
                transform: translateX(-50%) translateY(0);
                left: 50%;
                top: 25px;
            }

            .faculty .faculty-details {
                width: auto;
                padding: 0 0 15px;
                margin: 0 0 15px;
                border: none;
                border-bottom: 1px solid #fff;
            }

            .faculty .faculty-content {
                display: block;
            }
        }



        .department-title {
            color: #333;
            font-size: 32px;
            font-weight: 800;
            text-align: center;
            padding: 20px 0px;
        }

        .department ul li {
            color: #6c6a6a;
            font-weight: 700;
            font-size: 22px;
            text-align: left;
            padding: 0px 20px;
            line-height: 25px;

        }

        .department-head {
            text-align: center;
            transition: all 0.5s ease 0s;
            box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            margin: 0px 10px;
        }

        .department-head .pic {
            overflow: hidden;
            position: relative;
        }

        .department-head:hover .frame img {
            transform: scale(1.1, 1.1);
        }



        .department-head .team-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 130px;
        }

        .department-head .title {
            font-size: 18px;
            font-weight: 700;
            color: #047168;
            text-transform: capitalize;
            margin-bottom: 7px;
        }

        .dept {
            font-size: 14px;
            font-weight: 700;
            color: #047168;
            text-transform: capitalize;

        }

        .department-head .post {
            display: block;
            font-size: 17px;
            font-weight: 600;
            color: #707070;
            text-transform: capitalize;
            margin-bottom: 10px;
        }

        @media only screen and (min-width: 1090px) {
            .department-head {
                margin-bottom: 30px;
            }

        }



        .frame img {
            border: solid 2px;
            border-bottom-color: #ffe;
            border-left-color: #eed;
            border-right-color: #eed;
            border-top-color: #ccb;
            max-height: 100%;
            max-width: 100%;
            transform: scale(1, 1);
            transition: all 0.30s ease 0s;
        }

        .frame {
            background-color: #ddc;
            border: solid 5vmin #eee;
            border-bottom-color: #fff;
            border-left-color: #eee;
            border-radius: 2px;
            border-right-color: #eee;
            border-top-color: #ddd;
            /* box-shadow:0 0 5px 0 rgba(0,0,0,.25) inset, 0 5px 10px 5px rgba(0,0,0,.25); */
            box-sizing: border-box;
            display: inline-block;
            position: relative;
            text-align: center;

            &:before {
                border-radius: 2px;
                bottom: -2vmin;
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .25) inset;
                content: "";
                left: -2vmin;
                position: absolute;
                right: -2vmin;
                top: -2vmin;
            }

            &:after {
                border-radius: 2px;
                bottom: -2.5vmin;
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .25);
                content: "";
                left: -2.5vmin;
                position: absolute;
                right: -2.5vmin;
                top: -2.5vmin;
            }
        }
    </style>


    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Faculty of Law</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Faculty of Law</li>
                </ol>
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5">
            <div class="">
                <div class="faculty">
                    <div class="faculty-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_1223.jpg" alt="">
                    </div>
                    <div class="faculty-details">
                        <h2 class="title">Prof. Dr. Abdullah-Al Monzur Hussain</h2>
                        <span class="post">Dean</span>
                        <a href="https://profile.diu.ac/dr.abdullah-almonzurhussain#PersonalInformation" class="profile" target="_blank">View
                            Profile</a>

                    </div>
                    <ul class="faculty-content">
                        <li><i class="fa fa-phone"></i> 01622869405</li>
                        <li><i class="fa fa-envelope"></i> monzurhussain.law@diu.ac</li>
                        <li><i class="fas fa-map-marker-alt px-1"></i>Department of Law, <br> <span class="px-3">Satarkul,
                                Badda,
                                Dhaka-1212.</span></li>
                    </ul>
                </div>
            </div>


            <div class="pt-5">
                <div class="message">
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dicta hic porro
                        temporibus ea quae quos rem corporis saepe voluptate. Et labore aut, vitae est aliquid sed
                        doloremque
                        velit obcaecati consectetur! Perferendis enim animi cumque aliquid, excepturi similique dolorem
                        voluptatibus vel eveniet assumenda officiis? Totam nesciunt doloribus maiores nihil ullam assumenda
                        neque a nobis eos porro at facere, quibusdam quam culpa eum facilis. Quidem cupiditate nisi magnam
                        esse
                        iusto dolor saepe commodi perspiciatis soluta consectetur ab recusandae, debitis quia! Soluta sed
                        eaque
                        doloribus nulla omnis ex repellendus? Ullam vel iste alias repellat. Cumque quia, ipsam commodi
                        nihil
                        repudiandae officiis ab, quos incidunt minima minus, distinctio quas? Sed saepe consectetur maiores
                        incidunt! Cumque aspernatur deleniti numquam, quidem hic impedit reiciendis, ex quisquam suscipit
                        amet
                        tenetur nam? Incidunt magni error odit mollitia eveniet consequuntur quod dignissimos fuga amet qui
                        quisquam voluptate voluptates a, ducimus tempore non architecto provident repellendus ab tenetur,
                        expedita quam nulla. Dolores ullam, labore ut officia corporis explicabo vel non sequi architecto
                        praesentium cupiditate vero cumque sit doloribus beatae? Ea quis architecto veritatis commodi velit
                        voluptate dolorum maiores dignissimos pariatur quaerat, odio ullam corporis harum cupiditate
                        voluptatum
                        nulla assumenda voluptas.</p>
                    <h3>Dean</h3>

                </div>

                <div class="row  pt-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 mx-auto">
                                <div class="department">
                                    <h3 class="department-title">Department List </h3>
                                    <ul>
                                        <li>
                                            <p>LL.B. (Hons.)</p>
                                        </li>
                                        <li>
                                            <p> LL.M.</p>
                                        </li>
                                        <li>
                                            <p>Master of Human Rights Law</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            @foreach ($facultyMember->data as $rows )
                            <div class="col-md-6 col-md-8 mx-auto">
                                <h3 class="department-title">Department Chairman</h3>
                                <a href="{{ $rows->profile_link }}" target="_blank">
                                    <div class="department-head">
                                        <div class="frame">
                                            <img class="img" src="{{ $rows->profile_image }}">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title">{{ $rows->name }}</h3>
                                            <span class="post">{{ $rows->designation}}</span>
                                            <h3 class="dept">Department of Department of Law</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                             @endforeach
                        </div>

                    </div>

                </div>


    </section>
@endsection
