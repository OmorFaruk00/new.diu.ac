@extends('layouts.master')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Campus Life</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Campus Life</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <img src="assets/img/page-headers/campus-life.jpg" alt="MOUS" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Campus Life</h2>
        <p> Live Your College Life to the Fullest</p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="py-3">
                <div class="row  align-items-center">
                    <div class="col-md-3">
                        <img src="assets/img/campus-life/Navaneet.jpg" alt="Navaneet" class="img-responsive mx-auto d-block" style="border-radius: 50%;">
                    </div>
                    <div class="col-md-8 my-4">
                        <p>Studying at KLH GBS so far has been a joyful experience. Being a lateral entry student, I am grateful to the faculty of the college for helping me have a smooth transition into the university’s curriculum. I couldn’t be happier with the college’s holistic approach to education by testing the analytical and practical skills of the students with challenging case studies and interactive sessions conducted by highly specialized faculties. The college is well equipped with resources and recreational facilities that add to the advantage of the students. I am indeed acquiring and developing skills that are relevant to my career aspiration with the help of an innovative and entrepreneurial course plan, which is designed according to global and industry standards.
                        </p>
                        <p><b>Navaneet, II BBA</b></p>
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row  align-items-center">
                    <div class="col-md-8 my-4 order-2 order-md-1">
                        <p>College life is known as one of the most memorable years of one’s life. And surely, KLH GBS has changed my life in many ways. This institution exposed me to some new situations that I never came across in my school life. It was a breath of fresh air. It has helped me a lot with my education and social life. It has taught me to be responsible, independent, confident, and composed. I surprised myself. KLH GBS's experienced faculty has provided us with all the required tools to become future business leaders. Life at GBS is a life of freedom because it gives a feeling of being an adult and at the same time helping out with necessary needs.</p>
                        <p>No doubt, KLH GBS is my pathway to a brighter future.</p>
                        <p><b>Shainitha, II BBA</b></p>
                    </div>
                    <div class="col-md-3 order-1 order-md-2">
                        <img src="assets/img/campus-life/Shainitha.jpg" alt="Shainitha" class="img-responsive mx-auto d-block" style="border-radius: 50%;">
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row  align-items-center">
                    <div class="col-md-3">
                        <img src="assets/img/campus-life/B-Kalpana.jpg" alt="B Kalpana" class="img-responsive mx-auto d-block" style="border-radius: 50%;">
                    </div>
                    <div class="col-md-8 my-4">
                        <p>
                            On my first day at KLH GBS, one of my classmates asked me why I joined KLH. I said the A++ NAAC grade and top NIRF rank got me into the KLH GBS. Just a couple of weeks into my bachelor's, I realized that KLH is more than just a good rank. It provides access and resources that I never imagined. In class, I heard new perspectives from my classmates or the case protagonist themselves, which helped me learn and grow into a better version of myself. With frequent Guest lecturers from various industry experts and internships gave me better insights into the business markets out there and prepared me for real-life experiences. With top-notch faculty and world-class infrastructure, KLH GBS is a dream place for any kid with big dreams.
                        </p>
                        <p><b>B. Kalpana, II BBA</b></p>
                    </div>
                </div>
            </div>
            <div class="py-3">
                <div class="row align-items-center">
                    <div class="col-md-8 my-4 order-2 order-md-1">
                        <p>
                            KLH Global Business School provided me with a practical and engaging curriculum, excellent faculty support, and top-notch facilities. The hands-on learning opportunities, such as internships and project-based coursework, were valuable, and I feel well-prepared for my future career. As a student studying BBA Marketing specialization, I was provided with insights into the latest marketing trends and strategies, as well as valuable career guidance and networking opportunities. I highly recommend this institution to anyone seeking a high-quality business education.
                        </p>
                        <p><b>Mahati Bala, III BBA</b></p>
                    </div>
                    <div class="col-md-3 order-1 order-md-2">
                        <img src="assets/img/campus-life/Mahati-Bala.jpg" alt="Mahati Bala" class="img-responsive mx-auto d-block" style="border-radius: 50%;">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container my-3">
            <div class="row">
            <h2 class="text-center"><b>Campus Life Video</b></h2>
                <div class="col-6 offset-3">
                <iframe width="600" height="400" src="https://www.youtube.com/embed/R2iaOYhlIuI" title="KLHGBS | A Business School that can help you achieve your career goals" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>



</main>
@endsection