@extends('layouts.master')
@section('content')
<style>
    .program{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 20px;
    }
    /* .contant{
        display: flex;
        align-items: center;
    } */
    .program-date{
        background: #49B5E7;
        color: #000;
        font-weight: 700;
        margin-right: 30px;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: 15px;   
    }
    .program-title{     
        white-space: nowrap; 
        overflow: hidden; 
        text-overflow: ellipsis;
        color: #000;
        font-size: 18px;
        font-weight: 600;
    }
    .program-img img{
        width: 100%;
        object-fit: cover;

        


    }
    .program-desc{
        font-size: 18px;
        line-height: 25px;
        text-align: justify;
    }
</style>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform: uppercase">Program Details</h1>
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Program Details</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->

<div class="container py-5" id="programDetails">
        <div class="program">
            <h3 v-text="program.title"></h3>
            <p><strong>Published Date:</strong> <span v-text="program.published_date"></span></p>
            <div class="col-6 mx-auto my-4 program-img">
                <img :src="program.notice_files[0].file_url" alt="">
            </div>
            <div class="program-desc" v-html="program.description"></div>
    
           
            <div>
    
               
    
            </div>
        </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#programDetails',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,
                program: '',
                slug: '{{$slug}}',
            },

            methods: {
                getPrograms() {
                    var vm = this;
                    var slug = this.slug;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice/${slug}`).then((
                        response) => {
                        this.program = response.data.data;
                        console.log(response.data.data);
                    }).catch((error) => {
                        console.log(error.response);
                    });
                }
            },

            created() {
                // this.slug = ; 
                this.getPrograms(); 
            }
        });
    });
</script>

@endsection


