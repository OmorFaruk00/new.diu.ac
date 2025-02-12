<style>
    :root{ 
    --white: #fff;
    --color1: #20bf6b;
    --color2: #EEEEEE;
}
.counter{
    color: var(--color1);
    background: linear-gradient(to bottom, var(--color1) 19%, var(--color2) 19%,var(--color2) 84%,var(--color1) 0%);
    font-family: 'Alegreya Sans', sans-serif;
    text-align: center;
    width: 210px;
    height: 210px;
    border-radius: 100px 100px;
    padding: 46px 10px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}
.counter:before,
.counter:after{
    content:"";
    width: calc(100% - 15px);
    height: calc(100% - 15px);
    border-radius: 100px 100px;
    border: 3px solid var(--color1);
    transform: translateX(-50%) translateY(-50%);
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: -1;
}
.counter:after{
    background: var(--white);
    width: calc(100% - 35px);
    height: calc(100% - 35px); 
    border: none;
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
}
.counter .counter-icon{
    font-size: 30px;
    line-height: 30px;
    margin: 0 0 15px;
}
.counter h3{
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.counter .counter-value{
    font-size: 33px;
    font-weight: 600;
    line-height: 33px;
    display: block;
}
.counter.blue{ --color1: #2f91ec; }
.counter.green{ --color1: #4b7f0f; }
.counter.orange{ --color1: #EC721F; }
.counter.pink{ --color1: #f368e0; }
.counter.purple{ --color1: #8854d0; }
@media screen and (max-width:990px){
    .counter{ margin-bottom: 40px; }
}   
</style>

<div style="background: #fff">
    <div class="container py-5" id="counterData">
        <div class="text-center">
            <h4 class="heading">CURRENT STATISTICS: OUR STRENGTH </h4>
        </div>
        <div class="row">
            <div class=" col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="counter">
                    <div class="counter-icon">
                        <span><i class="fa fa-book"></i></span>
                    </div>
                    <h3>Academic Programs</h3>
                    <span class="counter-value">{{$counter->student->program ?? 0}}</span>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="counter blue">
                    <div class="counter-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3>Convocatons</h3>
                    <span class="counter-value">{{$counter->convocation ?? 0}}</span>
                </div>
            </div>
            
            <div class=" col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="counter green">
                    <div class="counter-icon">
                        <span><i class="fa fa-globe"></i></span>
                    </div>
                    <h3>CURRENT FOREIGN STUDENTS</h3>
                    <span class="counter-value">{{$counter->student->current_foreign_student ?? 0}}</span>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12">
                <div class="counter pink">
                    <div class="counter-icon">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <h3>CURRENT STUDENTS</h3>
                    <span class="counter-value">{{$counter->student->current_total_student ?? 0}}</span> 
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-sm-12">
                <div class="counter orange">
                    <div class="counter-icon">
                        <span><i class="fa fa-users"></i></span>
                    </div>
                    <h3>FULL TIME TEACHERS AND EMPLOYEES</h3>
                    <span class="counter-value">{{$counter->employee ?? 0}}</span> 
                </div>
            </div>         
            <div class=" col-lg-4 col-md-6 col-sm-12">
                <div class="counter purple">
                    <div class="counter-icon">
                        <span><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <h3>NUMBER OF ALUMNI</h3>
                    <span class="counter-value" >{{$counter->alumni ?? 0}}</span> 
                </div>
            </div>
            
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#counterData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                items: [],
                

            },

            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/counter-statistics`)
                        .then((
                            response) => {
                            this.items = response.data;
                            console.log(response.data);
                           

                        }).catch((error) => {
                            console.log(error.response);

                        });
                }

            },

            created() {
                this.getData();
            }
        });



    });
</script>
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