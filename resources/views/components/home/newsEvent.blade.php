<style>
    .notice{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 20px;
        background: #fff;
        
    }
    .contant{
        display: flex;
        align-items: center;
    }
    .notice-date{
        background: #01AA4D;
        color: #000;
        font-weight: 700;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: 15px;  
        text-align: center 

    }
    .notice-title{  
        
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis;
    color: #000;
    font-size: 18px;
    font-weight: 600;
    padding-top: 5px;
    text-align: left;

    }
    .notice-title:hover{ 
      color:#01AA4D; 

     }

     .notice img{
        width: 100%;
        height: 300px;
     }

     .btn-see{
    color: #131313;
    background-color: #01AA4D;
    font-family: "Tilt Neon", sans-serif;
    font-size: 18px;
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
    padding: 8px 14px;
    border-radius: 12px 12px;
    border: 2px solid #fff;
    overflow: hidden;
    position: relative;
    box-shadow: 0 2px 0 2px #000;
    transition: all 0.3s;
    float: right;
} 
.btn-see:hover{
    color: #fff;
    background: #01AA4D;
    box-shadow: 0 2px 0 2px #0d3b66;
}
.btn-see:before {
    content: "";
    background-color:#030202;
    width: 100px;
    height: 120%;
    transform: translate(-150%, -50%) skewX(30deg);
    position: absolute;
    top: 50%;
    transition: all 0.5s;
} 
.btn-see:hover:before {
    transform: translate(150%, -50%) skewX(30deg);
    transition-delay: 0.1s;
}

</style>
<div style="background: #E5E5E5">
<div class="container " id="noticeEvent" >
    {{-- <div class="row" style="">
     <div class="col-lg-6 col-md-6 col-sm-12">
        <div  v-if='notices'>
            <div class="notice pb-5">
                <div class="row" v-for="notice in notices" :key="notice.id">
                    <div class="contant">
                        <div class="col-3">
                            <p class="notice-date" v-text="notice.published_date"></p>
                        </div>
                        <div class=" col-9">
                            <a :href="'/notice-details/' + notice.slug" target="_blank">
                                <p class="notice-title" v-text="notice.title"></p>
                            </a>
        
                        </div>
                    </div>
                </div>        
                <div>
                </div>
                    <a href="{{route('notice-board')}}" class="see-btn-see" target="_blank"> See More..</a>       
        
            </div>        
        </div> 
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="notice">
        <img src="{{asset('assets/images/news.png')}}" alt="">
        </div>
        
   </div>
   <div class="row mt-5">
    <div class="col-lg-6 col-md-6 col-sm-12">
        
        
       
  
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
       <div class="notice pb-5">
           <div class="row" v-for="notice in events" :key="notice.id">
               <div class="contant">
                   <div class="col-3">
                       <p class="notice-date" v-text="notice.published_date"></p>
                   </div>
                   <div class=" col-9">
                       <a :href="'/notice-details/' + notice.slug" target="_blank">
                           <p class="notice-title" v-text="notice.title"></p>
                       </a>    
                   </div>
               </div>
           </div>
   
           <div>
           </div>           
           <a href="{{route('notice-board')}}" class="see-btn-see" target="_blank"> See More..</a>
       </div> 
  </div>
    </div>
   </div> --}}






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
                                <a :href="'/notice-details/' + notice.slug" target="_blank">
                                    <p class="notice-title" v-text="notice.title"></p>
                                </a>    
                            </div>
                        </div>
                        
                        <a href="{{route('news')}}" class="btn-see" target="_blank"> See More..</a>
                </div>
                {{-- <div class="w-100">
                    <img src="assets/img/sect-4-bars.jpg" alt="" class="w-100" />
                </div> --}}
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12  order-md-2 order-1" style="">
                <img src="assets/images/news.png" class="img-fluid" style="margin-top: 70px;"
                    alt="Section 3 Background Image" />
            </div>
        </div>
        <img src="assets/img/sect-4-bars.jpg" alt="" class="w-100" style="height: 20px;"/>
    </div>
</section>


<section id="section4">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-7 col-md-7 col-sm-12 order-md-1 order-2">
                <div class="enchance" >
                    <div class="row" v-for="notice in events" :key="notice.id">
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <p class="notice-date" v-text="notice.published_date"></p>
                            </div>
                            <div class=" col-lg-9 col-md-8 col-sm-12">
                                <a :href="'/notice-details/' + notice.slug" target="_blank">
                                    <p class="notice-title" v-text="notice.title"></p>
                                </a>    
                            </div>
                        </div>
                        
                        <a href="{{route('events')}}" class="btn-see" target="_blank"> See More..</a>
                </div>
                {{-- <div class="w-100">
                    <img src="assets/img/sect-4-bars.jpg" alt="" class="w-100" />
                </div> --}}
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12  order-md-2 order-1" style="">
                <img src="assets/images/events.png" class="img-fluid" style="margin-top: 40px;float:right"
                    alt="Section 3 Background Image" />
            </div>
        </div>
    </div>
</section>
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
                            this.notices = response.data.data.slice(0,5);                          

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
