<style>
    .event-bg {
        position: relative;
        background-color: rgba(255, 255, 255, 0.5);
        z-index: 11;
        padding: 20px;
    }

    .event-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url("{{ asset('/assets/images/event-bg.jpeg') }}") fixed center top;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0.8;
        background-blend-mode: overlay;
        background-size: cover;
        background-position: center;
        z-index: -1;
    }

    .event {
        position: relative;
        display: inline-block;
        border-radius: 7px;
        overflow: hidden;
        box-shadow: rgba(50, 50, 80, 0.5) 0px 14px 18px -12px, rgba(0, 0, 0, 0.8) 0px 14px 15px -13px;
        background: rgba(0, 0, 0, 0.7);
        transition: all 0.3s;
    }

    .event:hover img {
        transform: scale(1.1, 1.1);

    }

    .event:hover .event-content .title,
    .event:hover .event-content .post {
        color: #01AA4D;

    }

    .event img {
        max-width: 100%;
        height: auto;
        opacity: 0.3;
        transform: scale(1, 1);
        transition: all 0.30s ease 0s;
    }

    .event-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }

    .event-content .title {
        font-size: 16px;
        font-weight: 900;
        text-transform: uppercase;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;


    }

    .event-content .post {
        font-size: 18px;
        font-weight: 700;
    }

    .event-title {
        /* color: #fff;
        font-size: 32px;
        font-weight: 700; */

        color: #F6880C;
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 20px;

    }

    .owl-nav button {
        display: none !important;
    }

    .event-btn {
        text-align: right;
    }

    .event a i {
        margin-right: 10px;

    }
</style>

<section style="background: #;margin-bottom:50px" class="event-bg">
    <div class="container py-5">
        <h3 class="event-title">News and Events</h3>


        <div id="eventData">
            <div class="owl-carousel owl-theme" id="event" style="margin-bottom: 20px">
                <div class="item" v-for="(item,index) in events" :key="index">
                    <a :href="'/notice-details/' + item.slug">
                        <div class="event">
                            <img src="{{asset('assets/images/event.jpg')}}" alt="Image">
                            <div class="event-content">
                                <h3 class="title" v-text="item.title">
                                </h3>
                                <span class="post" v-text="item.published_date"></span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="event-btn">
            <a href="{{ route('events') }}"  class="btn"><i class="fa fa-archive"
                    aria-hidden="true"></i>Archive</a>
        </div>

    </div>
</section>

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
                                            items: 5
                                        },
                                        1200: {
                                            items: 5
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
