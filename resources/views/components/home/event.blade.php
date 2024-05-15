<style>
    .box {
        position: relative;
        display: inline-block;
        border-radius: 7px;
        overflow: hidden;
        box-shadow: rgba(50, 50, 80, 0.5) 0px 14px 18px -12px, rgba(0, 0, 0, 0.8) 0px 14px 15px -13px;
        background: rgba(0, 0, 0, 0.7);
    }

    .box img {
        max-width: 100%;
        height: auto;
        opacity: 0.3;
    }

    .box-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }

    .box-content .title {
        font-size: 18px;
        font-weight: 900;
        text-transform: uppercase;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;

    }

    .box-content .post {
        font-size: 18px;
        font-weight: 700;
    }

    .event-title {
        color: #333;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .owl-nav button {
        display: none !important;
    }
    .event{
        text-align: right;
    }
    
    .event a i{
        margin-right: 10px;

    }
</style>

<div style="background: #E5E5E5;margin-bottom:50px" >
    <div class="container py-5">
        <h4 class="event-title">News and Events</h4>

       
       <div id="eventData">       
        <div class="owl-carousel owl-theme" id="event" style="margin-bottom: 20px">          
              <div class="item" v-for="(item,index) in events" :key="index">
                <a :href="'/notice-details/'+ item.slug" target="_blank"> 
                  <div class="box">
                      <img src="assets/images/event.jpg" alt="Image">
                      <div class="box-content">
                          <h3 class="title" v-text="item.title">
                          </h3>
                          <span class="post" v-text="item.published_date"></span>
                      </div>
                  </div>
                </a>
              </div>        
  
          </div>
        </div>
        <div class="event">
            <a href="{{route('events')}}" target="_blank" class="btn"><i class="fa fa-archive" aria-hidden="true"></i>Archive</a>
        </div>



   
    </div>
</div>





<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#eventData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                events: [],
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=event`)
                        .then((response) => {
                            vm.events = response.data.data;
                            console.log(response.data.data);
                            setTimeout(function() {
                            var owl = $('#event');
                            owl.owlCarousel({
                                margin: 20,
                                dots: true,
                                nav: true,
                                navText: [
                                    "<i class='fa fa-chevron-left'></i>",
                                    "<i class='fa fa-chevron-right'></i>"
                                ],
                                autoplay: true,
                                autoplayHoverPause: true,
                                loop: true,
                                responsive: {
                                    0: {
                                        items: 2
                                    },
                                    600: {
                                        items: 2
                                    },
                                    1000: {
                                        items: 6
                                    },
                                    1200: {
                                        items: 6
                                    }
                                }
                            });
                        }, 100);
                            
                     
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

