    <ul id="department" v-if='programs'>
        <li v-for="(program, index) in programs" :key="index">
            <a :href="`/programs/${program.slug}`" v-html="`${program.title}`"></a>
        </li>
    </ul>
<script type="text/javascript">
    $(document).ready(function() {
        var vue = new Vue({
            el: '#department',
            data: {
                config: {
                    base_path: "{{ env('API_URL') }}",
                },
                loading: false,
                programs: []

            },

            methods: {
                getPrograms() {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/programs`).then((
                            response) => {
                            this.programs = response.data.data;
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
