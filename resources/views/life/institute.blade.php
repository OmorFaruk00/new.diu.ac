@extends('layouts.master')
@section('content')


<style>
     
    .demo{ background: #e7e7e7; }
.main-institute{
    position: relative;
    -webkit-transition: all 0.4s ease 0s;
    -moz-transition: all 0.4s ease 0s;
    -ms-transition: all 0.4s ease 0s;
    transition: all 0.4s ease 0s;
}
.main-institute:before{
    content: "";
    width: 3px;
    height: 100%;
    background: #49B5E7;
    position: absolute;
    top: 0;
    left: 50%;
}
.main-institute .institute{
    margin-bottom: 50px;
    position: relative;
}
.main-institute .institute:before,
.main-institute .institute:after{
    content: "";
    display: block;
    width: 100%;
    clear: both;
}
.main-institute .institute-icon {
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

.main-institute .institute-icon i{
    font-size: 30px;
    line-height: 50px;
    color: #fff;
}
.main-institute .institute-content{
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
.main-institute .institute-content:before{
    content: "";
    border-left: 7px solid #49B5E7;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    position: absolute;
    left: 45%;
    top: 20px;
}
.main-institute .title{
    font-size: 24px;
    font-weight: 600;
    color: #fff;
    padding: 10px 20px;
    background: #49B5E7;
    border-radius: 3px 3px 0 0;
    margin: -20px -20px 10px;
}
.main-institute .description{
    font-size: 16px;
    color: #726f77;
    text-align: justify
}
.main-institute .read-more{
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
.main-institute .read-more:hover{
    top: 2px;
    left: 2px;
    box-shadow: none;
}
.main-institute .institute-content.right{
    float: right;
}
.main-institute .institute-content.right:before{
    content: "";
    right: 45%;
    left: inherit;
    border-left: 0;
    border-right: 7px solid #49B5E7;
}
@media only screen and (max-width: 990px){
    .main-institute .title{
        font-size: 25px;
    }
    .main-institute .institute-content::before{
        top: 16px;
    }
}
@media only screen and (max-width: 767px){
    .main-institute{ margin-left: 20px; }
    .main-institute:before{ left: 0; }
    .main-institute .institute-content{
        width: 90%;
        float: right;
    }
    .main-institute .institute-content:before,
    .main-institute .institute-content.right:before{
        left: 10%;
        right: inherit;
        margin-left: -6px;
        border-left: 0;
        border-right: 7px solid #49B5E7;
    }
    .main-institute .institute-icon{
        left: 0;
    }
}
@media only screen and (max-width: 479px){
    .main-institute .institute-content{
        width: 85%;
    }
    .main-institute .institute-content:before,
    .main-institute .institute-content.right:before{
        left: 15%;
    }
    .main-institute .title{
        font-size: 20px;
    }
    .main-institute .institute-content:before{
        top: 13px;
    }
}
</style>
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;"> Institute </h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li> Institute </li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

  


    <section class="inner-page internship">
       
        <div class="demo">
            <div class="container">
                <div class=" text-center py-4">
                    <h3 class="heading ">WELCOME TO OUR INSTITUTE</h3>
                    <p>Beside Dhaka International University (DIU), the management authority of DIU runs several Institutes for students to get a degree in the professional life.</p>
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-institute">
                            <div class="institute">
                                <div class="institute-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="institute-content">
                                    <h2 class="title">Technical & Vocational Education Institute</h2>
                                    <p class="description">
                                        This institute has been established in 1998 . This institute is now operating its academic activities at 66 Green Road (5th floor). Students are studying in Diploma in Computer technology, Diploma in electrical, Diploma in Civil under BTEB.
                                    </p>
                                </div>
                            </div>
         
                            <div class="institute">
                                <div class="institute-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="institute-content right">
                                    <h2 class="title">Dr.M.I. Patwari Technical & Vocational Education Institute</h2>
                                    <p class="description">
                                        This institute has been established in 1998 . This institute is now operating its academic activities at Choudhurani, Pirgacha - Rangpur. Students are studying in HSC (BM) under BTEB.
                                    </p>
                                </div>
                              
                            </div>

                            <div class="institute">
                                <div class="institute-icon">
                                    <i class="fa fa-snowflake"></i>
                                </div>
                                <div class="institute-content left">
                                    <h2 class="title">Dr.Z.I. Chowdhury Agricultural Research & Training Institute
                                    </h2>
                                    <p class="description">
                                        This institute has been established in 1998 . This institute is now operating its academic activities at Falgacha,Moniram, Shundarganj-Gaibandha. Students are studying in Diploma in Agriculture under BTEB.
                                    </p>
                                </div>
                              
                            </div>
                            <div class="institute">
                                <div class="institute-icon">
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="institute-content right">
                                    <h2 class="title">Dr.M.I. Patwari Private Engineering Institute
                                    </h2>
                                    <p class="description">
                                        This institute has been established in 1998 . This institute is now operating its academic activities at at Falgacha,Moniram, Shundarganj-Gaibandha. Students are studying in Diploma in Computer technology, Diploma in electrical, Diploma in Civil and Diploma in Textile under BTEB.
                                    </p>
                                </div>
                              
                            </div>
                            <div class="institute">
                                <div class="institute-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="institute-content left">
                                    <h2 class="title">Sundarganj Driving Training Institute
                                    </h2>
                                    <p class="description">
                                        This institute has been established in 2019 . This institute is now operating its activities at at Falgacha,Moniram, Shundarganj-Gaibandha.
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