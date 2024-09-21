<style>

.partner {
    background: url("{{ asset('/assets/img/backgrounds/apply-now-back.jpg') }}") fixed center center;
    /* background: url("{{asset('/img/backgrounds/apply-now-back.jpg')}}"); */
    background-size: cover;
    background-position: center;
}
    .item img {
        background: #fff;
        border-radius: 10px
    }
    .owl-nav button{
        display: none !important;
    }
    .partner-title{
        text-align: center;
        color: #F6880C;
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 20px;

    }
</style>
<section class="partner">
    <div class="container py-5">
        <h5 class="partner-title">
            OUR PARTNERS
        </h5>
        <div id="partnerData">     
        <div class="owl-carousel owl-theme" id="partner">
            <div class="item" v-for="(item,index) in partners" :key="index" >
                <img :src="item.image_url" alt="">
            </div>  
        
        </div>
        </div>
    </div>
</section>
{{-- <section class="full-width-bars">
    <div class="w-100">
        <img src="assets/img/four-bars-full.jpg" alt="" class="w-100">
    </div>
</section> --}}

<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#partnerData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                partners: [],
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/partners`)
                        .then((response) => {
                            vm.partners = response.data;
                            setTimeout(function() {
                            var owl = $('#partner');
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
