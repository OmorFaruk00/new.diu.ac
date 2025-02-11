<style>
    .post-slide{
    padding: 0 15px;
    margin-bottom: 30px;
}
.post-slide .post-img{
    overflow: hidden;
}
.post-slide .post-img img{
    width: 100%;
    height: auto;
    filter: grayscale(100%);
    opacity: 0.9;
    transform: scale(1,1);
    transition:all 0.3s ease-in-out 0s;
}
.post-slide:hover .post-img img{
    transform: scale(1.2,1.2);
    filter:none;
    opacity:1;
}
.post-slide .post-content{
    padding: 20px 30px;
    position: relative;
    background: #fff;
}
.post-slide .post-date{
    min-width:28px;
    min-height:28px;
    line-height: 28px;
    text-align: center;
    background: #222f42;
    position: absolute;
    top: -30px;
    left: 30px;
}
.post-slide .month{
    display: block;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    padding: 0 10px;
    background: #01AA4D;;
    text-transform: uppercase;
}
.post-slide .date{
    color: #fff;
    font-size: 14px;
}
.post-slide .post-title{
    margin: 20px 0;
}
.post-slide .post-title a{
    color:#01AA4D;
    font-size:22px;
    text-transform:capitalize;
    transition: all 0.50s ease 0s;
    text-align: justify !important;
}
.post-slide .post-title a:hover{
    color:#333;
    text-decoration: none;
}
.post-slide .post-description{
    color: #999;
    font-size: 16px;
    line-height: 30px;
    text-align: justify !important;
}
.post-slide .post-bar{
    padding: 15px 0;
    list-style: none;
    text-align: center;
    background: #14bf9b;
}
.post-slide .post-bar li{
    display: inline-block;
    margin-right: 5px;
}
.post-slide .post-bar li a{
    text-transform: capitalize;
    font-size: 12px;
    color: #fff;
    transition:0.2s ease;
}
.post-slide .post-bar li a:hover{
    text-decoration: none;
    color:#333;
}
.post-slide .post-bar li i{
    color:#fff;
    margin-right: 5px;
}
</style>

<div style="background: #EEEEEE" class="py-5">


<div class="container">
    {{-- <h3 class="build-title px-3">Seminars</h3> --}}
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            
                <div class="post-slide">
                    <div class="post-img">
                        <a href="#"><img src="{{asset('assets/images/seminar.jpg')}}" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month">apr</span>
                            <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Lorem ipsum dolor sit amet </a></h5>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat asperiores, illo amet nobis a soluta optio provident repellendus nostrum vero laborum, sint neque tempora assumenda eum? Nulla, ad. Corporis eaque delectus quis .
                        </p>
                    </div>
                    {{-- <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                    </ul> --}}
                </div>
        </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
 
                <div class="post-slide">
                    <div class="post-img">
                        <a href="#"><img src="{{asset('assets/images/seminar.jpg')}}" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month">apr</span>
                            <span class="date">12</span>
                        </div>
                        <h5 class="post-title"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat asperiores, illo amet nobis a soluta optio provident repellendus nostrum vero laborum, sint neque tempora assumenda eum? Nulla, ad. Corporis eaque delectus quis .
                        </p>
                    </div>
                    {{-- <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">3</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">5 Likes</a> </li>
                    </ul> --}}
                </div>
           
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#program',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,

                notices: [],
                noticeLinks: [],
                noticeMeta: [],

            },

            methods: {
                getPrograms() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=program`)
                        .then((
                            response) => {
                                console.log('response.data');
                            // this.notices = response.data.data;
                            // this.noticeLinks = response.data.links;
                            // this.noticeMeta = response.data.meta;

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