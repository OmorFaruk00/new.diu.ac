@extends('layouts.master')
@section('content')
    <style>
        .demo {
            background: #e7e7e7;
        }

        .main-cell {
            position: relative;
            -webkit-transition: all 0.4s ease 0s;
            -moz-transition: all 0.4s ease 0s;
            -ms-transition: all 0.4s ease 0s;
            transition: all 0.4s ease 0s;
        }

        .main-cell:before {
            content: "";
            width: 3px;
            height: 100%;
            background: #49B5E7;
            position: absolute;
            top: 0;
            left: 50%;
        }

        .main-cell .cell {
            margin-bottom: 50px;
            position: relative;
        }

        .main-cell .cell:before,
        .main-cell .cell:after {
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }

        .main-cell .cell-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #49B5E7;
            overflow: hidden;
            margin-left: -23px;
            position: absolute;
            top: 0;
            left: 50%;
            text-align: center;
        }

        .main-cell .cell-icon i {
            font-size: 30px;
            line-height: 50px;
            color: #fff;
        }

        .main-cell .cell-content {
            width: 45%;
            padding: 20px;
            border-radius: 5px;
            background: #fff;
            -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .main-cell .cell-content:before {
            content: "";
            border-left: 7px solid #49B5E7;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            position: absolute;
            left: 45%;
            top: 20px;
        }

        .main-cell .title {
            font-size: 28px;
            font-weight: 600;
            color: #fff;
            padding: 10px 20px;
            background: #49B5E7;
            border-radius: 3px 3px 0 0;
            margin: -20px -20px 10px;
        }

        .main-cell .description {
            font-size: 16px;
            color: #726f77;
            text-align: justify
        }

        .main-cell .read-more {
            display: inline-block;
            font-size: 12px;
            color: #64d8c1;
            text-transform: uppercase;
            padding: 5px 15px;
            border: 2px solid #64d8c1;
            position: relative;
            border-radius: 5px;
            -webkit-box-shadow: 2px 2px 0 #64d8c1;
            -moz-box-shadow: 2px 2px 0 #64d8c1;
            -ms-box-shadow: 2px 2px 0 #64d8c1;
            box-shadow: 2px 2px 0 #64d8c1;
        }

        .main-cell .read-more:hover {
            top: 2px;
            left: 2px;
            box-shadow: none;
        }

        .main-cell .cell-content.right {
            float: right;
        }

        .main-cell .cell-content.right:before {
            content: "";
            right: 45%;
            left: inherit;
            border-left: 0;
            border-right: 7px solid #49B5E7;
        }

        @media only screen and (max-width: 990px) {
            .main-cell .title {
                font-size: 25px;
            }

            .main-cell .cell-content::before {
                top: 16px;
            }
        }

        @media only screen and (max-width: 767px) {
            .main-cell {
                margin-left: 20px;
            }

            .main-cell:before {
                left: 0;
            }

            .main-cell .cell-content {
                width: 90%;
                float: right;
            }

            .main-cell .cell-content:before,
            .main-cell .cell-content.right:before {
                left: 10%;
                right: inherit;
                margin-left: -6px;
                border-left: 0;
                border-right: 7px solid #49B5E7;
            }

            .main-cell .cell-icon {
                left: 0;
            }
        }

        @media only screen and (max-width: 479px) {
            .main-cell .cell-content {
                width: 85%;
            }

            .main-cell .cell-content:before,
            .main-cell .cell-content.right:before {
                left: 15%;
            }

            .main-cell .title {
                font-size: 20px;
            }

            .main-cell .cell-content:before {
                top: 13px;
            }
        }
    </style>
    <main id="main" style="margin-top: 80px;">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="text-transform:uppercase;"> Cell </h1>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li> Cell </li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->




        <section class="inner-page internship">

            <div class="demo">
                <div class="container">
                    <div class=" text-center py-4">
                        <h3 class="heading ">WELCOME TO OUR CELL</h3>
                        <p>Dhaka International University formally formed various separate cell for development of DIU,
                            Society as well as Bangladesh. Those cells are formed for work on specific purpose. Those cells
                            actually work with various alliance, Government, non-governmental and international
                            organizations work together.</p>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-cell">
                                <div class="cell">
                                    <div class="cell-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cell-content">
                                        <h2 class="title">SBAC</h2>
                                        <p class="description">
                                            Nobel Peace Prize Winner Prof. Muhammad Yunus want to remove proverty from the
                                            world. For this reson, he launches a new business for heping for helping the
                                            poor which is known as social busniess is a causedriven business. In a social
                                            business, the investors or owners can gradually recoup the money invested, but
                                            cannot take any dividend beyond that point. The purpose of the investment is
                                            purely to achieve one or more social objectives though the operation of the
                                            company; no personal gain is desired by the investors. The company must cover
                                            all cost, make aprofit, and at the same time achieve a social objective, such
                                            as, healthcare for the poor, housing for the poor, financial services for the
                                            poor, nutrition for malnourished children, providing safe drinking water,
                                            introducing renewable energy, etc. The impact of the business on people or the
                                            enviroment, rather then amount of profit made in a given period measures the
                                            success of a social business. sustainability of the company indicates that it is
                                            running as a business.
                                        </p>
                                    </div>
                                </div>

                                <div class="cell">
                                    <div class="cell-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cell-content right">
                                        <h2 class="title">IQAC</h2>
                                        <p class="description">
                                            In order to enhance and to get a continuous patronage of Quality Assurance (QA)
                                            culture at different entities/departments of Dhaka International University
                                            (DIU), the Institutional Quality Assurance Cell (IQAC) was constituted on 01
                                            July 2015. The IQAC consists of seven (07) entities namely Law, CSE (Computer
                                            Science & Engineering), English, EETE (Electrical, Electronics, &
                                            Telecommunication Engineering), Business Administration, Pharmacy and Sociology.
                                            It is obvious that IQAC is a mutual endeavour between Dhaka International
                                            University and University Grants Commission (UGC), Bangladesh which is
                                            resolutely committed to ensure the practice of continuously improving quality
                                            culture, demonstrate responsibility and enhancement and thus, to satisfy the
                                            different stakeholders (Existing Students, Alumni, Academic and Non-Academic
                                            Staffs, Employer, etc.). The quality assurance areas covered by IQAC are based
                                            on governance, curriculum content design and review, student admission, progress
                                            and achievements, physical facilities, teaching-learning and assessment, student
                                            support services, staff and facilities, research and extension, as well as
                                            process management and continuous improvement. Having set up IQAC, a lot of
                                            workshops, training on different events and meetings are being conducted for
                                            improving the existing quality culture at different entities of this university.
                                            It is mentionable that IQAC itself conducted four (04) QAC (Quality Assurance
                                            Committee) meetings, 15 meetings which are related to IQAC fund, as well as 22
                                            academic and non-academic training/workshops based upon Block Allocation till
                                            Nov. 2017. Moreover, to maintain an upgrading quality culture on
                                            teaching-learning methods and curriculum design, SA (Self-Assessment) Committees
                                            of different entities also conducted a lot of meetings with their faculty
                                            members. The External Peer Reviews (EPRs) of Law, CSE and English departments
                                            were successfully accomplished on 31 May-02 June 2017. Likewise, the EPRs of
                                            departments of Business Administration, Pharmacy, Sociology as well as EETE were
                                            fruitfully completed on 16-18 May, 25-27 May as well as on 13-15 July, 2017
                                            respectively. Accordingly, all Reports of seven departments have already been
                                            submitted at QA (Quality Assurance) Unit, UGC after furnishing necessary
                                            improvement plans.
                                        </p>
                                    </div>

                                </div>

                                <div class="cell">
                                    <div class="cell-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cell-content left">
                                        <h2 class="title">TCRC
                                        </h2>
                                        <p class="description">
                                            Stop tobacco cultivation and grow food for creating a better living place for
                                            the next generation,” with this vision Dhaka International University has
                                            established Tobacco Control and Research Cell (TCRC) on March 2nd 2013.
                                            Bangladesh is a small and densely populated poor country having about 153.2
                                            million people, about 80 percent of whom are living in rural areas. This country
                                            is a disaster-prone area having been stricken by drought and flood with a range
                                            of health and environmental problems happening from dengue and cholera to
                                            arsenic contamination of the water supply. It should come as no surprise, then,
                                            that tobacco control has neither gained much attention nor been considered a
                                            priority. With so many competing causes of disease and with nearly half of the
                                            population living below the poverty line and consuming less than 2,122 calories
                                            per day (Bangladesh Bureau of Statistics 2012a), tobacco has generally seemed
                                            too remote and insignificant issue to be on the country’s agenda of concerns.
                                            Yet tobacco use is widespread and increasing rapidly and knowledge about the
                                            harm it causes to health is very low. Though, other causes of death still
                                            dominate tobacco use contributes a nontrivial amount to the overall burden of
                                            disease and death. And it has become clear and significant that immediate
                                            negative effects on the welfare of poor families, when scarce resources that
                                            could be used for food are spending on tobacco. Tobacco cultivation can be
                                            basically termed as ‘Contract farming’, because in majority of the cases the
                                            cultivation of tobacco is contracted with a large business organization or
                                            multinational company.
                                        </p>
                                    </div>

                                </div>
                                <div class="cell">
                                    <div class="cell-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cell-content right">
                                        <h2 class="title">CECD (Centre for Excellence and Career development)
                                        </h2>
                                        <p class="description">
                                            Centre for Excellence and Career Development (CECD) of Dhaka International
                                            University is working with the goal to develop students’ language proficiency,
                                            creative writing, professional skills and career guidance. CECD language experts
                                            focus on conducting student-centered, creative language teaching techniques, and
                                            individual guidance based on classroom activities in developing students’
                                            language proficiency. This centre also helps the students enhance their personal
                                            qualities for the development of their career paths to choose from aspiration.
                                            It incorporates the students in movie fest, language club, workshops, seminars,
                                            and conferences regularly, where they can get the touch of national and
                                            international professionals. The centre also encourages the learners to have the
                                            students’ creative writing by dint of publishing literary magazines, which would
                                            build students’ innovative qualities and make them unique throughout the
                                            competitive world.
                                        </p>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
