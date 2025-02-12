@extends('layouts.master')
@section('content')
<style>
    .notice{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
        padding: 20px;
    }
    .contant{
        display: flex;
        align-items: center;
    }
    .notice-date{
        background: #01AA4D;
        color: #000;
        font-weight: 700;
        margin-right: 30px;
        padding: 8px 10px;
        border-radius: 5px;
        font-size: 15px; 
        text-align: center;  

    }
    .notice-title{  
        
    white-space: nowrap; 
    overflow: hidden; 
    text-overflow: ellipsis;
    color: #000;
    font-size: 18px;
    font-weight: 600;

    }
    .notice-title:hover{ 
      color:#01AA4D; 

     }

     .pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 5px;
}

.pagination .page-item {
    margin: 0 3px;
}

.pagination .page-link {
    color: #01AA4D;
    background-color: #fff;
    border: 1px solid #01AA4D;
    padding: 5px 12px;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
    font-weight: 600;
}

.pagination .page-link:hover {
    background-color: #01AA4D;
    color: #fff;
}

.pagination .page-item.active .page-link {
    background-color: #01AA4D;
    color: white;
    border-color: #01AA4D;
}

.pagination .page-item.disabled .page-link {
    color: #aaa;
    background-color: #f8f9fa;
    border-color: #ddd;
    cursor: not-allowed;
}

@media (max-width: 768px) {
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }

    .pagination .page-item {
        margin: 2px;
    }

    .pagination .page-link {
        padding: 5px 10px;
        font-size: 14px;
    }
}

</style>
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1 style="text-transform: uppercase">Notice</h1>
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Notice</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->
  @php
  @endphp
 
<div class="container" id="notice">
  <div class="row py-5">
    <div class="col-lg-9 col-md-12 col-sm-12 mx-auto">
        <div  v-if='notices'>
            <div class="notice">
                <div class="d-flex justify-content-center">
                    <img src="/assets/images/notice1.png" class="img-fluid" style="height: 250px;"
                    alt="Section 3 Background Image" />
                </div>
                <div class="row" v-for="notice in notices" :key="notice.id">
                    <div class="contant">
                        <div class="col-3">
                            <p class="notice-date" v-text="notice.published_date"></p>
                        </div>
                        <div class=" col-9">
                            <a :href="'/notice-details/' + notice.slug">
                                <p class="notice-title" v-text="notice.title"></p>
                            </a>
        
                        </div>
                    </div>
                </div>

                <div class="col-12" v-if="this.last_page >1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12" style="color: #000;padding-top:20px">
                            Showing <span v-html="this.noticeMeta.from ?? 0"></span> to <span v-html="this.noticeMeta.to ?? 0"></span>
                            of
                            <span v-html="this.noticeMeta.total"></span> entries
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <nav aria-label="Page navigation example" class="my-3 mx-2">
                                <ul class="pagination pagination-sm justify-content-end">
                                    <li class="page-item" :class="this.current_page > 1 ? '' : 'disabled'">
                                        <a class="page-link" href="javaScript:void(0)" @click="paginatePreview"
                                            aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item" v-for="(row,index) in this.last_page" :key="index"
                                        :class="row == this.current_page ? 'active' : ''">
                                        <a class="page-link" href="javaScript:void(0)" @click="paginatePageWise(row)"
                                            v-text="row"></a>
                                    </li>
                                    <li class="page-item" :class="this.last_page > this.current_page ? '' : 'disabled'">
                                        <a class="page-link" href="javaScript:void(0)" @click="paginateNext" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                
            </div>

           


            
        </div>

        
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
                current_page: 1,
                last_page: 1,

            },

            methods: {
                fetchData(page =1) {
                    var vm = this;

                    axios.get(`${vm.config.base_path}/public-diu-website/notice-event?type=notice&page=${page}`)
                        .then((
                            response) => {
                            this.notices = response.data.data;
                            this.noticeLinks = response.data.links;
                            this.noticeMeta = response.data.meta;
                            this.current_page = response.data.meta.current_page;
                            this.last_page = response.data.meta.last_page;
                            console.log(this.noticeMeta);

                        }).catch((error) => {
                            console.log(error.response);

                        });
                },
                paginatePreview() {
                        let page_number = parseInt(this.current_page - 1);
                        this.fetchData(page_number);
                    },
                    paginateNext() {
                        let page_number = parseInt(this.current_page + 1);
                        this.fetchData(page_number);

                    },
                    paginatePageWise(page) {
                        this.fetchData(page);
                    },

            },

            created() {
                this.fetchData();
            }
        });



    });
</script>
@endsection

