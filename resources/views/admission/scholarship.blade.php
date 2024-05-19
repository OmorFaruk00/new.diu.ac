@extends('layouts.master')
@push('style')
    <style>
        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100% !important;
        }

        .btn-light {
            height: 35px !important;
        }

        .dropdown-toggle::after {
            position: absolute;
            right: 10px;
            top: 15px;
        }

        .dropdown-menu {
            min-width: 0px !important;
        }

        .card-body form {
            padding-bottom: 0 !important;
        }
        .card{
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
            background: #E3E3E5;

        }
    </style>
@endpush
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h1 style="text-transform:uppercase;">Scholarships</h1>
                    <ol>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Scholarships</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <img src="assets/images/scholarship.png" alt="scholarship" class="img-fluid w-100 page-bg">
            <div class="bannertext">
                <h2>Scholarships</h2>
                <p>Avail Upto 50% Merit Scholarships</p>
            </div>
            <section class="diu-contact-us diu-section-bg">
                <div class="container diu-left-bottom">

                    <div class="col-lg-6 offset-lg-3 pb-5 my-5">
                        <div id="vue_app">
                            <div class="card">
                                <div class="card-header text-dark">
                                    Course Fee Calculation
                                </div>
                                <div class="card-body">
                                    <form @submit.prevent="feeCalculate()" autocomplete="off">
                                        <div class="row">                                       
                                            <div class="col-12 mb-2">
                                                <label for="program_id">Select Course</label>
                                                <select name="program_id" v-on:change="courseChange" id="program_id"
                                                    class="form-select" v-model="program_id" required>
                                                    <option value="" selected disabled>Select Course</option>
                                                    <option v-for="(program,index) in programs" :key="index"
                                                        :value="program.id" v-html="`${program.program_name}`"></option>
                                                </select>

                                                <small v-if="errors.program_id" class="bg-danger text-white with-errors"
                                                    v-html="errors.program_id[0]"></small>
                                            </div>

                                            <div class="col-12 mb-2">
                                                <label for="sex">Select Sex</label>                                               
                                                <select name="sex" id="sex" class="form-select" v-model="sex"
                                                    required>
                                                    <option value="" selected disabled>Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>

                                                <small v-if="errors.sex" class="bg-danger text-white with-errors"
                                                    v-html="errors.sex[0]"></small>
                                            </div>

                                            <div class="col-12 mb-2">
                                                <div class="form-group focused">
                                                    <label for="sex">SSC Result</label>
                                                    <input type="text" name="ssc_result" v-model="ssc_result"
                                                        class="form-control" min="1" placeholder="5.00" required>
                                                </div>

                                                <small v-if="errors.ssc_result" class="bg-danger text-white with-errors"
                                                    v-html="errors.ssc_result[0]"></small>
                                            </div>

                                            <div class="col-12 mb-2">
                                                <div class="form-group focused">
                                                    <label for="sex">HSC / Diploma Result</label>
                                                    <input type="text" name="hsc_result" v-model="hsc_result"
                                                        class="form-control" min="1" placeholder="5.00" required>
                                                </div>

                                                <small v-if="errors.hsc_result" class="bg-danger text-white with-errors"
                                                    v-html="errors.hsc_result[0]"></small>
                                            </div>

                                            <div class="col-12 mt-2">
                                                <button type="submit" class="btn btn-info btn-block w-100">Calculate <i
                                                        v-if="loading" class="fas fa-spinner fa-pulse"></i>
                                                </button>
                                            </div>

                                            <div class="col-12 mt-4"
                                                v-if="calculateData && calculateData?.program?.type == 'general'">
                                                <p>Regular Course Fee: BDT. <span
                                                        v-html="calculateData?.program?.course_fee"></span>/-</p> <br>
                                                <p>Admission Form: BDT. 1000/-</p> <br>
                                                <p>English Book: BDT. 500/-</p> <br>
                                                <p>Admission Fee: BDT. <span
                                                        v-html="calculateData?.program?.admission_fee"></span>/-</p> <br>
                                                <p>Scholarship For your Result <span
                                                        v-if="calculateData?.studentSex == 'female'"> + Female Quota</span>
                                                    :
                                                    BDT. <span v-html="calculateData?.scholarshipAmount"></span>/-</p> <br>
                                                <p>Total Fee (After Scholarship) : BDT. <span
                                                        v-html="calculateData?.totalCostAfterScholarship"></span>/-</p> <br>

                                                <p>Semester Fee- BDT. <span
                                                        v-html="semesterFeeGeneral(calculateData?.totalCostAfterScholarship,calculateData?.program?.admission_fee,calculateData?.program?.total_semester)"></span>/-
                                                </p> <br>
                                                <p>Total Semester : <span
                                                        v-html="calculateData?.program?.total_semester"></span></p> <br>

                                                <p>Semester Duration- <span
                                                        v-html="calculateData?.program?.duration"></span> month</p> <br>
                                                <p>Class Weekly- <span v-html="calculateData?.program?.class_weekly"></span>
                                                    days</p> <br>
                                                <p>Campus- <span v-html="calculateData?.program?.campus"></span></p> <br>
                                            </div>

                                            <div class="col-12 mt-2"
                                                v-if="calculateData && calculateData?.program?.type == 'special'">
                                                <p>Regular Course Fee- BDT. <span
                                                        v-html="calculateData?.program?.course_fee"></span>/-</p> <br>
                                                <p>Admission Form = 1000/-</p> <br>
                                                {{--                                        <p>English Book = 500/-</p> <br> --}}
                                                <p>Admission Fee- BDT. <span
                                                        v-html="calculateData?.program?.admission_fee"></span>/-</p> <br>
                                                <p>After Special Scholarship Tuition Fee- BDT. <span
                                                        v-html="calculateData?.program?.offer_course_fee"></span>/-</p> <br>

                                                <p>Total - BDT. <span
                                                        v-html="totalFee(calculateData?.program?.offer_course_fee,calculateData?.program?.admission_fee)"></span>/-
                                                </p> <br>
                                                <p>Semester Fee- BDT. <span
                                                        v-html="semesterFee(calculateData?.program?.offer_course_fee,calculateData?.program?.total_semester)"></span>/-
                                                </p> <br>
                                                <p>Total Semester- <span
                                                        v-html="calculateData?.program?.total_semester"></span></p> <br>
                                                <p>Semester Duration- <span
                                                        v-html="calculateData?.program?.duration"></span> month</p> <br>
                                                <p>Class Weekly- <span v-html="calculateData?.program?.class_weekly"></span>
                                                    days</p> <br>
                                                <p>Campus- <span v-html="calculateData?.program?.campus"></span></p> <br>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </section>

    </main>
 
@endsection
@push('script')

    {{-- <script src="{{ asset('assets/vue/vue.min.js') }}"></script>
    <script src="{{ asset('assets/vue/axios.min.js') }}"></script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#vue_app',
                data: {
                    config: {
                        base_path: "{{ env('API_URL') }}",
                    },
                    loading: false,
                    errors: [],
                    type: 'general',
                    programs: [],
                    program_id: '',
                    ssc_result: '',
                    hsc_result: '',
                    sex: '',
                    calculateData: ''
                },

                methods: {

                    fetchProgramInfo() {
                        var vm = this;
                        this.program_id = '';
                        this.ssc_result = '';
                        this.hsc_result = '';
                        this.sex = '';
                        this.calculateData = '';

                        axios.get(`${vm.config.base_path}/public/admission/generale-student-program`).then((
                            response) => {

                            this.programs = response.data;

                        }).catch((error) => {
                            console.log(error.response)

                        });
                    },

                    courseChange() {
                        this.calculateData = '';
                    },

                    typeWiseProgram() {
                        this.fetchProgramInfo()
                    },

                    feeCalculate() {

                        this.loading = true;

                        axios.get(`${this.config.base_path}/public/admission/course-fee-calculation`, {
                            params: {
                                type: this.type,
                                program_id: this.program_id,
                                ssc_result: this.ssc_result,
                                hsc_result: this.hsc_result,
                                sex: this.sex,
                            }
                        }).then((response) => {

                            this.calculateData = response.data;
                            this.errors = '';

                            // toastr.success(response.data.message);

                        }).catch((error) => {

                            console.log(error.response)

                            this.errors = error.response.data;
                    

                        }).finally((res) => {
                            this.loading = false;
                        });

                    },

                    totalFee(courseFee, admissionFee) {
                        return parseInt(courseFee) + parseInt(admissionFee) + parseInt(1000);
                    },

                    semesterFee(courseFee, totalSemester) {
                        return (parseInt(courseFee) / totalSemester).toFixed(0);
                    },

                    semesterFeeGeneral(totalFee, admissionFee, semester) {

                        return ((parseInt(totalFee) - parseInt(admissionFee)) / semester).toFixed(0);
                    }

                },

             

                created() {
                    this.fetchProgramInfo();
                }
            });

          

        });
    </script>
@endpush
