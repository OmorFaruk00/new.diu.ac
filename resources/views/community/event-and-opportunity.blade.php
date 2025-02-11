@extends('layouts.master')
@section('content')
<style>
    /* .build-title{
        color: #333;
        font-weight: 600;
        font-size: 34px
    }
    .build-desc{
    color: #838383 !important;
    font-size: 16px;
    line-height: 25px;
    text-align: justify;
    } 

    .build-img {
       width: 100%;
        height: 300px;
    } */

    .post-slide{
    padding: 0 15px;
    margin-bottom: 30px;
}
.post-slide .post-img{
    overflow: hidden;
}
.post-slide .post-img img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    /* filter: grayscale(100%); */
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
    height: 220px;
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
.post-slide .post-description {
    color: #000;
    font-size: 16px;
    line-height: 30px; /* Ensures consistent spacing */
    text-align: justify !important;
    
    /* Limit text to 3 lines */
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Show only 3 lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
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
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 style="text-transform: uppercase">Programs Of Dhaka International University  </h2>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Events And Opportunity </li>
            </ol>
        </div>
    </div>
</section>
<div style="background: #EEEEEE" class="py-5">
    <div class="container">
        <div class="row" id="program" v-if='programs'>
            <div class="col-lg-6 col-md-12 col-sm-12" v-for="program in programs" :key="program.id">                
                    <div class="post-slide"  >
                        <div class="post-img">
                            <img :src="program.notice_files[0].file_url" alt="">
                        </div>
                        <div class="post-content">
                            <div class="post-date">
                                <span class="month" v-text="program.published_date"></span>
                                <span class="date"></span>
                            </div>
                            <h5 class="post-title"><a :href="'/program-details/' + program.slug" target="_blank" v-text="program.title"></a></h5>
                            <p class="post-description" v-html="program.description">
                               
                            </p>
                        </div>                      
                    </div>
            </div>                  
            
        </div>
    </div>
    </div>


<section>
   
        {{-- <x-community.contact /> --}}
   

</section>

<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#program',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,

                programs: [],
                noticeLinks: [],
                noticeMeta: [],

            },

            methods: {
                getPrograms() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=program`)
                        .then((
                            response) => {
                                console.log(response.data);
                            this.programs = response.data.data;
                            this.noticeLinks = response.data.links;
                            this.noticeMeta = response.data.meta;

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