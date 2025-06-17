<style scoped>
    .header {
        position: relative;
        text-transform: uppercase;
        display: inline-block;
        margin-bottom: 40px;
        font-weight: 800;
    }


    .header:after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: -10px;
        height: 3px;
        width: 70px;
        background: #1474B5;
        transform: translateX(-50%);
    }

    .pagination .page-link {
        color: #007bff;
        /* border-radius: 50%; */
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pagination .page-item.active .page-link {
        background-color: #2EAA4D;
        border-color: #2EAA4D;
        color: white;
    }

    .pagination .page-link:hover {
        background-color: #2EAA4D;
        color: white;
    }



    .card-img-top {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 0.25rem;
    }
    .gallery-title{
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        color: #000;

    }
</style>


<div class="container py-5" id='Gallary'>
    <div class="container" v-if="galleries.length>0">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="header">GALLERY</h3>

            <p class="text-center mb-4 h6"><b>Our students engage themselves in various interesting extra curricular
                    activities all through the year.</b> </p>
        </div>


        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-2" v-for="(src, index) in galleries" :key="index">
                <div class="card">
                    <img class="card-img-top" :src="src.image_url" :alt="src.title" @click="openModal(src)"
                        style="cursor: pointer;">
                    <div class="card-body">
                        <p class="gallery-title" v-text="src.title"></p>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel" v-text="selectedImage.title"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img :src="selectedImage.image_url" class="img-fluid" :alt="selectedImage.title">
                        </div>
                    </div>
                </div>
            </div>


            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-sm justify-content-center">

                    <li class="page-item">
                        <a class="page-link fa fa-angle-left" href="javaScript:void(0)" @click="paginatePreview"></a>
                    </li>

                    <li class="page-item" v-for="(row,index) in meta?.last_page" :key="index">
                        <a class="page-link" @click="paginatePageWise(row)" href="javaScript:void(0)"
                            v-html="row"></a>
                    </li>


                    <li class="page-item">
                        <a class="page-link fa fa-angle-right" href="javaScript:void(0)" @click="paginateNext"></a>
                    </li>


                </ul>
            </nav>





        </div>
    </div>
</div>


<script>
    $(document).ready(function() {


        var vue = new Vue({
            el: '#Gallary',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                galleries: '',

                slug: '{{ $slug }}',
                links: [],
                meta: [],
                selectedImage: {},

            },
            methods: {


                getGalleryInfo() {
                    axios.get(
                            `${this.config.base_path}/public-diu-website/department-gallery/${this.slug}`
                            )
                        .then(res => {
                            this.galleries = res.data.data;
                            this.links = res.data.links;
                            this.meta = res.data.meta;
                            console.log(this.meta);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                },
                paginatePreview() {
                    let page_number = parseInt(this.meta.current_page - 1);
                    this.fetchGalleryPaginateInfo(page_number);
                },

                paginateNext() {

                    let page_number = parseInt(this.meta.current_page + 1);
                    this.fetchGalleryPaginateInfo(page_number);

                },

                paginatePageWise(row) {
                    this.fetchGalleryPaginateInfo(row);
                },

                fetchGalleryPaginateInfo(page) {

                    axios.get(
                        `${this.config.base_path}/public-diu-website/department-gallery/${this.slug}?page=${page}`
                        ).then((res) => {

                        this.galleries = res.data.data;
                        this.links = res.data.links;
                        this.meta = res.data.meta;
                        console.log(res);

                    }).catch((error) => {
                        console.log('galleries Info')
                    });
                },
                openModal(image) {
                    this.selectedImage = image;
                    const modal = new bootstrap.Modal(document.getElementById('imageModal'));
                    modal.show();
                },

            },
            computed: {
                totalPages() {
                    return this.meta.last_page;
                }
            },
            created() {
                this.getGalleryInfo();


            }
        });
    });
</script>
