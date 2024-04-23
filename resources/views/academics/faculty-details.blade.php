@extends('layouts.master')
@section('content')
<style>

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
                        var slug = this.$route.params.slug

                        axios.get(`${vm.config.base_path}/public-diu-website/department-faculty-member/${slug}`)
                            .then((
                                response) => {
                                    console.log(response.data)
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