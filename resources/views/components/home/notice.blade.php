<style>
     .notice-bg {
    position: relative; 
    background-color: rgba(255,255,255, 0.5); 
    z-index: 11;
    padding: 20px; 
}

.notice-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url("{{ asset('/assets/images/noticebg.jpeg') }}") center/cover no-repeat;
    opacity: 0.5; 
    z-index: -1; 
}


/* .notice {
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    padding: 20px;
    background: #fff;
    position: relative; 
    z-index: 1; 
} */

.contant {
    display: flex;
    align-items: center;
}

.notice-date {
    background: #01AA4D;
    color: #000;
    font-weight: 700;
    padding: 8px 10px;
    border-radius: 5px;
    font-size: 15px;  
    text-align: center;
}

.notice-title {
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis;
    color: #000;
    font-size: 18px;
    font-weight: 600;
    padding-top: 5px;
    text-align: left;
}

.notice-title:hover {
    color: #01AA4D;
}

.notice-img {
    height: 400px;
    width: 90%;
    float: right;
    z-index: 22;
    position: relative; 
}

     @media (max-width: 1490px) {
        .notice-img{
         height:320px;
         width: 90%;
         float:right
     }

     }



</style>
<div style="background: #" class="notice-bg">
<div class="container " id="noticeEvent" >
       <section id="section4">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 col-md-7 col-sm-12  order-md-1 order-2">
                <div class="enchance" >
                    <div class="row" v-for="notice in notices" :key="notice.id">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <p class="notice-date" v-text="notice.published_date"></p>
                            </div>
                            <div class=" col-lg-9 col-md-6 col-sm-12">
                                <a :href="'/notice-details/' + notice.slug">
                                    <p class="notice-title" v-text="notice.title"></p>
                                </a>    
                            </div>
                        </div>
                        
                        <div style="float:right">
                            <a href="{{route('notice')}}" class="btn"><i class="fa fa-archive" aria-hidden="true" style="margin-right: 10px"></i>Archive</a>
                        </div>
                </div>
              
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12  order-md-2 order-1" style="">
                <img src="{{asset('assets/images/notice1.png')}}" class="notice-img" style=""
                    alt="Section 3 Background Image" />
            </div>
        </div>
       
    </div>
</section>


</div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#noticeEvent',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,

                notices: [],
                events: [],
                

            },

            methods: {
                getNotices() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=notice`)
                        .then((
                            response) => {
                            this.notices = response.data.data.slice(0,6);                          

                        }).catch((error) => {
                            console.log(error.response);

                        });
                },
                getEvents() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=event`)
                        .then((
                            response) => {
                            this.events = response.data.data.slice(0,5);                           

                        }).catch((error) => {
                            console.log(error.response);

                        });
                }

            

            },

            created() {
                this.getNotices();
                this.getEvents();
            }
        });



    });
</script>
