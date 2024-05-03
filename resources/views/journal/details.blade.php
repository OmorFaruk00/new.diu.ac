@extends('layouts.master')
@section('content')
<style>
       .journal {
            margin-top: 40px;
            margin-bottom: 200px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;

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
            color: gray;
            font-weight: 400;
            line-height: 25px;
            font-size: 16px;
            text-align: justify
        }
        
</style>
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform:uppercase;"> Journal Details </h1>
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li> Journal Details</li>
            </ol>
        </div>

    </div>
</section>
<div class="container">
    <div id="journal" data-slug="{{ $id }}">
        <div class="journal p-5">             

                
               <div class="article">
                   <h4 v-text="journal.title"></h4>                    
                   <h6 v-text="journal.author"></h6> 
                   <h4>Abstract</h4>                   
                   <p v-text="journal.abstract">  </p>                      
               </div>
                        

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

                journal: [],
               
            },

            methods: {
                getData() {
                    var vm = this;
                    var id = $('#journal').data('slug');

                    axios.get(`${vm.config.base_path}/public-diu-website/journal/${id}`)
                        .then((
                            response) => {
                                this.journal =response.data;
                                // console.log(response.data);

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