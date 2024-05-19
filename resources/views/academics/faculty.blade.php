@extends('layouts.master')
@section('content')
<style>
    .demo{ background: #585858; }
  .faculty{
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    padding: 20px;
  }
    .list a {
        text-align: center;
        margin-bottom: 20px;
        font-size: 20px;
        color: #fff;
        font-weight: 500;
        border-radius: 5px
    }
    .list a:hover {
        color:#000;
        border: none;
        
    }



  

    .btn:before,
    .btn:after {
        content: "";
        background-image: linear-gradient(to right,#24B3C3,#1375B7,#0F619D, #F8880C) !important;
        height: 100%;
        width: 100%;
        border-radius: 5px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all 0.3s ease-out;
    }



  
    
  

</style>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="text-transform: uppercase">Faculty List</h1>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Faculty</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <div class="container" id="faculty">
            <div class="row">
                <div class="py-5 col-lg-8 mx-auto">
                    <div class="faculty">
                        <ul>
                            <li class="list" v-for="(item,index) in programs" :key="index"><a :href="'/faculty/' + item.slug" class="btn btn-block w-100" v-text="item.title" target="_blank"></a></li>       
                            
                        </ul>
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
                el: '#faculty',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },

                    programs: [],
                },

                methods: {
                    getData() {
                        var vm = this;

                        axios.get(`${vm.config.base_path}/public-diu-website/programs`)
                            .then((
                                response) => {
                                    console.log(response.data.data)
                                this.programs = response.data.data
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
