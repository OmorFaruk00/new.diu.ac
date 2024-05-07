<style>
    .footerBox {
        color: #696969;
        font-family: 'Raleway', sans-serif;
        padding: 7px 20px 25px;
        position: relative;
        z-index: 1;
        background-image: url('{{asset('/assets/images/footer.jpg')}}');
        opacity: 0.9;

    }



    .footerBox .footerContact {
        color: #fff;
        background-color: rgb(34, 34, 34);       
        font-size: 50px;
        text-align: center;
        line-height: 100px;
        width: 100%;
        height: 160px;
        margin: -85px auto 60px;
        border-radius: 20px;
        box-shadow: 0 3px 0 5px rgba(0, 0, 0, 0.2);
    }

    .contact-title {
        margin-bottom: 10px;
        color: #ffffff;
        font-size: 20px;
    }

    @media only screen and (max-width: 690px) {
        .footerBox {
            margin: 0 0 40px;
        }

        .footerBox .footerContact {
            width: 100%;
            height: auto;
            margin: 10px auto 30px;

        }
        .contact-border{
        border: none !important

    }
    }

    .contact {
        line-height: 20px;
        margin-top: 20px;


    }

    .contact p {
        font-size: 14px;


    }

    .contact h3 {
        margin-bottom: 10px;
        color: #ffffff;
        font-size: 24px;
        padding-top: 10px;
        font-weight: 800
    }

    .footer-links ul li a {
        color: #e8e8e8 !important;
        line-height: 35px;
        font-size: 14px
    }
    .footer-links ul li a:hover {
        color: #ff3115 !important;
    }

    .footer-links h4 {
        color: #fff !important;
        font-weight: 700;
        margin-bottom: 20px;
        
    }

    .footer-links p {
        color: #e8e8e8 !important;
        font-weight: 400
    }

    .contact i {
        color: #ff3115;
    }

    .copyright {
        color: #fff !important;
        text-align: center;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        padding-top: 20px;
        margin-top: 35px;
    }

    .copy {
        color: #ff3115;
        font-weight: 800;
    }
    .contact-border{
        border-right: 1px solid rgba(255, 255, 255, 0.15);
        border-left: 1px solid rgba(255, 255, 255, 0.15);

    }
</style>

<div style="">
    <div class="" style="margin-top: 100px">

        <div class="footerBox">

            <div class="container">
                <div class="footerContact">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 contact">
                            <i class="fa  fa-map-marker"></i>
                            <h3 class="contact-title">Address</h3>
                            <p>Satarkul, Badda, Dhaka-1212, Bangladesh.</p>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 contact contact-border">
                            <i class="fa fa-phone"></i>
                            <h3>Phone Number</h3>
                            <p>+88 01611348344</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 contact">
                            <i class="fa fa-envelope"></i>
                            <h3>Email Address</h3>
                            <p>inf@diu-bd.net</p>

                        </div>

                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-2 col-md-6 footer-links mb-3">

                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo2.png') }}" class="mb-3"
                                alt="DIU Logo" style="height: 100px; width:100%"></a>

                    </div>
                    <div class="col-lg-2 col-md-6 footer-links mb-3">
                        <h4>CONTACT US</h4>
                        <p>Dhaka International University, rated among the top private universities of
                            Bangladesh,<br><br>

                            is an institution that promotes eastern culture and values, and meaningfully blends eastern
                            and western thoughts and innovation.
                          
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links mb-3">
                        <h4>USEFUL LINKS</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="http://www.ugc-universities.gov.bd/university-detail/73" target="_blank">UGC
                                    Website</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://jobs.diu.ac/"
                                    target="_blank">Career</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://students.diu.ac/"
                                    target="_blank">Students Portal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://admission.diu.ac/"
                                    target="_blank">Admission Website</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://international.diu.ac/"
                                    target="_blank">International Admission</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links mb-4">
                        <h4>USEFUL LINKS</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://blog.diu.ac/"
                                    target="_blank">Blog</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a
                                    href="https://ibank.eximbankbd.com/eximIBank/eximIBank/login/loginForm?error=1"
                                    target="_blank">Online Payment</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://hotjobs.com.bd/"
                                    target="_blank">Find Jobs</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index#hero">Apply Now</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>



                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-links mb-3">
                        <iframe src="https://www.google.com/maps/d/embed?mid=zpd50ugWdJd0.knmLtiVuBsXE" width="100%"
                            height="250px"></iframe>
                    </div>
                </div>

            </div>


            <div class=" text-center">
                <div class="copyright">
                    &copy; 2024 <strong class="copy">DIU</strong>. All rights Reserved. | Developed & Powered by:
                    <strong class="copy">IT-Team,
                        DIU</strong>
                </div>

            </div>

        </div>
    </div>
</div>
