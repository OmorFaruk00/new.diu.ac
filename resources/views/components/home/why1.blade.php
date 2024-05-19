<style>
    :root {
        --main-color: #ec3a26;
    }

    .serviceBox {
        color: var(--main-color);
        background: repeating-linear-gradient(45deg, #fff, #fff 15px, #fdfbfb 15px, #fdfbfb 30px);
        font-family: 'Poppins', sans-serif;
        text-align: center;
        padding: 25px 15px;
        border-radius: 15px 0;
        /* opacity: 0.6; */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2), 5px 5px 0 var(--main-color);
    }

    .serviceBox .service-icon {
        background: #fff;
        font-size: 40px;
        line-height: 70px;
        width: 80px;
        height: 80px;
        border: 5px solid var(--main-color);
        box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.1);
        border-radius: 50px/20px;
        margin: 0 auto 20px;
    }

    .serviceBox .title {
        color: var(--main-color);
        font-size: 17px;
        font-weight: 800;
        text-transform: uppercase;
        margin: 0 0 10px;
    }

    .serviceBox .description {
        color: #888;
        font-size: 14px;
        letter-spacing: 0.5px;
        line-height: 22px;
        margin: 0;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: justify;
    }

    .serviceBox.pink {
        --main-color: #306ad7;
    }

    .serviceBox.purple {
        --main-color: #1d4c0e;
    }

    .serviceBox.green {
        --main-color: #4CB900;
    }

    @media only screen and (max-width: 1199px) {
        .serviceBox {
            margin: 0 0 40px;
        }
    }
</style>
<section id="" class="" style="background: #fff";>
    <div class="container pb-4">
        <div class="text-center">
            <h4 class="heading">Why Join Dhaka International University </h4>
        </div>

        <div class="row pb-5">
            <div class=" col-lg-3 col-md-6 col-sm-12">
                <div class="serviceBox">
                    <div class="service-icon">
                        <span><i class="fa fa-cube" aria-hidden="true"></i></span>
                    </div>
                    <h3 class="title">Trending Courses</h3>
                    <p class="description">We always try to teach trending courses. Our goal is to keep
                        ourselves up to date in this new technology era.</p>
                </div>
            </div>
            <div class=" col-lg-3 col-md-6 col-sm-12">
                <div class="serviceBox green">
                    <div class="service-icon">
                        <span><i class="fa fa-book"></i></span>
                    </div>
                    <h3 class="title">Books And Library</h3>
                    <p class="description">Due to the explosion of knowledge in both traditional and digital
                        forms, DIU Library has developed a system that is capable of serving the best of its
                        users. DIU Library is working closely with faculties to integrate resources and also
                        to ensure that our collections meet with needs of our teaching and research
                        programs.</p>
                </div>
            </div>
            <div class=" col-lg-3 col-md-6 col-sm-12">
                <div class="serviceBox pink">
                    <div class="service-icon">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <h3 class="title">Qualified Teachers</h3>
                    <p class="description">We believe in quality and for this reason we have qualified and high
                        quality skilled teachers.</p>
                </div>
            </div>
            <div class=" col-lg-3 col-md-6 col-sm-12">
                <div class="serviceBox purple">
                    <div class="service-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3 class="title">Certification</h3>
                    <p class="description">We provide certification courses. Global certification is essential
                        for one's career growth.</p>
                </div>
            </div>
        </div>

    </div>
</section>
