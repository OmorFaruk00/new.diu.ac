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

    .card-title {
        color: #212121;
        font-weight: 700;
        font-size: 16px;
    }

    .card-text {
        text-align: justify;
        color: #000;
        font-size: 14px;
        line-height: 22px;
    }
</style>



<section style="background: #E3DDDD">
    <div class="container py-5" id="Facilities">
        <div class="d-flex justify-content-center">
            <h3 class="header">FACILITIES</h3>
        </div>

        <div class="container">
            <div class="row">
                <div class="card-columns">
                    <div class="card text-center" v-for="(rows, index) in facilities" :key="index">
                        <div class="card-body">
                            <h5 class="card-title" v-text="rows.title"></h5>
                            <p class="card-text" v-text="rows.description"></p>
                        </div>
                    </div>
                </div>
            </div>
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
