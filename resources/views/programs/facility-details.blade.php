@extends('layouts.master')
@section('content')
    <style scoped>
        .facility {
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            padding: 20px;
        }


        .facility-title h1,
        h2,
        h3,
        h4,
        h5,
        h6 {

            color: #000;
            font-size: 24px;
            font-weight: 600;
            text-align: justify;
        }

        .facility-desc p {
            font-size: 16px;
            line-height: 25px;
            text-align: justify;
            color: #000;
            font-weight: 400 !important;

        }

        .gallery-img-wrapper {
            overflow: hidden;
            position: relative;
            height: 350px;
        }

        .gallery-img {
            object-fit: cover;
            width: 100%;
            height: 400px;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover {
            transform: scale(1.05);
            cursor: pointer;
        }

        .facility-desc {
            font-size: 1rem;
            line-height: 1.6;
            color: #444;
        }

        .fullscreen-viewer {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.95);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            cursor: default;
        }

        .fullscreen-viewer img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }

        .close-button {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            z-index: 10000;
        }

        .image-title {
            font-size: 16px !important;
            font-weight: 900 !important;

        }

        .facility-desc table {
            border-collapse: collapse;
            width: 100% !important;
        }

        /* .facility-desc th, */
        .facility-desc td {
            border: 1px solid #000;
            padding: 8px;
            color: #000 !important;
            font-weight: 300 !important;


        }

        .facility-desc td p {
            line-height: 10px !important;

        }
    </style>

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Facilities Details</h1>
                <ol>
                    <li><a href="{{ route('home') }}" style="color: #fff;">Home</a></li>
                    <li><a href="#" style="color: #fff;">Programs</a></li>
                    <li style="text-transform: capitalize;">
                        @if ($slug)
                            <a href="{{ '/programs/' . $slug }}">
                                {{ str_replace('-', ' ', $slug) }}
                            </a>
                        @else
                            <span>N/A</span>
                        @endif
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container py-5" id="facilitydetails">
        <div class="facility">
            <h3 class="facility-title" v-text="facility.title"></h3>
            <div class="facility-desc mb-4" v-html="facility.description"></div>

            <!-- Image Gallery -->
            <div class="row">
                <div class="col-md-6 col-sm-6 mb-4" v-for="(rows, index) in facility.images" :key="index">
                    <div class="card h-100 shadow-sm gallery-img-wrapper" @click="viewImage(rows.file_url)"
                        style="cursor: pointer;">
                        <img :src="rows.file_url" :alt="'Facility Image ' + (index + 1)" class="gallery-img" />

                        <div class="card-footer text-center bg-white">
                            <strong class="image-title" v-text="rows.file_name"></strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div v-if="fullscreenImage" class="fullscreen-viewer">
            <button class="close-button" @click="closeFullscreen">×</button>
            <img :src="fullscreenImage" alt="Full Image" />
        </div>

    </div>
    <!-- Fullscreen Viewer -->





    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#facilitydetails',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },
                    loading: false,
                    facility: '',
                    fullscreenImage: null,
                    id: {{ $id }},

                },

                methods: {
                    getPrograms() {
                        var vm = this;

                        axios.get(
                            `${vm.config.base_path}/public-diu-website/department-facilities-details/${vm.id}`
                        ).then((
                            response) => {
                            this.facility = response.data;
                            console.log(response.data)
                        }).catch((error) => {
                            console.log(error.response);
                        });
                    },
                    viewImage(url) {
                        this.fullscreenImage = url;
                    },
                    closeFullscreen() {
                        this.fullscreenImage = null;
                    }

                },

                created() {
                    this.getPrograms();
                }
            });
        });
    </script>
@endsection
