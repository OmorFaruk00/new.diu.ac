<div id="notice" v-if='notices'>
    <div class="notice">
        <div class="row" v-for="notice in notices" :key="notice.id">
            <div class="contant">
                <div class="col-3">
                    <p class="notice-date" v-text="notice.published_date"></p>
                </div>
                <div class=" col-9">
                    <a :href="'/notice-details/' + notice.slug" target="_blank">
                        <p class="notice-title" v-text="notice.title"></p>
                    </a>

                </div>
            </div>
        </div>

        <div>
        </div>


    </div>

</div>
<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#notice',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,

                notices: [],
                noticeLinks: [],
                noticeMeta: [],

            },

            methods: {
                getPrograms() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=notice`)
                        .then((
                            response) => {
                            this.notices = response.data.data;
                            this.noticeLinks = response.data.links;
                            this.noticeMeta = response.data.meta;

                        }).catch((error) => {
                            console.log(error.response);

                        });
                }

            },

            created() {
                this.getPrograms();
            }
        });



    });
</script>
