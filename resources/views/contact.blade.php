@extends('layouts.master')
@section('content')
    <style>
        .bg {
            background: #E9E9E9;
        }

        .contactBox {
            color: #999;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            padding: 10px 0 15px;
            position: relative;

        }

        .contactBox:before,
        .contactBox:after {
            content: "";
            background: #1e5270;
            width: 150px;
            height: 10px;
            transform: translateX(-50%);
            position: absolute;
            top: 0;
            left: 50%;
            clip-path: polygon(7% 0%, 93% 0%, 100% 100%, 0% 100%);
        }

        .contactBox:after {
            width: 80%;
            height: 15px;
            border-radius: 0 0 10px 10px;
            top: auto;
            bottom: 0;
            clip-path: none;
        }

        .contactBox .service-content {
            background: #fff;
            padding: 25px 20px;
            border-radius: 10px;
            height: 250px;
        }

        .contactBox .service-content:before {
            content: "";
            background: #1b657e;
            width: 128px;
            height: 100px;
            transform: translateX(-50%);
            position: absolute;
            top: 0;
            left: 50%;
            clip-path: polygon(0 0, 100% 0, 50% 100%);
        }

        .contactBox .service-icon {
            color: #77787a;
            background: linear-gradient(to left, #dedfe1, #f3f3f3);
            font-size: 40px;
            line-height: 100px;
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            border-radius: 50%;
            box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.03);
            position: relative;
            z-index: 1;
        }

        .contactBox .service-icon:before {
            content: "";
            background: linear-gradient(to right, #dedfe1, #f3f3f3);
            width: 88%;
            height: 88%;
            border-radius: 50%;
            box-shadow: 5px 0 5px rgba(0, 0, 0, 0.1);
            transform: translateX(-50%) translateY(-50%);
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: -1;
        }

        .contactBox .title {
            color: #1e5270;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin: 0 0 10px;
        }

        .contactBox .description {
            font-size: 14px;
            line-height: 24px;
            margin: 0;
        }

        .description a {
            color: #999B99 !important;
            width: 100%;
            padding: 20px
        }

        .contactBox.green:before {
            background: #1F8EBD;
        }

        .contactBox.green:after,
        .contactBox.green .service-content:before {
            background: #1F8EBD;
        }

        .contactBox.green .title {
            color: #1F8EBD;
        }

        @media only screen and (max-width:990px) {
            .contactBox {
                margin: 0 0 30px;
            }
        }

        form-bg {
            background: linear-gradient(to right, #7cacdc, #e0e5eb);
        }

        form {
            font-family: 'Roboto', sans-serif;
        }

        .form-horizontal {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        }

        .form-horizontal .header {
            background: #1F90BD;
            padding: 30px 25px;
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            border-radius: 3px 3px 0 0;
        }

        .form-horizontal .form-content {
            padding: 25px;
            background: #f9fafd;
        }

        .form-horizontal .form-control {
            padding: 10px 50px 10px 15px;
            height: 50px;
            font-size: 18px;
            color: #000;
            border: 2px solid #acacac;
            margin-bottom: 15px;
        }

        .form-horizontal .form-control:hover {
            border-color: #c9af67;
        }

        .form-horizontal .form-control:focus {
            border-color: #1F90BD;
            box-shadow: none;
        }

        .form-horizontal .control-label {
            width: 42px;
            height: 40px;
            font-size: 17px;
            color: #acacac;
            border-left: 1px solid #acacac;
            position: absolute;
            top: 5px;
            right: 20px;
            text-align: center;
        }

        .form-horizontal .captcha {
            padding-right: 0;
        }

        .form-horizontal .captcha label {
            background: #e0e0e0;
            display: block;
            height: 50px;
            font-size: 16px;
            color: #acacac;
            line-height: 45px;
            text-align: center;
            border-radius: 3px 0 0 3px;
        }

        .form-horizontal .captcha-text {
            padding-left: 0;
        }

        .form-horizontal .captcha-text input {
            border-radius: 0 3px 3px 0;
        }

        .form-horizontal .footer {
            background: #F9FAFD;
            border-top: 1px solid #1F90BD;
            padding: 10px 25px;
        }

        .form-horizontal .footer .btn {
            background: #1F90BD;
            font-size: 18px;
            color: #fff;
            float: right;
            margin: 10px 0;
            clear: both;
            padding: 10px 25px;
            transition: all 0.5s ease 0s;
        }

        .form-horizontal .name {
            padding: 10px 15px;
        }

        @media only screen and (max-width:767px) {
            .form-horizontal .control-label i {
                line-height: 40px;
            }

            .form-horizontal .captcha label {
                font-size: 13px;
            }
        }
    </style>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;"> Contact Us </h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> Contact</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="bg">
            <div class="container py-5">
                <div class=" text-center">
                    <h3 class="heading ">Permanent Campus</h3>
                   

                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="contactBox green">
                            <div class="service-content">
                                <div class="service-icon">
                                    <span><i class="fa fa-map"></i></span>
                                </div>
                                <h3 class="title">Our Address</h3>
                                <p class="description">Satarkul, Badda, Dhaka-1212, Bangladesh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                           <div class="contactBox green">
                            <div class="service-content">
                                <div class="service-icon">
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>
                                <h3 class="title">Email Us</h3>
                                <p class="description">admission@diu.net.bd</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="contactBox green">
                         <div class="service-content">
                             <div class="service-icon">
                                 <span><i class="fa fa-phone"></i></span>
                             </div>
                             <h3 class="title">Contact Us</h3>
                             <p class="description">+8809612111348</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6">
                    <div class="contactBox green">
                     <div class="service-content">
                         <div class="service-icon">
                             <span><i class="fa fa-registered"></i></span>
                         </div>
                         <h3 class="title">Register Here</h3>
                         <div class="description"><a href="https://admission.diu.ac/register" target="_blank">Register Now</a></div>
                     </div>
                 </div>
             </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/d/embed?mid=zpd50ugWdJd0.knmLtiVuBsXE"
        width="100%"
        height="500"></iframe> 

    <div class="bg" id="contact">
        <div class="container py-5">
            <div class=" col-md-8" style="margin: auto">
                <form class="form-horizontal" @submit.prevent="create()">
                    <div class="header">HAVE SOME QUESTION ?</div>
                    <div class="form-content">
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input v-model="contactForm.first_name" class="form-control"
                                        placeholder="Enter First Name" type="text">
                                    <label class="control-label"><i class="fa fa-phone"></i></label>
                                    <small v-if="errors.first_name" class="text-danger with-errors"
                                        v-html="errors.first_name[0]"></small>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input v-model="contactForm.last_name" class="form-control"
                                        placeholder="Enter Last Name" type="text">
                                    <label class="control-label"><i class="fa fa-user"></i></label>
                                    <small v-if="errors.last_name" class="text-danger with-errors"
                                        v-html="errors.last_name[0]"></small>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input v-model="contactForm.email" class="form-control" placeholder="Enter Email"
                                        type="email">
                                    <label class="control-label"><i class="fa fa-user"></i></label>
                                    <small v-if="errors.email" class="text-danger with-errors"
                                        v-html="errors.email[0]"></small>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input v-model="contactForm.subject" class="form-control" placeholder="Enter Subject"
                                        type="text">
                                    <label class="control-label"><i class="fa fa-user"></i></label>
                                    <small v-if="errors.subject" class="text-danger with-errors"
                                        v-html="errors.subject[0]"></small>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea v-model="contactForm.message" class="form-control" placeholder="Enter Message" type="text"
                                        style="height: 200px"></textarea>
                                    <label class="control-label"><i class="fa fa-user"></i></label>
                                    <small v-if="errors.message" class="text-danger with-errors"
                                        v-html="errors.message[0]"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer clearfix">
                        <button type="submit" class="btn btn-default">SEND</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#contact',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },
                    loading: false,
                    errors: '',

                    contactForm: {
                        first_name: '',
                        last_name: '',
                        email: '',
                        subject: '',
                        message: '',
                    },

                },

                methods: {
                    create() {
                        axios.post(`${this.config.base_path}/public-diu-website/contact-form`, this.contactForm)
                            .then((res) => {
                                console.log(res);
                                Swal.fire({
                                    position: "top-end",
                                    icon: "success",
                                    title: "Form Submitted Successfully",
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                                this.contactForm.first_name = '';
                                this.contactForm.last_name = '';
                                this.contactForm.email = '';
                                this.contactForm.subject = '';
                                this.contactForm.message = '';
                                this.errors = '';

                            }).catch((error) => {

                                console.log(error);

                                if (error.response.status == 422) {
                                    this.errors = error.response.data;
                                }
                            });

                    },

                },

               
            });



        });
    </script>
@endpush
