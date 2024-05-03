@extends('layouts.master')
@section('content')
<style>
     .journal {
            margin-top: 40px;
            margin-bottom: 50px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            

        }
        .journal p{
            color: #000;
            font-weight: 500;

        }
      .article {
            margin-bottom: 30px;
            line-height: 15px
        }

        .article h4 {
            color: #2EAA4D !important;
            margin-bottom: 10px !important;
            text-align: justify;
            font-weight: 600;

        }

        .article p {
            margin-bottom: 15px !important;
        }

        .btn-abs {
            color: #2EAA4D !important;
            border: 1px solid #2EAA4D;
            padding: 5px 10px;
            font-size: 18px;
            font-weight: 500;
            margin-top: 0px;
        }

        .btn-abs:hover {
            color: #fff !important;
            background: #2EAA4D;

        }
</style>
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform:uppercase;"> Journals </h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li> Journals</li>
            </ol>
        </div>

    </div>
</section>
<div class="container">
    <div class="journal p-4" id="journal">
        <h2 style="margin-bottom: 20px">Vol. 12 (2022)</h2>
     
        <div style="line-height: 10px">
            <p> <strong>ISSN:</strong> 2077/0111</p>
        <p> <strong>DOI:</strong> 10.62673/DIUJLHR</p>
        <p> <strong>Published:</strong> No-2, 2022</p>
        </div>
        <h3>Articles</h3>
     
        <div class="article" v-for="(item,index) in journals" :key="index">
            <h4 v-text="item.title"></h4>                    
            <p v-text="item.author"></p> 
          <p><a :href="'/journal_details/'+item.id" class="" target="_blank">DOI Link</a></p> <br>
                              
            <a :href="'/journal_details/'+item.id" class="btn-abs" target="_blank">Abstract</a>
        </div>


        
     </div>
</div>

<section>

</section>

<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#journal',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,

                journals: [],
               
            },

            methods: {
                getData() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/journal`)
                        .then((
                            response) => {
                                this.journals =response.data
                           console.log(response.data);

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
@endsection