@extends('layouts.master')
@section('content')
<style>
    .faculty-body {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    }
    .faculty{
    /* background: linear-gradient(to right,#DBDBDB,#fff,#EAEAEA); */
    background: #E4E4E4;
    font-family: 'Roboto Condensed', sans-serif;
    padding: 20px 20px 20px 240px;
    box-shadow: 0 0 2px #5f5f5f;
    position: relative;
    transition: all 0.3s;   
}
.faculty:hover{
    transform:  scale(0.9);
    box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    background: #fff;
}
.faculty:hover{ box-shadow:0 0 10px #5f5f5f; }
/* .faculty:before,
.faculty:after{
    content:"";
    background: #5F5F5F;
    width: 2px;
    height: 90%;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 220px;
} */
.faculty:after{
    background: transparent;
    width: 100%;
    height: 100%;
    border: 1px dashed #1ABB9A;
    opacity: 0;
    transform: translateY(0) scale(1);
    top: 0;
    left: 0;
    transition: all 0.3s;
}
.faculty:hover:after{
    opacity: 1;
    transform: translateY(0) scale(0.975,0.95);
}
.faculty .signature-img{
    background: #1ABB9A;
    width: 165px;
    height: 165px;
    padding: 5px;
    overflow: hidden;
    position: absolute;
    top: 20px;
    left: 30px;    
    -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
}
.faculty .signature-img img{
    width: 100%;
    height: 155px;
    -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
}
.faculty .icon{
    padding: 0;
    margin: 0;
    list-style: none;
    position: absolute;
    bottom: 15px;
    left: 50px;
    z-index: 1;
}
.faculty .icon li{ display: inline-block; }
.faculty .icon li a{
    color: #fff;
    background: #5f5f5f;
    font-size: 16px;
    text-align: center;
    line-height: 32px;
    width: 30px;
    height: 30px;
    margin: 0 5px;
    display: block;
    -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    transition: all 0.3s ease 0s;
}
.faculty .icon li a:hover{ background: #1ABB9A; }
.faculty .title{
    color: #1ABB9A;
    font-size: 17px;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0;
}
.faculty .post{
    color: #5f5f5f;
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 3px;
    text-transform: capitalize;
}
.faculty .signature-content{
    color: #5f5f5f;
    font-size: 15px;
    line-height: 30px;
    padding: 15px 0 20px;
    margin: 0;
    list-style: none;
}
.faculty .signature-content li span{ margin-right: 6px; }
.faculty .signature-website{
    color: #fff;
    background: #1ABB9A;
    text-align: center;
    padding: 5px 0;
    display: block;
}

@media screen and (min-width:976px){
.faculty{
    height: 230px;
}
}
@media screen and (max-width:970px){
    .faculty{ padding: 250px 15px 20px; }

    .faculty:before{
        width: 90%;
        height: 2px;
        transform: translateY(0) translateX(-50%);
        left: 50%;
        top: 235px;
    }
    .faculty .signature-img{
        transform: translateX(-50%);
        left: 50%;
    }
    .faculty .icon{
        text-align: center;
        width: 100%;
        transform: translateX(-50%);
        bottom: auto;
        top: 195px;
        left: 50%;
    }
    .faculty .signature-details,
    .faculty .signature-content{ text-align: center; }
    .faculty .title{ font-size: 20px; }
}


</style>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase"> Faculty Member</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Faculty Member</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section id="faculty-details" data-slug="{{ $slug }}">
        <div class=" py-4">
            <div class="container faculty-body p-4" >
                <div class="row" v-if="faculty_member">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4" v-for="(item,index) in faculty_member" :key="index">
                        <div class="faculty">                          
                            <div class="signature-img">
                                <img :src="item.profilepic" alt="profile pic">
                            </div>        
                           <div class="signature-details">
                                <h2 class="title" v-text="item.name"></h2>
                                <span class="post" v-text="item.designation"></span>
                            </div>
                            <ul class="signature-content">                               
                                <li>
                                    <span class="fa fa-phone"></span>
                                    <span v-text="item.personal_phone_no.substring(item.personal_phone_no.length - 11)"></span>
                                </li>
                                
                                <li><span class="fa fa-envelope"></span> <span v-text="item.office_email"></li>
                            </ul>
                          
                           <a  :href="item.website" class="signature-website" target="_blank">View Profile</a>
                        </div>
                    </div>
                   
                  
                </div>
            </div>
        </div>

    </section>
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#faculty-details',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },
                    faculty_member: [],
                },

                methods: {
                    getData() {
                        var vm = this;
                        var slug = $('#faculty-details').data('slug');              

                        axios.get(`${vm.config.base_path}/public-diu-website/department-faculty-member/${slug}`)
                            .then((
                                response) => {
                                    this.faculty_member = response.data.data;
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