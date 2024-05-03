@extends('layouts.master')
@section('content')
    <style>
        .future-title {
            font-weight: 700;
            font-size: 34px;
            color: #444444;
        }

        .future-desc {
            font-size: 16px;
            color: gray;
            text-align: justify;
            line-height: 25px;
            font-weight: 500;
            margin-top: 15px;
        }

        .program ul {
            list-style: none;
            line-height: 30px;
            /* margin-top: 20px; */


        }

        .program li a {
            font-size: 20px;
            color: gray !important;
            font-weight: 700;
        }

        .program li a:hover {
            color: #01AA4D !important;
        }
        .campus-life:hover{
            color: #01AA4D !important;
        }
        .campus-image img{
            width: 100%;
            margin-top: 30px;

        }
        
    </style>

    <main id="main" style="margin-top: 80px">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="text-transform: uppercase">Future Student</h1>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Future Student</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="py-4">
            <div class="container">
                <h2 class="future-title">Why Study at DIU</h2>
                <p class="future-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste libero itaque nemo
                    assumenda quidem exercitationem, obcaecati facere! Necessitatibus eius tempore quaerat magnam ut enim
                    cupiditate, suscipit, vero tempora hic accusamus? Quam, obcaecati sunt! Mollitia rerum quo ipsam
                    voluptate ipsum doloremque eaque magnam omnis non eum nihil blanditiis dolorem consequuntur doloribus
                    deserunt debitis sapiente id optio hic, neque voluptas reiciendis totam. Rerum ad pariatur unde
                    possimus, voluptatum, quia sed adipisci dolores in, voluptatem molestiae omnis magni quo eveniet
                    obcaecati nulla! Aperiam maxime libero quos cumque. Commodi, autem hic. Voluptas soluta in reprehenderit
                    nesciunt distinctio cupiditate id a nostrum inventore, exercitationem ut accusamus dolores, pariatur
                    laborum quos vitae error iure. Quaerat, maiores. In eos voluptatum rerum nobis esse magnam impedit id
                    unde quam delectus alias, amet suscipit illum tempore exercitationem soluta iste molestias laudantium.
                    Eligendi earum numquam sequi delectus quod? Natus autem ducimus numquam qui laudantium doloremque error
                    repellendus. Illo, repellat doloremque perspiciatis dignissimos debitis aut? Ipsum quibusdam veritatis
                    exercitationem consectetur error quaerat quae enim dolore hic debitis ipsam sapiente nobis rem dolorem
                    incidunt praesentium dolor, asperiores recusandae quos. Libero pariatur esse, cum excepturi quisquam
                    maiores a magni! Veniam perspiciatis quo delectus voluptatum, natus expedita vitae voluptates rerum
                    minima, inventore quidem optio?</p>
            </div>
        </section>

        <section class="py-2">
            <div class="container">
                <a href="#" class="future-title campus-life">Campus Life</a>
                <div class="col-lg-6 mx-auto campus-image">
                    <img src="{{asset('/assets/images/slider/slider33.jpeg')}}" alt="">
                </div>
             
                        <p class="future-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste libero itaque nemo
                            assumenda quidem exercitationem, obcaecati facere! Necessitatibus eius tempore quaerat magnam ut enim
                            cupiditate, suscipit, vero tempora hic accusamus? Quam, obcaecati sunt! Mollitia rerum quo ipsam
                            voluptate ipsum doloremque eaque magnam omnis non eum nihil blanditiis dolorem consequuntur doloribus
                            deserunt debitis sapiente id optio hic, neque voluptas reiciendis totam. Rerum ad pariatur unde
                            possimus, voluptatum, quia sed adipisci dolores in, voluptatem molestiae omnis magni quo eveniet
                            obcaecati nulla! Aperiam maxime libero quos cumque. Commodi, autem hic. Voluptas soluta in reprehenderit
                            nesciunt distinctio cupiditate id a nostrum inventore, exercitationem ut accusamus dolores, pariatur
                            laborum quos vitae error iure. Quaerat, maiores. In eos voluptatum rerum nobis esse magnam impedit id
                            unde quam delectus alias,</p>

                   
                   
                </div>
                
            </div>
        </section>

        <section class="py-4">
            <div class="container">
                <h2 class="future-title">Programs</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 program">
                        <ul>
                            <li><a href="/programs/department-of-english" target="_blank">Department of
                                    English</a></li>
                            <li><a href="/programs/department-of-law" target="_blank">Department of Law</a></li>
                            <li><a href="/programs/department-of-sociology" target="_blank">Department of
                                    Sociology</a></li>
                            <li><a href="/programs/department-of-business-administration" target="_blank">Department of
                                    Business Administration</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 program">
                        <ul>
                            <li><a href="/programs/department-of-pharmacy" target="_blank">Department of
                                    Pharmacy</a></li>
                            <li><a href="/programs/department-of-eee" target="_blank">Department of EEE</a></li>


                            <li><a href="/programs/department-of-cse" target="_blank">Department of CSE</a></li>
                            <li><a href="/programs/department-of-civil-engineering" target="_blank">Department
                                    of Civil Engineering</a></li>


                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 program">
                        <ul>

                            <li><a href="/programs/department-of-political-science" target="_blank">Department
                                    of Political Science</a></li>
                            <li><a href="/programs/department-of-economics" target="_blank">Department of
                                    Economics</a></li>
                            <li><a href="/programs/department-of-microbiology" target="_blank">Department of
                                    Microbiology</a></li>
                            <li><a href="/programs/department-of-biochemistry-and-molecular-biology"
                                    target="_blank">Department of Biochemistry and Molecular Biology</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>




    </main>
@endsection
