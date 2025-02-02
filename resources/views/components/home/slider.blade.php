<style>
    .carousel-item img {
        height: 100vh;
        background-position: cover;
        /* background-color: rgba(0, 0, 0, 0.9); */
        /* background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.9) 100%); */
    }

    .caption1-bg {
        background: rgba(4, 4, 4, 0.7);
        opacity: 0.85;
        border-radius: 10px;

    }

    .caption-bg1 {
        background: rgba(4, 4, 4, 0.7);
        opacity: 0.85;
        border-radius: 10px;
        width: 50%;
        height: 230px;
        float: left !important;
        padding: 20px 10px;
        position: absolute;
        top: 55%;
        left: 10%;
        transform: translate(-10%, -40%);

    }

    .caption-bg2 {
        background: rgba(4, 4, 4, 0.7);
        opacity: 0.85;
        border-radius: 10px;
        width: 50%;
        height: 230px;
        float: left !important;
        padding: 20px 10px;
        position: absolute;
        top: 60%;
        right: 5% !important;
        transform: translate(50%, -30%);

    }


    .carousel-caption h2 {
        font-size: 30px;
        color: #01AA4D;
        line-height: 1.2;
        font-weight: 900;
    }
    .carousel-caption h6 {
        font-size: 30px;
        /* color: #01AA4D; */
        color: #F6880C;
        line-height: 1.2;
        font-weight: 900;
    }

    .carousel-desc {
        width: 80%;
    }

    .carousel-caption p {
        font-size: 15px;
        color: #fff;
        line-height: 1.2;
        font-weight: 600;


    }



    .carousel-indicators {
        bottom: 20px;
    }

    .carousel-indicators button {
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        width: 10px !important;
        height: 10px !important;
        border-radius: 50%;
        margin-bottom: -100px !important;
        /* margin: 10px 5px; */
    }

    .carousel-indicators .active {
        background-color: #01AA4D !important;
        font-weight: 600;
    }

    .carousel-control-prev,
    .carousel-control-next {
        display: none;
    }

    .slide-in-left {
        animation: slideInLeftAnimation 1s ease-in forwards;
        opacity: 0;
        transform: translateX(-100%);
    }

    @keyframes slideInLeftAnimation {
        from {
            opacity: 0;
            transform: translateX(-100%);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .slide-in-down {
        animation: slideInDownAnimation 1s ease-in forwards;
        opacity: 0;
        transform: translateY(-100%);
    }

    @keyframes slideInDownAnimation {
        from {
            opacity: 0;
            transform: translateY(-100%);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (min-width: 1100px) and (max-width: 1300px) {
        .carousel-caption h2 {
            font-size: 40px;
        }

        .carousel-caption p {
            font-size: 18px;
        }

    }

    @media (min-width: 1320px) {

        .carousel-caption h2 {
            font-size: 50px;
        }

        .carousel-caption p {
            font-size: 20px;
        }
    }

    @media (max-width: 992px) {
        .carousel-item img {
            height: 60vh;
        }

        .caption-bg1 {
            width: 90%;
            height: 250px;
            margin-left: 5%;
        }

        .caption-bg2 {
            width: 90%;
            height: 230px;
            padding: 20px 10px;
            position: absolute;
            top: 55%;
            right: 5%;
            transform: translate(-10%, -30%);

        }

        .carousel-desc {
            width: 100%;
        }

        .carousel-caption h2 {
            font-size: 22px;
        }

        .carousel-caption p {
            font-size: 12px;
            /* width: 80%; */
        }
    }
</style>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/slider/s11.jpeg')}}" class="d-block w-100"
                alt="slider1">
            <div class="carousel-caption caption1-bg " style="margin-bottom:30px">
                <h2 class="slide-in-left">Welcome To Dhaka International University</h2>
                <div class="mx-auto carousel-desc  slide-in-down ">
                    <p>Dhaka International University, rated among the top private universities of Bangladesh, is an
                        institution that promotes eastern culture and values, and meaningfully blends eastern and
                        western thoughts and innovation.</p>
                </div>
                <a href="https://admission.diu.ac/register" target="_blank" class="btn slide-in-left">Apply Now</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slider/s22.jpeg')}}" class="d-block w-100"
                alt="slider2">
            <div class="carousel-caption caption-bg1">
                <h2 class="slide-in-left">Admission Open Now</h2>
                <h6 class="slide-in-left" style="font-size: 27px">Undergraduate - Postgraduate {{ now()->year }}</h6>
                <div class="mx-auto carousel-desc  slide-in-down ">
                    <p style="font-size: 25px">Join us for higher study</p>
                </div>
                <a href="https://admission.diu.ac/register" target="_blank" class="btn slide-in-left">Apply Now</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slider/s33.jpeg') }}" class="d-block w-100" alt="slider3">
            <div class="carousel-caption caption-bg2">
                <h2 class="slide-in-left">Result Based Scholarship</h2>
                <div class="mx-auto carousel-desc  slide-in-down ">
                    <p style="font-size: 30px">Avail Upto 50% Merit Scholarships</p>
                </div>
                <a href="{{ route('scholarships') }}" target="_blank" class="btn slide-in-left">Scholarship</a>
            </div>
        </div>




    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
