@extends('layouts.master')
@section('content')
<style>
    .notice{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 20px;
    }
    /* .contant{
        display: flex;
        align-items: center;
    } */
    .notice-date{
        background: #49B5E7;
        color: #000;
        font-weight: 700;
        margin-right: 30px;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: 15px;   
    }
    .notice-title{     
        white-space: nowrap; 
        overflow: hidden; 
        text-overflow: ellipsis;
        color: #000;
        font-size: 18px;
        font-weight: 600;
    }
    .notice-desc{
        font-size: 18px;
        line-height: 25px;
        text-align: justify;
    }
</style>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform: uppercase">Programs Notice Details</h1>
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Programs Notice Details</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->

<div class="container py-5" id="noticedetails">
    <div class=" notice">
        <h3 v-text="notice.title"></h3>
        <p><strong>Published Date:</strong> <span  v-text="notice.created_at.slice(0, 10)"></span></p>
        <div class="notice-desc" v-html="notice.description"></div>

        {{-- <p v-text="notice.notice_files[0]['file_name']"><a href=""></a></p> --}}

        <!-- Display file names with download links -->
        <div>

            <div v-for="not in notice.images" :key="not.id">
                <div class="d-flex">
                    <p v-text="not.file_name"></p>
                    <a :href="not.file_url" :download="not.file_name" target="_blank" style="margin-left: 20px"><i
                            class="fa fa-download"></i>Download</a>
                </div>

            </div>

        </div>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#noticedetails',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,
                notice: '',
                slug: '{{$slug}}',
            },

            methods: {
                getPrograms() {
                    var vm = this;
                    var slug = this.slug;

                    axios.get(`${vm.config.base_path}/public-diu-website/department-notice-details/${slug}`).then((
                        response) => {
                        this.notice = response.data;
                        console.log(response.data);
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


