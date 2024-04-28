<style>
    .counter{
    background: #fff;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    padding: 15px;
    border: 15px solid #e7e7e7;
    border-radius: 15px;
} 
.counter .counter-icon{
    color: #000;
    background-color: #E7E7E7;
    font-size: 35px;
    line-height: 70px;
    width: 70px;
    height: 70px;
    margin: 0 auto 15px;
    border-radius: 50%;
}
.counter .counter-value{
    color: #222;
    font-size: 35px;
    font-weight: 300;
    margin: 0 0 17px;
    display: block;
}
.counter h3{
    color: #000;
    background-color: #E7E7E7;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: capitalize;
    padding: 8px 5px;
    margin: 0;
    border-radius: 15px;
    height: 55px;
}
.counter.red .counter-icon,
.counter.red h3{
    background-color: #E7E7E7;
    color: #000
}
.counter.purple .counter-icon,
.counter.purple h3{
    background-color: #E7E7E7;
    color: #000
}
.counter.orange .counter-icon,
.counter.orange h3{
    background-color: #E7E7E7;
    color: #000
}
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
    .counter h3{
        font-size: 15px;
    }
}   
</style>

<div class="container">
    <div class="text-center">
        <h4 class="heading">CURRENT STATISTICS: OUR STRENGTH </h4>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="counter">  
                <div class="counter-icon"><i class="fa fa-globe"></i></div>  
                <span class="counter-value">423</span>
                <h3>CURRENT FOREIGN STUDENTS</h3>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter red">
                <div class="counter-icon"><i class="fa fa-user"></i></div>
                <span class="counter-value">6973</span>
                <h3 style="padding-top:18px">CURRENT STUDENTS</h3>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter purple">  
                <div class="counter-icon"><i class="fa fa-users"></i></div>  
                <span class="counter-value">397</span>
                <h3>FULL TIME TEACHERS AND EMPLOYEES</h3>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter orange">  
                <div class="counter-icon"><i class="fa fa-graduation-cap"></i></div>  
                <span class="counter-value">19364</span>
                <h3 style="padding-top:18px">NUMBER OF ALUMNI</h3>
            </div>
        </div>
    </div>
</div>
<script>
 
 $(document).ready(function(){
     $('.counter-value').each(function(){
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
         },{
             duration: 3500,
             easing: 'swing',
             step: function (now){
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });
</script>