<style>
    .basic-intro{
    font-family: 'Poppins', sans-serif;
    padding: 25px 0 0;
    position: relative;
}
.basic-intro:after{
    content: '';
    display: block;
    clear: both;
}
.basic-intro .timeline{
    width: 65%;
    margin: -20px auto 0;
    padding: 30px 0 0 50px;
    float: left;
    position: relative;
}
.basic-intro .timeline-content{
    color: #333;
    background-color: #fff;
    padding: 20px 90px 20px 100px;
    border-radius: 20px;
    display: block;
    position: relative;
}
.basic-intro .timeline-content:hover{ text-decoration: none; }
.basic-intro .timeline-content:before{
    content: '';
    background: linear-gradient(to right bottom,#0D60A6,#0983D9);
    height: 150px;
    width: 150px;
    border-radius: 10px 0;
    position: absolute;
    left: -50px;
    top: -30px;
    clip-path: polygon(0 0, 0% 100%, 100% 0);
}
.basic-intro .timeline-count{
    color: #fff;
    background: linear-gradient(to right bottom,#0D60A6,#0983D9);
    font-size: 60px;
    font-weight: 600;
    text-align: center;
    line-height: 90px;
    height: 110px;
    width: 110px;
    border: 10px solid #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    border-radius: 50%;
    position: absolute;
    left: -30px;
    top: -10px;
}
.basic-intro .timeline-icon{
    color: #0D60A6;
    font-size: 40px;
    text-shadow: 0 0 5px rgba(0,0,0,0.1);
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    right: 20px;
}
.basic-intro .title{
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 7px 0;
}
.basic-intro .description{
    font-size: 16px;
    text-align: justify;
    line-height: 25px;
    color: #333;
    margin: 0;
}
.basic-intro .timeline:nth-child(even){
    float: right;
    margin: 0 auto;
}
.basic-intro .timeline:nth-child(4n+2) .timeline-content:before,
.basic-intro .timeline:nth-child(4n+2) .timeline-count{
    background: linear-gradient(to right bottom, #E61B91,#C42484);
}
.basic-intro .timeline:nth-child(4n+2) .timeline-icon{
    color: #C42484;
}
.basic-intro .timeline:nth-child(4n+3) .timeline-content:before,
.basic-intro .timeline:nth-child(4n+3) .timeline-count{
    background: linear-gradient(to right bottom, #0BC1A8,#31D2C3);
}
.basic-intro .timeline:nth-child(4n+3) .timeline-icon{
    color: #0BC1A8;
}
.basic-intro .timeline:nth-child(4n+4) .timeline-content:before,
.basic-intro .timeline:nth-child(4n+4) .timeline-count{
    background: linear-gradient(to right bottom, #FF8C00,#FCB100);
}
.basic-intro .timeline:nth-child(4n+4) .timeline-icon{
    color: #FF8C00;
}
@media screen and (max-width:990px){
    .basic-intro .timeline{ margin: -30px auto 0; }
}
@media screen and (max-width:767px){
    .basic-intro .timeline,
    .basic-intro .timeline:nth-child(even){
        width: 100%;
        min-height: 150px;
        padding: 20px 0 0 20px;
        margin: 0;
    }
    .basic-intro .timeline-content{ padding: 60px 20px 15px 20px; }
    .basic-intro .timeline-content:before{
        height: 100px;
        width: 100px;
        left: -20px;
        top: -20px;
    }
    .basic-intro .timeline-icon{
        transform: translateY(0);
        top: 5px;
    }
    .basic-intro .timeline-count{
        font-size: 40px;
        line-height: 50px;
        height: 95px;
        width: 95px;
        border-width: 5px;
        left: 0;
    }
}
@media screen and (max-width:567px){
    .basic-intro .title{
         font-size: 18px; 
        }
}


 

</style>
<section style="background: #E3DDDD">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-intro">
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="timeline-count"><img src="{{asset('assets/images/intro.png')}}" alt="" style="height: 70px"></span>
                            <h3 class="title pt-5 mb-3">INTRODUCTION</h3>
                            <div class="description">
                                {!! json_decode(json_encode($basic->data->introduction)) !!}
                            </div>
                         
                           
                        </a>
                    </div>
                    <div class="timeline my-4">
                        <a href="#" class="timeline-content">
                            <span class="timeline-count"><img src="{{asset('assets/images/mission.png')}}" alt="" style="height:90px;padding-bottom:10px"></span>
                            <h3 class="title pt-5 mb-3">MISSION</h3>
                            <div class="description">
                                {!! json_decode(json_encode($basic->data->mission)) !!}
                            </div>
                            
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <span class="timeline-count"><img src="{{asset('assets/images/vision.png')}}" alt="" style="height:95px;padding-bottom:10px"></span>
                            <h3 class="title pt-5 mb-3">VISION
                            </h3>
                            <div class="description">                                  
                                {!! json_decode(json_encode($basic->data->vission)) !!}
                            </div>
                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   
</section>


