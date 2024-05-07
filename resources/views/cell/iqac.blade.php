@extends('layouts.master')
@section('content')
    <style>
        .cellBox {
            color: #606060;
            background-color: #f5f5f5;
            font-family: 'Noto Sans', sans-serif;
            text-align: center;
            padding: 0 10px 20px;
            margin: 25px 0 0;
            border: 1px solid transparent;
            border-bottom: 10px solid #01AFD2;
            border-radius: 0 30px;
        }

        .cellBox .cell-icon {
            color: #fff;
            background: #01AFD2;
            font-size: 35px;
            padding: 5px 40px;
            margin: -30px 0 0 0;
            box-shadow: 0 -10px 10px -5px rgba(0, 0, 0, 0.2) inset;
            border-radius: 15px 15px 0 0;
            display: inline-block;
            transition: all 0.3s;
        }

        .cellBox .cell-icon i {
            transform: rotate(0deg);
            transition: all 0.3s ease 0s;
        }

        .cellBox:hover .cell-icon i {
            text-shadow: 0 0 5px #555;
            transform: rotate(360deg);
        }

        .cellBox:hover .title {
            color: #5a5de6 !important;
        }

        .cellBox .cell-content {
            background-color: #fff;
            padding: 30px 10px 10px;
            border-radius: 10px;
            box-shadow: 0 0 7px 3px rgba(0, 0, 0, 0.2);
        }

        .cellBox .title {
            color: #01AFD2;
            font-size: 20px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 10px;
        }

        .cellBox .description {
            font-size: 17px;
            text-align: center;
            line-height: 25px;
            margin-bottom: 20px;
            color: gray;
            font-weight: 400;
            text-align: justify;
            padding: 0px 10px;
        }

        .cellBox img {
            height: 200px;
            width: 200px;
            margin-bottom: 20px;
        }

        @media only screen and (max-width:990px) {
            .cellBox {
                margin: 25px 0 50px;
            }
        }
    </style>
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="https://iqac.diu.ac" class="text-white cell" target="_blank">
                    <h3 style="text-transform:uppercase;margin-top:5px"> Institutional Quality Assurance Cell ( IQAC)</h3>
                </a>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li>Cell</li>
                    <li>IQAC</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->


    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                    <div class="cellBox">
                        <div class="cell-icon">
                            <span><i class="fa fa-home" aria-hidden="true"></i></span>
                        </div>
                        <div class="cell-content">
                            <a href="https://iqac.diu.ac" target="_blank">
                                <img src="{{ asset('assets/images/cell/iqac.png') }}" alt="">
                            </a>
                            <a href="https://iqac.diu.ac" target="_blank">
                                <h3 class="title">Institutional Quality Assurance Cell ( IQAC )</h3>
                            </a>
                            <p class="description">In order to enhance and to get a continuous patronage of Quality
                                Assurance (QA) culture at different entities/departments of Dhaka International University
                                (DIU), the Institutional Quality Assurance Cell (IQAC) was constituted on 01 July 2015. The
                                IQAC consists of seven (07) entities namely Law, CSE (Computer Science & Engineering),
                                English, EETE (Electrical, Electronics, & Telecommunication Engineering), Business
                                Administration, Pharmacy and Sociology. It is obvious that IQAC is a mutual endeavour
                                between Dhaka International University and University Grants Commission (UGC), Bangladesh
                                which is resolutely committed to ensure the practice of continuously improving quality
                                culture, demonstrate responsibility and enhancement and thus, to satisfy the different
                                stakeholders (Existing Students, Alumni, Academic and Non-Academic Staffs, Employer, etc.).
                                The quality assurance areas covered by IQAC are based on governance, curriculum content
                                design and review, student admission, progress and achievements, physical facilities,
                                teaching-learning and assessment, student support cells, staff and facilities, research and
                                extension, as well as process management and continuous improvement. Having set up IQAC, a
                                lot of workshops, training on different events and meetings are being conducted for
                                improving the existing quality culture at different entities of this university. It is
                                mentionable that IQAC itself conducted four (04) QAC (Quality Assurance Committee) meetings,
                                15 meetings which are related to IQAC fund, as well as 22 academic and non-academic
                                training/workshops based upon Block Allocation till Nov. 2017. Moreover, to maintain an
                                upgrading quality culture on teaching-learning methods and curriculum design, SA
                                (Self-Assessment) Committees of different entities also conducted a lot of meetings with
                                their faculty members. The External Peer Reviews (EPRs) of Law, CSE and English departments
                                were successfully accomplished on 31 May-02 June 2017. Likewise, the EPRs of departments of
                                Business Administration, Pharmacy, Sociology as well as EETE were fruitfully completed on
                                16-18 May, 25-27 May as well as on 13-15 July, 2017 respectively. Accordingly, all Reports
                                of seven departments have already been submitted at QA (Quality Assurance) Unit, UGC after
                                furnishing necessary improvement plans.</p>
                        </div>
                        {{-- <img src="{{ asset('assets/img/campuslife/health.png') }}" alt="Outdoor-Activities" /> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
