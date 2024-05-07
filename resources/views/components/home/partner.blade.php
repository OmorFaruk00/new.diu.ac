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
<section class="applynow">
    <div class="container py-5">
        <h4 class="partner-title">
            OUR PARTNERS
        </h4>
        <div class="owl-carousel owl-theme" id="partner">
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner1.png') }}" alt="">
            </div>
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner2.png') }}" alt="">
            </div>
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner3.png') }}" alt="">
            </div>
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner4.png') }}" alt="">
            </div>
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner5.png') }}" alt="">
            </div>
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner6.png') }}" alt="">
            </div>
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner7.png') }}" alt="">
            </div>
            <div class="item">
                <img class="" src="{{ asset('assets/images/partners/partner8.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="full-width-bars">
    <div class="w-100">
        <img src="assets/img/four-bars-full.jpg" alt="" class="w-100">
    </div>
</section>

<script>
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
</script>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#partner',
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
                        .then((
                            response) => {
                            vm.partners = response.data;

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
</script> --}}
