@extends('layouts.master')
@section('content')
<style>
    .cellBox{
    color: #606060;
    background-color: #f5f5f5;
    font-family: 'Noto Sans', sans-serif;
    text-align: center;
    padding:0 10px 20px;
    margin: 25px 0 0;
    border: 1px solid transparent;
    border-bottom: 10px solid #01AFD2;
    border-radius: 0 30px;
}
.cellBox .cell-icon{
    color: #fff;
    background: #01AFD2;
    font-size: 35px;
    padding: 5px 40px;
    margin: -30px 0 0 0;
    box-shadow: 0 -10px 10px -5px rgba(0,0,0,0.2) inset;
    border-radius: 15px 15px 0 0;
    display: inline-block;
    transition: all 0.3s;
}
.cellBox .cell-icon i{
    transform: rotate(0deg);
    transition: all 0.3s ease 0s;
}
.cellBox:hover .cell-icon i{
    text-shadow: 0 0 5px #555;
    transform: rotate(360deg);
}
/* .cellBox:hover .title{
color: #000 !important;
} */
.cellBox .cell-content{
    background-color: #fff;
    padding: 30px 10px 10px;
    border-radius: 10px;
    box-shadow: 0 0 7px 3px rgba(0,0,0,0.2);
}
.cellBox .title{
    color: #01AFD2;
    font-size: 22px;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.cellBox .description{
    font-size: 17px;
    text-align: center;
    line-height: 25px;
    margin-bottom: 20px;
    color: gray;
    font-weight: 400;
    text-align: justify;
    padding: 0px 10px;
}
.cellBox img{
    height: 400px;
    width: 100%;
    margin-top: 20px;
    border-radius: 10px;
}
.cell:hover{
    color: #000 !important;
}


@media only screen and (max-width:990px){
    .cellBox{ margin: 25px 0 50px; }
}

</style>
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h3 style="text-transform:uppercase;margin-top:5px">  Centre for Excellence and Career development( CECD )</h3>
            <ol>
                <li><a href="{{ route('home') }}">Home</a> </li>
                <li>Cell</li>
                <li>CECD</li>
            </ol>
        </div>
        
    </div>
</section>
<!-- End Breadcrumbs -->


<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 mx-auto">
                <div class="cellBox">
                    <div class="cell-icon">
                        <span><i class="fa fa-home" aria-hidden="true"></i></span>
                    </div>
                    <div class="cell-content">
                       <h3 class="title">Centre for Excellence and Career development( CECD )</h3>
                        <p class="description">Centre for Excellence and Career Development (CECD) of Dhaka International University is working with the goal to develop students’ language proficiency, creative writing, professional skills and career guidance. CECD language experts focus on conducting student-centered, creative language teaching techniques, and individual guidance based on classroom activities in developing students’ language proficiency. This centre also helps the students enhance their personal qualities for the development of their career paths to choose from aspiration. It incorporates the students in movie fest, language club, workshops, seminars, and conferences regularly, where they can get the touch of national and international professionals. The centre also encourages the learners to have the students’ creative writing by dint of publishing literary magazines, which would build students’ innovative qualities and make them unique throughout the competitive world.</p>
                    </div>
                    {{-- <img src="{{ asset('assets/img/campuslife/health.png') }}" alt="Outdoor-Activities" /> --}}
                </div>
            </div>
         
        </div>
    </div>
</section>
@endsection