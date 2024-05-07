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
.cellBox:hover .title{
color: #34A12C !important;
}
.cellBox .cell-content{
    background-color: #fff;
    padding: 30px 10px 10px;
    border-radius: 10px;
    box-shadow: 0 0 7px 3px rgba(0,0,0,0.2);
}
.cellBox .title{
    color: #01AFD2;
    font-size: 22px;
    font-weight: 700;
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
    height: 200px;
    width: 200px;
    margin-bottom: 20px;
}
@media only screen and (max-width:990px){
    .cellBox{ margin: 25px 0 50px; }
}

</style>
 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="https://tcrcdiu.org" class="text-white cell" target="_blank"> <h3 style="text-transform:uppercase;margin-top:5px">Tobacco Control and Research Cell (TCRC)</h3></a>
            <ol>
                <li><a href="{{ route('home') }}">Home</a> </li>
                <li>Cell</li>
                <li>TCRC</li>
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
                        <a href="https://tcrcdiu.org" target="_blank">
                            <img src="{{asset('assets/images/cell/tcrc.jpg')}}" alt="" >
                        </a>  
                        <a href="https://tcrcdiu.org" target="_blank"><h3 class="title">Tobacco Control and Research Cell (TCRC)</h3></a>
                        <p class="description">Stop tobacco cultivation and grow food for creating a better living place for the next generation,” with this vision Dhaka International University has established Tobacco Control and Research Cell (TCRC) on March 2nd 2013. Bangladesh is a small and densely populated poor country having about 153.2 million people, about 80 percent of whom are living in rural areas. This country is a disaster-prone area having been stricken by drought and flood with a range of health and environmental problems happening from dengue and cholera to arsenic contamination of the water supply. It should come as no surprise, then, that tobacco control has neither gained much attention nor been considered a priority. With so many competing causes of disease and with nearly half of the population living below the poverty line and consuming less than 2,122 calories per day (Bangladesh Bureau of Statistics 2012a), tobacco has generally seemed too remote and insignificant issue to be on the country’s agenda of concerns. Yet tobacco use is widespread and increasing rapidly and knowledge about the harm it causes to health is very low. Though, other causes of death still dominate tobacco use contributes a nontrivial amount to the overall burden of disease and death. And it has become clear and significant that immediate negative effects on the welfare of poor families, when scarce resources that could be used for food are spending on tobacco. Tobacco cultivation can be basically termed as ‘Contract farming’, because in majority of the cases the cultivation of tobacco is contracted with a large business organization or multinational company.</p>
                    </div>
                    {{-- <img src="{{ asset('assets/img/campuslife/health.png') }}" alt="Outdoor-Activities" /> --}}
                </div>
            </div>
         
        </div>
    </div>
</section>
@endsection