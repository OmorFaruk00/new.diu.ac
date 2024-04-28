<style>
    .carousel-item img {
        height: 90vh;
        background-position: cover;
    }

    /* .carousel-caption {
        position: absolute;
        top: 50%;
        left: 15%;
        transform: translateY(-50%);
        width: 600px;
        text-align: left;
        background: rgba(4, 4, 4, 0.7);
        opacity: 0.85;
        padding: 20px;
        height: 25%;
        border-radius: 5px
    } */


    .btn-apply {
        color: #131313;
        background-color: #49B5E7;
        font-family: "Tilt Neon", sans-serif;
        font-size: 18px;
        font-weight: 700;
        text-transform: capitalize;
        letter-spacing: 1px;
        padding: 5px 15px;
        border-radius: 12px 12px;
        border: 2px solid #fff;
        overflow: hidden;
        position: relative;
        box-shadow: 0 2px 0 2px #000;
        transition: all 0.3s;
    }

    .btn-apply:hover {
        color: #fff;
        background: #4cc9f0;
        box-shadow: 0 2px 0 2px #0d3b66;
    }

    .btn-apply:before {
        content: "";
        background-color: #030202;
        width: 100px;
        height: 120%;
        transform: translate(-150%, -50%) skewX(30deg);
        position: absolute;
        top: 50%;
        transition: all 0.5s;
    }

    .btn-apply:hover:before {
        transform: translate(150%, -50%) skewX(30deg);
        transition-delay: 0.1s;
    }

    .carousel-caption h2 {
        font-size: 30px;
        color: #196bb8;
        line-height: 1.2;
        font-weight: 800;
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
        bottom: 10px;
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
        background-color: #126BAA !important;
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
            height: 50vh;
        }

        .carousel-desc {
            width: 100%;
        }

        .carousel-caption h2 {
            font-size: 22px;
        }

        .carousel-caption p {
            font-size: 14px;
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
            <img src="{{asset('assets/images/slider/slider1.jpeg')}}" class="d-block w-100"
                alt="...">
            <div class="carousel-caption">
                <h2 class="slide-in-left">Welcome To Dhaka International University</h2>
                <div class="mx-auto carousel-desc  slide-in-down ">
                    <p>Dhaka International University, rated among the top private universities of Bangladesh, is an
                        institution that promotes eastern culture and values, and meaningfully blends eastern and
                        western thoughts and innovation.</p>
                </div>
                <a href="https://admission.diu.ac/register" target="_blank" class="btn btn-apply slide-in-left">Apply Now</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slider/slider2.jpeg')}}" class="d-block w-100"
                alt="...">
            <div class="carousel-caption">
                <h2 class="slide-in-left">Admission Open Now</h2>
                <h2 class="slide-in-left" style="font-size: 27px">Undergraduate / Postgraduate 2024</h2>
                <div class="mx-auto carousel-desc  slide-in-down ">
                    <p style="font-size: 25px">Join us for higher study.</p>
                </div>
                <a href="https://admission.diu.ac/register" target="_blank" class="btn btn-apply slide-in-left">Apply Now</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slider/slider33.jpeg')}}" class="d-block w-100"
                alt="...">
            <div class="carousel-caption">
                <h2 class="slide-in-left">Result Based Scholarship</h2>
                <div class="mx-auto carousel-desc  slide-in-down ">
                    <p style="font-size: 30px">Avail Upto 50% Merit Scholarships</p>
                </div>
                <a href="{{route('scholarships')}}" target="_blank" class="btn btn-apply slide-in-left">Scholarship</a>
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
