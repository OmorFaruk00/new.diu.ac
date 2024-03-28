@extends('layouts.master')
@section('content')
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Business Analytics Laboratory</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Business Analytics Laboratory</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <section class="inner-page internship">
        <img src="assets/img/page-headers/business-analytical.jpg" alt="business-analytical" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Business <br>analytics</h2>
        <p>Inspiring Innovation <br>Advancing Knowledge</p>
        </div>

        <div class="container my-4">

            <div class="row">
                <div class="col-12">
                    <h3>Business Analytics Laboratory</h3>
                    <p>
                    At the KLH-Global Business School (KLH GBS) campus in Kondapur, a state-of-the-art Business Analytics Laboratory was recently inaugurated. Dr. Ramakrishna, Director of KLH GBS, Mr. Sai Ram Vedam, CMO for Cignit Technologies, Mr. Kiran Kuchimanchi, 
                    President of Digital Engineering Services, Mr. Nagendra V. Chowdary, Head of Academic Content TimesPRO, and other University officials, faculty members, and students attended the laboratory inauguration.  
                    </p>
                   <p><b>Purpose of the Lab:</b> To provide researchers and students with cutting-edge infrastructure so they can investigate challenges in a range of business fields, such as marketing, operations management, and technology management,
                     using a variety of advanced computational and statistical methodologies. Additionally, the lab will aid students with superior decision-making skills for their professional careers in all fields.</p>
                     <p>
                     <b>Hands-on experience:</b>  The lab will give students the necessary hands-on experience with the software and develop their skills in accordance with the demands of today’s market conditions. 
                     Data processing functions, graphing, and direct marketing features would be available in the software. The software interface displays open data in its main view in a manner akin to a spreadsheet.
                     </p>
                     <p>
                     <b>The specialty of the Lab:</b> The Business Analytics Laboratory is equipped with high-end configuration systems and important software installed that
                      includes SPSS-Statistical Package for the Social Sciences- Data analysis for descriptive and bivariate statistics, predictions for group identification, numerical result forecasts, Power-BI, and R-Programming.
                     </p>
                    


                </div>
            </div>

        </div>
    </section>

</main>
@endsection