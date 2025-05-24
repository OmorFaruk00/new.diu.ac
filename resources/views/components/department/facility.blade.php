<style>
    .card-columns {
        column-count: 3;
        column-gap: 1rem;
    }

    @media (max-width: 768px) {
        .card-columns {
            column-count: 2;
            /* 2 columns on tablets */
        }
    }

    @media (max-width: 576px) {
        .card-columns {
            column-count: 1;
            /* 1 column on mobile devices */
        }
    }

    .card {
        break-inside: avoid;
        margin-bottom: 1rem;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }

    .card:hover {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        transform: translateY(-4px);
        transition: all 0.3s ease-in-out;
        cursor: pointer;

    }

    .card:hover .card-title {

        color: #01AA4D
    }

    .card-title {
        color: #212121;
        font-weight: 700;
        font-size: 16px;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.4em;
        max-height: 2.8em;
        /* 2 lines × line height */
        word-break: break-word;

    }

    .card-text {
        text-align: justify;
        color: #000;
        font-size: 14px;
        line-height: 22px;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.4em;
        max-height: 2.8em;
        /* 2 lines × line height */
        word-break: break-word;
    }
</style>



<section style="background: #E3DDDD">
    <div class="container py-5" id="Facilities">
        <div class="d-flex justify-content-center">
            <h3 class="header">FACILITIES</h3>
        </div>


        <div class="card-columns">
            <a v-for="(rows, index) in facilities" :key="index"
                :href="`/programs/facilities/${slug}/${rows.id}`" class="card text-center text-decoration-none text-dark"
                style="display: block; cursor: pointer;">
                <div class="card-body">
                    <h5 class="card-title" v-text="rows.title"></h5>
                    <p class="card-text" v-html="rows.description"></p>
                </div>
            </a>
        </div>


    </div>
</section>

<script>
    $(document).ready(function() {
        var vue = new Vue({
            el: '#Facilities',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                facilities: '',
                slug: '{{ $slug }}',

            },
            methods: {

                getData() {
                    axios.get(
                            `${this.config.base_path}/public-diu-website/department-facilities/${this.slug}`
                        )
                        .then(res => {
                            this.facilities = res.data;

                            console.log(res.data);
                        })
                        .catch(error => {
                            console.log(error);
                        });
                },


            },

            created() {
                this.getData();


            }
        });
    });
</script>
