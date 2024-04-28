@extends('layouts.master')
@section('content')
<style>
    .notice{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 20px;
    }
    .contant{
        display: flex;
        align-items: center;
    }
    .notice-date{
        background: #49B5E7;
        color: #000;
        font-weight: 700;
        margin-right: 30px;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: 15px; 
        text-align: center;  

    }
    .notice-title{  
        
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis;
    color: #000;
    font-size: 18px;
    font-weight: 600;

    }
    .notice-title:hover{ 
      color:#49B5E7; 

     }
</style>
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1 style="text-transform: uppercase">News</h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>News</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  @php
  @endphp
 
<div class="container">
  <div class="row py-5">
    <div class="col-lg-9 col-md-12 col-sm-12 mx-auto">
        <div id="notice" v-if='notices'>
            <div class="notice">
                <div class="d-flex justify-content-center">
                    <img src="assets/images/news.png" class="img-fluid" style="height: 250px;"
                    alt="Section 3 Background Image" />
                </div>
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
            </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#notice',
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

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=notice`)
                        .then((
                            response) => {
                            this.notices = response.data.data;
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

