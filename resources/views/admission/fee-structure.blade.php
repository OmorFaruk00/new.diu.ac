@extends('layouts.master')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Fee Structure</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Fee Structure</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
        <img src="assets/images/program-fee-structure.png" alt="Program Fee Structure" class="img-fluid w-100">
        <div class="bannertext">
        <h2>Programs <br>Fee Structure</h2>
      
        </div>
        <div class="container my-4" id="fee">           
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center font-bold">PROGRAMS FEE STRUCTURE</h2>
                    <h6 class="text-center">
                        Here you can review some statistics about our Education Center</h6>
                    <div class="table-responsive">
                    <table v-if="fees" class="table table-bordered table-striped ">
                    <thead class="bg-info text-white">
                        <tr>
                            <th>Programs Name</th>
                            <th>Duration</th>
                            <th>Credit </th>                           
                            <th>Admission Fee</th>
                            <th>Total Fees</th>
                        </tr>
                    </thead>                                    
                        <tr v-for="(item, index) in fees" :key="index">                           
                            <td v-text="item.name"></td>
                            <td v-text="item.duration"></td>
                            <td v-text="item.credit"></td>
                            <td v-text="item.admission_fee"></td>
                            <td v-text="item.tuition_fee"></td>
                        </tr>                                      
                       
                    </table>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>
@endsection
@push('script')



<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#fee',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },                              
                fees: [],             

            },
            methods: {
                getData() {
                    var vm = this;
                    axios.get(`${vm.config.base_path}/get_all_course_fee`)
                        .then((
                            response) => {
                            this.fees = response.data; 
                            console.log(response)                      

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