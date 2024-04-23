<style>
    .carousel-item img {
        height: 90vh;
    }

    .carousel-caption {
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
    }

    .carousel-caption h2 {
        font-size: 40px;
        color: #fff;
        line-height: 1.2;
        font-weight: 600;
    }

    .carousel-caption p {
        font-size: 20px;
        color: #fff;
        line-height: 1.2;
        font-weight: 600;
        width: 90%;
    }

    .btn-apply {
        background: #1370B0;
        font-weight: 800;
        color: #fff;
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
        margin: 0 5px;
    }

    .carousel-indicators .active {
        background-color: #126BAA !important;
        font-weight: 600;
    }
    .carousel-control-prev, .carousel-control-next{
        display: none;
    }

    @media (max-width: 992px) {
        .carousel-item img {
            height: 50vh;
        }

        .carousel-caption {
            width: 100%;
            height: auto;
            left: 3%;

        }

        .carousel-caption h2 {
            font-size: 25px;
        }

        .carousel-caption p {
            font-size: 15px;
            width: 80%;
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
            <img src="https://api.diu.ac//images/diuac/slider/1645782053_mQWljISv7w.jpg" class="d-block w-100"
                alt="...">
            <div class="carousel-caption">
                <h2>Lorem ipsum dolor sit amet!</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid,sit amet consectetur </p>
                <button class="btn btn-apply">Apply Now</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://api.diu.ac//images/diuac/slider/1647671629_tOp7rDOnU5.jpg" class="d-block w-100"
                alt="...">
            {{-- <div class="carousel-caption d-none d-md-block">
            <h2>Lorem ipsum dolor sit amet!</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid,sit amet consectetur  </p>
            <button class="btn btn-apply">Apply Now</button>
        </div> --}}
        </div>
        <div class="carousel-item">
            <img src="https://api.diu.ac//images/diuac/slider/1709189510_qYwcxsznO0.jpg" class="d-block w-100"
                alt="...">
            <div class="carousel-caption ">
                <h2>Lorem ipsum dolor sit amet!</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo aliquid,sit amet consectetur </p>
                <button class="btn btn-apply">Learn More</button>
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
