@extends('layouts.master')
@section('content')
<style>
      .team-body {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }
    .team{
    background: #E4E4E4;
    font-family: 'Muli', sans-serif;
    padding: 15px 20px 50px 220px;
    box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    
}
.team:hover{
    transform:  scale(0.9);
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    background: #fff;
}
/* .team:before,
.team:after{
    content: "";
    background: #1ABB9A;
    width: 160px;
    height: 100%;
    border-radius: 0 30px 30px 0px;
    position: absolute;
    top: 0;
    left: 0;
} */
.team:after{
    width: 120px;
    height: 35px;
    border-radius: 0 0 0 30px;
    left: auto;
    right: 0;
}
.team .signature-icon{
    height: 160px;
    width: 160px;
    border: 5px solid #fff;
    border-radius: 0 30%;
    transform: translateY(-50%);
    overflow: hidden;
    position: absolute;
    left: 40px;
    top: 50%;
    bottom: 40px;
}
.team .signature-icon img{
    height: auto;
    width: 100%;
}
.team .signature-details{
    color: #1ABB9A;
    padding: 0 0px 0 0;
    margin-top: 15px;
}
.team .title{
    font-size: 17px;
    font-weight: 700;
    text-transform: capitalize;
    margin: 0 0 3px;
}
.team .post{
    font-size: 14px;
    font-weight: 600;
    text-transform: capitalize;
}
.team .signature-content{
    color: #111;
    padding: 15px 0 0;
    margin-bottom: 10px;
    list-style: none;    
}
.team .signature-content li{
    font-size: 14px;
    font-weight: 600;
    margin: 0 0 10px;
}
.team .signature-content li:last-child{ margin: 0; }
.team .signature-content li span{
    color: #fff;
    background: #1ABB9A;
    font-size: 11px;
    text-align: center;
    line-height: 20px;
    width: 20px;
    height: 20px;
    margin-right: 3px;
    border-radius: 20px;
}
.team .icon{
    list-style: none;
    position: absolute;
    bottom: 15px;
    right: 5px;
    
}
.team .icon li{ display: inline-block; }
.team .icon li a{
    color: #fff;
    background: #111;
    font-size: 14px;
    text-align: center;
    line-height: 28px;
    width: 28px;
    height: 28px;
    border-radius: 50px;
    transition: all 0.3s ease 0s;
}
.team .icon li a:hover{
    color: #fff;
    background: #1ABB9A;
    box-shadow: 0 0 5px rgba(0,0,0,0.5);
}
.whats-btn{
    background: #39CD5D;
    color: #fff;
    font-weight: 600;
    padding: 10px 22px;
    margin-right: 5px;
    
}
.whats-btn:hover{color: #000}
.profile-btn{
    background: #1ABB9A;
    color: #fff;
    font-weight: 600;
    padding: 10px 22px;
    /* border-radius: 30px 0px 0px 0px; */
}
.fa-whatsapp{
    font-size: 20px;
    margin-right: 5px;
   margin-top: -20px;
}
.profile-btn:hover{color: #000}
@media screen and (min-width:976px) and (max-width:1280px){
.team{
    height: 270px;
}
.team .signature-icon {
    height: 170px;
    width: 170px;
    border: 5px solid #fff;
    border-radius: 0 30%;
    transform: translateY(-50%);
    overflow: hidden;
    position: absolute;
    left: 30px;
    top: 43%;
}
}
@media screen and (max-width:970px){
    .team{ padding: 210px 0 40px 0; }
    .team:before{
        width: 100%;
        height: 150px;
        border-radius: 0 0 150px 0;
    }
    .team:after{
        border-radius: 100px 0 0 0;
        top: auto;
        bottom: 0;
    }
    .team .signature-icon{
        transform: translateX(-50%);
        top: 35px;
        left: 50%;
    }
    .team .signature-details,
    .team .signature-content{
        text-align: center;
        padding: 0;
        margin: 0 0 15px;
    }
    /* .team .icon{
        right: auto;
        left: 13px;
    } */
}
</style>
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;"> Office of The Treasurer </h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li> Office of The Treasurer </li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="demo py-4" id="team">
        <div class="container team-body p-4 ">
            <div class="row">
                <div class=" col-lg-6  col-md-6 col-sm-12 mb-4" v-for="(item,index) in teams" :key="index">
                    <div class="team">
                        <div class="signature-icon">
                            <img :src="item.photo_url" alt="profile pic">
                        </div>
                        <div class="signature-details">
                            <h2 class="title" v-text="item.name"></h2>
                            <span class="post" v-text="item.designation">/span>
                        </div>
                        <ul class="signature-content">
                            <li><span class="fa fa-phone"></span> <strong v-text="item.phone_no"></strong></li>
                            <li><span class="fa fa-envelope"></span> <strong v-text="item.office_email"></strong></li>
                            {{-- <li><span class="fa fa-map-marker"></span> <strong v-text="item.office_address"></strong></li> --}}
                            <li><span class="fa fa-map-marker"></span> <strong> Satarkul, Badda, Dhaka-1212.</strong></li>
                           
                        </ul>
                        <ul class="icon">
                            <a :href="`https://api.whatsapp.com/send?phone=88${item.phone_no.slice(-11)}`"  class="whats-btn" target="_blank">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp
                            </a>
                      
                            <a :href="item.website" class="profile-btn" target="_blank">View Profile</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




</main>

@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#team',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },
                    teams: [],
                },

                methods: {
                    getData() {
                        var vm = this;
                        var slug = $('#faculty-details').data('slug');              

                        axios.get(`${vm.config.base_path}/public-diu-website/office-of-treasurer`)
                            .then((
                                response) => {
                                    this.teams = response.data.data;
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
@endpush