<style>
       .founder-bg {
        background: url("{{ asset('/assets/images/founder-bg.jpeg') }}") ;
        /* background-color: rgba(0, 0, 0, 0.5); */
        opacity: 0.8;
        background-blend-mode: overlay;
        background-size: cover;
        background-position: center;
    }
    .founder{
    border-radius: 12%;
    padding: 25px;    
    box-shadow: 0 1px 9px 1px rgba(25, 47, 89, 0.42);
    margin: 30px 0px;

    }
    .founder img{
        width: 100%;
        height: 250px;
    }
    .founder-desc {
        padding: 0px 30px;
  
    }
    .founder-desc p{
    color:#6c6a6a;
    font-size: 16px;
    font-weight: 500;
    line-height: 20px;
    text-align: justify;
    margin-bottom: 20px;
    }
    .founder-desc .name{
        font-size: 18px; 
        font-weight: 800;
        color:#01AA4D;
    }
    .founder-desc .des{
        font-size: 22px; 
        font-weight: 600;
        color:#6c6a6a;
    }
  
</style>

<div style="background:" class="founder-bg py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="founder">
                    <img src="https://new.diu.ac.bd/assets/images/founder.jpg" alt="founder">

                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 my-auto">
                <div class="founder-desc">
                    <p>Dhaka International University was founded by Late Alhaj Professor Dr. A.B.M. Mafizul Islam Patwari. He was a Professor of the Department of Law, University of Dhaka, Bangladesh. It may be observed that Dhaka International University is perhaps the only private university which was established by a person who was basically an academician.</p>
                    <p>He established this university with high hopes and aspirations to disseminate knowledge and thus to extend the horizon of knowledge. That is why, the slogan of DIU is the universal adage, “Knowledge is Power.” DIU wants to generate this power among individuals through teaching, training and guidance by using age worthy, pragmatic and well-designed curricula and syllabi.</p>
                    <p class="name">Late Alhaj Professor Dr. A.B.M. Mafizul Islam Patwari</p>
                    <p class="des">Founder</p>

                </div>
            </div>
        </div>
    </div>
    <x-home.chairman />
</div>