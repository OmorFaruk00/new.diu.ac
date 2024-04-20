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
    }
    .notice-title{     
        white-space: nowrap; 
        overflow: hidden; 
        text-overflow: ellipsis;
        color: #000;
        font-size: 18px;
        font-weight: 600;
    }
</style>

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform: uppercase">Notice Details</h1>
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Notice Details</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->

<div class="container py-5" id="noticeDetails">
    <x-notice-details :slug="$slug" />
</div>

@endsection

{{-- <script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#noticeDetails',
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
                    axios.get(`https://api.diu.ac/public-diu-website/notice-event?type=notice`).then((
                            response) => {
                            this.notices = response.data.notices; // Corrected access to nested data
                            this.noticeLinks = response.data.noticeLinks; // Corrected access to nested data
                            this.noticeMeta = response.data.noticeMeta; // Corrected access to nested data
                            console.log(response);
                        }).catch((error) => {
                            console.log(error.response);
                        });
                }
            },
            created() {
                this.getPrograms();
                alert('ok');
            }
        });
    });
</script> --}}
