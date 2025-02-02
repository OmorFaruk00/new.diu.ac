<style>
.demo{ background: #e5e5e5; }
.our-team{
    border: 2px solid #01AA4D;
    border-radius: 10px;
    text-align: center;
    margin: 10px;
    z-index: 1;
    position: relative;
}
.our-team:before,
.our-team:after{
    content: "";
    width: 100%;
    height: 104%;
    background: #01AA4D;
    position: absolute;
    top: 50%;
    left: 0;
    z-index: -1;
    transform: translateY(-50%) scaleX(0.3);
    transition: all 0.3s ease 0s;
}
.our-team:after{
    width: 106%;
    left: 50%;
    transform: translate(-50%, -50%) scaleY(0.25);
}
.our-team:hover:before{ transform: translateY(-50%) scaleX(0.7); }
.our-team:hover:after{ transform: translate(-50%, -50%) scaleY(0.7); }
.our-team img{
    width: 100%;
    height: 300px;
    border-radius: 10px;
    transition: all 0.3s ease 0s;
}
.our-team .team-content{
    width: 100%;
    padding: 25px 0 10px;
    background: rgba(4, 4, 4, 0.7);
    opacity: 0.85;
    position: absolute;
    bottom: 0px;
    
}

.our-team .title{
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    text-transform: capitalize;
    margin: 0;
    text-align: left;
    padding: 0px 15px;
}
.our-team .post{
    display: block;
    font-size: 12px;
    font-weight: 400;
    color: #fff;
    text-transform: uppercase;
    margin-bottom: 10px;
    text-align: left;
    padding: 0px 15px;
}
.owl-nav button {
        display: none !important;
    }

@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
</style>



<div class="container">
    <div class="text-center py-4">
        <h2 class=" my-4 heading">OUR EXPERIENCED STAFFS</h2>
    </div>
    <div id="staffData" class="pb-5">       
        <div class="owl-carousel owl-theme" id="staff" style="margin-bottom: 20px">          
              <div class="item" v-for="(item,index) in staffs" :key="index">
            <div class="our-team">
                <img :src="item.image_url">
                <div class="team-content">
                    <h3 class="title" v-text="item.name"></h3>
                    <span class="post" v-text="item.title"></span>                    
                </div>
            </div>
        </div>
        </div>      
    </div>
</div>

<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#staffData',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                staffs: [],
            },
            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/key-resource-persons`)
                        .then((response) => {
                            vm.staffs = response.data.vital_persons;
                            console.log(response.data.vital_persons);
                            setTimeout(function() {
                            var owl = $('#staff');
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
                                        items: 1
                                    },
                                    600: {
                                        items: 2
                                    },
                                    1000: {
                                        items: 3
                                    },
                                    1200: {
                                        items: 4
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