@extends('layouts.master')
@section('content')
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

        <div class="container-xxl py-5" id="faculty">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="heading">Our Expert Faculty</h2>
                </div>
                <div v-if="faculty" class="row g-4 justify-content-center align-self-center">
                    <div v-for="item in faculty" :key="item.id" class="col-lg-3 col-md-6 wow fadeInUp"
                        data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden" style="height: 280px">
                                <img class="img-fluid" :src="item.image_url" alt="image"
                                    style="height: 280px;width:100%" />
                            </div>
                            <div class="text-center p-4" style="height: 130px">
                                <h5 class="mb-0" v-text="item.name"></h5>
                                <small v-text="item.title"></small><br />
                            </div>
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
                el: '#faculty',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },

                    faculty: [],
                },

                methods: {
                    getData() {
                        var vm = this;

                        axios.get(`${vm.config.base_path}/public-diu-website/key-resource-persons`)
                            .then((
                                response) => {
                                this.faculty = response.data.vital_persons
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
