@extends('layouts.master')
@section('content')
<style>
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
      margin-bottom: 20px;
  }
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1 style="text-transform:uppercase;"> MOU</h1>
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>MOU</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    

    <section class="applynow">
      <div class="container py-5">
          <h4 class="partner-title">
              OUR PARTNERS
          </h4>          

         <div id="partnerData" class="py-5">        
          <div class="owl-carousel owl-theme"  id="partner">          
              <div class="item" v-for="(item,index) in partners" :key="index" >
                  <img :src="item.image_url" alt="">
              </div>              
          </div>

     
        </div>
      </div>
  

      
  </section>




  </main>

  

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
                getPrograms() {
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
                this.getPrograms();
                

      
   
            }
        });
    });
</script>

@endsection
