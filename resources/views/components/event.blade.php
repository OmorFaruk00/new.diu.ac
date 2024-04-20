<div id="event" v-if='events'>
    <div class="notice">
        <div class="row" v-for="notice in events" :key="notice.id">
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
            el: '#event',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,

                events: [],
                eventLinks: [],
                eventMeta: [],

            },

            methods: {
                getPrograms() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=event`)
                        .then((
                            response) => {
                            this.events = response.data.data;
                            this.eventLinks = response.data.links;
                            this.eventMeta = response.data.meta;

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
