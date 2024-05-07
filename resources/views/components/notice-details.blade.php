<style>
    .notice {
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 20px;
    }
</style>

<div id="noticedetails" data-slug="{{ $slug }}">
    <div class=" notice">
        <h3 v-text="notice.title"></h3>
        <p><strong>Published Date:</strong> <span v-text="notice.published_date"></span></p>
        <p v-html="notice.description"></p>

        {{-- <p v-text="notice.notice_files[0]['file_name']"><a href=""></a></p> --}}

        <!-- Display file names with download links -->
        <div>

            <div v-for="not in notice.notice_files" :key="not.id">
                <div class="d-flex">
                    <p v-text="not.file_name"></p>
                    <a :href="not.file_url" :download="not.file_name" target="_blank" style="margin-left: 20px"><i
                            class="fa fa-download"></i>Download</a>
                </div>

            </div>

        </div>
    </div>
</div>

    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#noticedetails',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },
                    loading: false,
                    notice: '',
                    slug: '',
                },

                methods: {
                    getPrograms() {
                        var vm = this;
                        var slug = $('#noticedetails').data('slug');

                        axios.get(`${vm.config.base_path}/public-diu-website/notice/${slug}`).then((
                            response) => {
                            this.notice = response.data.data;
                            console.log(response.data.data);
                        }).catch((error) => {
                            console.log(error.response);
                        });
                    }
                },

                created() {
                    this.slug = $('#noticedetails').data(
                    'slug'); 
                    this.getPrograms(); 
                }
            });
        });
    </script>
