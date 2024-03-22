<section id="section-6">
    <div class="section-6-back">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="my-5">
                        CAMPUS LIFE
                    </h2>
                </div>
                <div class="col-12">
                    <h4 class="my-2">
                        LEARN WITH LOVE. PLAY WITH PASSION
                    </h4>
                </div>
                <div class="col-12">
                    <p class="my-3">
                        At DIU, campus life is vibrant and active.
                        With access to a wide range of clubs, organizations, and activities, our students are able to
                        find a place to get involved, build relationships, and create lasting memories.
                    </p>
                </div>
            </div>
            <div class="owl-carousel owl-theme" id="campuslife">
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/1.jpg') }}" alt="campus life" class="img-fluid" />
                        <div class="mybar mybar-one"></div>
                        <p><span>Our Campus Life</span></p>
                        <h6>DIU offers well-decorated hostel with modern facilities.At present there are seven boys
                            hostel (Nikunja, Khilkhet and Satarkul, Badda) and two girls hostels (Green Road &
                            Satarkul).</h6>
                    </div>
                </div>
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/2.jpg') }}" alt="Student-Activities"
                            class="img-fluid" />
                        <div class="mybar mybar-two"></div>
                        <p><span>Hostel</span></p>
                        <h6>DIU offers well-decorated hostel with modern facilities.At present there are seven boys
                            hostel (Nikunja, Khilkhet and Satarkul, Badda) and two girls hostels (Green Road &
                            Satarkul). </h6>
                    </div>
                </div>
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/3.jpg') }}" alt="Outdoor-Activities"
                            class="img-fluid" />
                        <div class="mybar mybar-three"></div>
                        <p><span>Labs</span></p>
                        <h6>DIU has 8 Pharmacy labs, 10 Computer labs, 12 EETE labs & 10 Civil Labs. All labs are
                            designed by the experts from DU and BUET, and equipped with modern appliances. </h6>
                    </div>
                </div>
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/4.jpg') }}" alt="Outdoor-Activities"
                            class="img-fluid" />
                        <div class="mybar mybar-three"></div>
                        <p><span>Library</span></p>
                        <h6>DIU library is equipped with up-to-date books and reading materials. More than fifty (50)
                            thousand books are available at DIU libraby. E-library has already been started. </h6>
                    </div>
                </div>
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/5.jpg') }}" alt="Outdoor-Activities"
                            class="img-fluid" />
                        <div class="mybar mybar-three"></div>
                        <p><span>Canteen & Common Rooms </span></p>
                        <h6>DIU has its own catering service and each building has big common & leisure rooms.</h6>
                    </div>
                </div>
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/6.jpg') }}" alt="Outdoor-Activities"
                            class="img-fluid" />
                        <div class="mybar mybar-three"></div>
                        <p><span>Wi-Fi and Internet</span></p>
                        <h6>D'All DIU compuses are under Wi-Fi facilities. Internet facilities are available for all
                            students.</h6>
                    </div>
                </div>
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/7.jpg') }}" alt="Outdoor-Activities"
                            class="img-fluid" />
                        <div class="mybar mybar-three"></div>
                        <p><span>Class Rooms</span></p>
                        <h6>All class rooms of DIU are spacious, well-decorated, and equipped with multimedia projector.
                        </h6>
                    </div>
                </div>
                <div class="item">
                    <div class="section-6-card">
                        <img src="{{ asset('assets/img/campuslife/8.jpg') }}" alt="Outdoor-Activities"
                            class="img-fluid" />
                        <div class="mybar mybar-three"></div>
                        <p><span>Medium of Instruction</span></p>
                        <h6>English is the medium of instruction for all programs at DIU.</h6>
                    </div>
                </div>

            </div>


        </div>
    </div>
</section>
<script>
    var owl = $('#campuslife');
    owl.owlCarousel({
        margin: 20,
        dots: true,
        nav: true,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });
</script>
