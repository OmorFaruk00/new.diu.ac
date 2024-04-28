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
    .list:nth-child(1) a {
        background: blue; 
    }    
    .list:nth-child(2) a {
        background: red; 
    }  
    .list:nth-child(3) a {
        background: green; 
    }
    .list:nth-child(4) a {
        background: #E95095; 
    }
    .list:nth-child(5) a {
        background: #FDCC01; 
    }
    .list:nth-child(6) a {
        background: #7049BA; 
    }
    .list:nth-child(7) a {
        background: #5FAD56 
    }
    .list:nth-child(8) a {
        background: rgb(164, 198, 51); 
    }
    .list:nth-child(9) a {
        background: rgb(29, 198, 207); 
    }
    .list:nth-child(10) a {
        background: rgb(127, 133, 7); 
    }
    .list:nth-child(11) a {
        background: rgb(83, 24, 86); 
    }
    .list:nth-child(12) a {
        background: rgb(215, 68, 203); 
    }

</style>
    <main id="main" style="margin-top: 80px">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="text-transform: uppercase">Faculty</h1>
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
                <div class="py-5 col-8 mx-auto">
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
