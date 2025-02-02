@extends('layouts.master')

@push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">


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

        .checkbox {
            /* border-bottom: 1px dashed rgba(255,255,255,0.5); */
            /* padding: 5px 5px 9px 5px; */
            /* margin: 0 0 10px; */
            display: block;
        }

        .checkbox input[type=checkbox] {
            margin: 0;
            visibility: hidden;
            left: 1px;
            top: 1px;
        }

        .checkbox label {
            font-size: 20px;
            line-height: 26px;
            padding-left: 35px;
            margin: 0;
            display: block;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease 0s;
        }

        .checkbox label:before,
        .checkbox label:after {
            content: "";
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.5);
            border-radius: 4px;
            position: absolute;
            top: 3px;
            left: 3px;
            transition: all 0.25s;
        }

        .checkbox label:after {
            height: 10px;
            width: 16px;
            border-radius: 0 0 0 4px;
            border: 5px solid #fff;
            border-top: none;
            border-right: none;
            opacity: 0;
            transform: rotate(-45deg);
            top: 15px;
            left: 6px;
        }

        .checkbox input[type=checkbox]:checked+label {
            font-weight: 600;
        }

        .checkbox input[type=checkbox]:checked+label:before {
            opacity: 0;
            top: -10px;
        }

        .checkbox input[type=checkbox]:checked+label:after {
            opacity: 1;
            top: 6px;
        }

        .form-group label {
            font-size: 18px;

        }

        .out-of {
            margin-bottom: 10px;
            width: 40px;
            margin-left: 20px;
            border: 2px solid #000;
        }

        @media only screen and (max-width:767px) {
            .checkbox {
                margin: 0 0 20px;
            }
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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Scholarships</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <img src="/assets/images/scholar.png" alt="scholarship" class="img-fluid w-100 page-bg">
            <div class="bannertext">
                <h2>Scholarships</h2>
                <p>Avail Upto 50% Merit Scholarships</p>
            </div>
            <section class="diu-contact-us diu-section-bg">
                <div class="container diu-left-bottom">

                    <div class="col-lg-6 offset-lg-3 pb-5 mt-5">
                        <div id="vue_app">
                            <div class="card bg-light">
                                <div class="card-header text-dark">
                                    Course Fee Calculation
                                </div>
                                <div class="card-body bg-secondary text-bg-primary">
                                    <form @submit.prevent="feeCalculate()" autocomplete="off">
                                        <div class="row">

                                            <div class="col-12 mb-1">
                                                <label for="program_id">Select Course</label>
                                                <select name="program_id" v-on:change="courseChange" id="program_id"
                                                    class="bSelect form-select" v-model="program_id" required>
                                                    <option v-for="(program,index) in programs" :key="index"
                                                        :value="program.id" v-html="`${program.program_name}`"></option>
                                                </select>

                                                <small v-if="errors.program_id" class="bg-danger text-white with-errors"
                                                    v-html="errors.program_id[0]"></small>
                                            </div>

                                            <div class="col-12 mb-1">
                                                <label for="sex">Select Sex</label>
                                                <select name="sex" id="sex" class="bSelect form-select"
                                                    v-model="sex" required>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>

                                                <small v-if="errors.sex" class="bg-danger text-white with-errors"
                                                    v-html="errors.sex[0]"></small>
                                            </div>

                                            <div class="col-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox1" v-model="checkbox1"
                                                        @click="goldenCgpa" @change="checkOnlyOne('checkbox1')">
                                                    <label for="checkbox1">I Have Both Golden GPA 5</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox2" v-model="checkbox2"
                                                        @click="putCgpa" @change="checkOnlyOne('checkbox2')">
                                                    <label for="checkbox2">I Have Not Both Golden GPA 5</label>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-3" v-if="cgpa">
                                                <div class="form-group focused">
                                                    <div class="d-flex">
                                                        <label for="sex">SSC Result Out of </label>
                                                        <select class="out-of" id="sscResult" v-model="ssc_out_of">
                                                            <option value="5">5</option>
                                                            <option value="4">4</option>

                                                        </select>
                                                    </div>
                                                    <input type="text" name="ssc_result" v-model="ssc_result"
                                                        class="form-control" min="1" placeholder="5.00" required>


                                                </div>

                                                <small v-if="errors.ssc_result" class="bg-danger text-white with-errors"
                                                    v-html="errors.ssc_result[0]"></small>


                                            </div>

                                            <div class="col-12 mb-1" v-if="cgpa">
                                                <div class="form-group focused">
                                                    <div class="d-flex">
                                                        <label for="sex">HSC / Diploma Result Out of </label>
                                                        <select class="out-of" id="sscResult" v-model="hsc_out_of">
                                                            <option value="5">5</option>
                                                            <option value="4">4</option>

                                                        </select>
                                                    </div>
                                                    <input type="text" name="hsc_result" v-model="hsc_result"
                                                        class="form-control" min="1" placeholder="5.00" required>
                                                </div>

                                                <small v-if="errors.hsc_result" class="bg-danger text-white with-errors"
                                                    v-html="errors.hsc_result[0]"></small>


                                            </div>


                                            <div class="col-12 mt-3">
                                                <button type="submit" class="btn btn-info btn-lg w-100 mb-3"
                                                    v-if="calculate">Calculate <i v-if="loading"
                                                        class="fas fa-spinner fa-pulse"></i>

                                                </button>

                                                <h6 v-if="result_error"
                                                    class="bg-danger text-white text-center p-2 with-errors"
                                                    style="margin-top: 20px">You
                                                    are not eligible for admission!</h6>
                                            </div>

                                            <div class="col-12 mt-2"
                                                v-if="calculateData && calculateData?.program?.type == 'general'">
                                                <p>Regular Course Fee: BDT. <span
                                                        v-html="calculateData?.program?.course_fee"></span>/-</p> <br>
                                                <p>Admission Form: BDT. 1000/-</p> <br>
                                                <p>English Book: BDT. 500/-</p> <br>
                                                <p>Admission Fee: BDT. <span
                                                        v-html="calculateData?.program?.admission_fee"></span>/-</p> <br>
                                                <p>Scholarship For your Result <span
                                                        v-if="calculateData?.studentSex == 'female'">
                                                        +
                                                        Female Quota</span> :
                                                    BDT. <span v-html="calculateData?.scholarshipAmount"></span>/- </p>
                                                <br>
                                                <p>Total Fee (After Scholarship) : BDT. <span
                                                        v-html="calculateData?.totalCostAfterScholarship"></span>/-</p>
                                                <br>

                                                <p>Semester Fee- BDT. <span
                                                        v-html="semesterFeeGeneral(calculateData?.totalCostAfterScholarship,calculateData?.program?.admission_fee,calculateData?.program?.total_semester)"></span>/-
                                                </p> <br>
                                                <p>Total Semester : <span
                                                        v-html="calculateData?.program?.total_semester"></span>
                                                </p> <br>

                                                <p>Semester Duration- <span
                                                        v-html="calculateData?.program?.duration"></span> month
                                                </p> <br>
                                                <p>Class Weekly- <span
                                                        v-html="calculateData?.program?.class_weekly"></span> days
                                                </p> <br>
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
                                                        v-html="calculateData?.program?.offer_course_fee"></span>/-</p>
                                                <br>

                                                <p>Total - BDT. <span
                                                        v-html="totalFee(calculateData?.program?.offer_course_fee,calculateData?.program?.admission_fee)"></span>/-
                                                </p> <br>
                                                <p>Semester Fee- BDT. <span
                                                        v-html="semesterFee(calculateData?.program?.offer_course_fee,calculateData?.program?.total_semester)"></span>/-
                                                </p> <br>
                                                <p>Total Semester- <span
                                                        v-html="calculateData?.program?.total_semester"></span>
                                                </p>
                                                <br>
                                                <p>Semester Duration- <span
                                                        v-html="calculateData?.program?.duration"></span> month
                                                </p> <br>
                                                <p>Class Weekly- <span
                                                        v-html="calculateData?.program?.class_weekly"></span> days
                                                </p> <br>
                                                <p>Campus- <span v-html="calculateData?.program?.campus"></span></p> <br>
                                            </div>

                                            {{-- special start --}}

                                            <div class="col-12 mt-2" v-if="special_fee && special_fee?.b_golden == 'yes'">
                                                <p>Admission Form: BDT. 1000/-</p> <br>
                                                <p>English Book: BDT. 500/-</p> <br>
                                                <p>Admission Fee: BDT. <span v-html="special_fee?.admission_fee"></span>/-
                                                </p> <br>

                                                <p>After Special Scholarship Tuition Fee- BDT. <span>0.0</span>/- ✂
                                                    (<span>100</span>%)</p> <br>

                                                <p>Total Fee (After Scholarship) : BDT. <span>0.0</span>/-</p> <br>
                                                <p>Semester Fee- BDT. <span>0.0</span>/-
                                                </p> <br>
                                                <p>Total Semester- <span v-html="special_fee?.total_semester"></span>
                                                </p>
                                                <br>
                                                <p>Semester Duration- <span v-html="special_fee?.duration"></span> month
                                                </p> <br>
                                                <p>Class Weekly- <span v-html="special_fee?.class_weekly"></span> days
                                                </p> <br>
                                                <p>Campus- <span v-html="special_fee?.campus"></span></p> <br>

                                            </div>

                                            <div class="col-12 mt-2" v-if="special_fee && special_fee?.b_golden == 'no'">
                                                <h4 class="bg-danger text-white p-3 text-center"> Full Free Scholarship Not
                                                    Available!</h4>
                                            </div>
                                            {{-- special start --}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var vue = new Vue({
                el: '#vue_app',
                data: {
                    config: {
                        base_path: "{{ env('PUBLIC_API_URL') }}",
                    },
                    loading: false,
                    errors: [],
                    type: 'general',
                    programs: [],
                    program_id: '',
                    ssc_result: '',
                    hsc_result: '',
                    sex: '',
                    calculateData: '',
                    cgpa: true,
                    m_ssc: '',
                    m_hsc: '',
                    ssc_error: false,
                    hsc_error: false,
                    checkbox1: false,
                    checkbox2: true,
                    special_fee: '',
                    calculate: true,
                    ssc_out_of: 5,
                    hsc_out_of: 5,
                    result_error: false,

                },

                methods: {

                    fetchProgramInfo() {
                        var vm = this;
                        this.program_id = '';
                        this.ssc_result = '';
                        this.hsc_result = '';
                        this.sex = '';
                        this.calculateData = '';

                        axios.get('https://api.diu.ac/public/admission/generale-student-program').then((
                            response) => {

                            this.programs = response.data;

                        }).catch((error) => {
                            console.log(error.response)

                        });
                    },
                    checkOnlyOne(checkedBox) {
                        if (checkedBox === 'checkbox1') {
                            this.checkbox2 = false;
                        } else if (checkedBox === 'checkbox2') {
                            this.checkbox1 = false;
                        }
                    },

                    putCgpa() {
                        this.cgpa = !this.cgpa;
                        this.special_fee = "";
                        this.calculate = true;
                    },
                    goldenCgpa() {

                        if (this.program_id == '') {
                            toastr.error(" Select course field are required!");

                        } else {


                            this.cgpa = false;
                            this.calculate = false;

                            axios.get(
                                    `https://api.diu.ac/public/admission/generale-student-minimum-cgpa/${this.program_id}`
                                )
                                .then(response => {
                                    this.special_fee = response.data;
                                    this.calculateData = '';
                                    this.ssc_result = '';
                                    this.hsc_result = '';
                                    this.result_error = false;
                                    this.ssc_out_of = 5;
                                    this.hsc_out_of = 5;
                                })
                                .catch(error => {
                                    console.error(error);
                                });
                        }



                    },



                    courseChange() {
                        this.checkbox1 = false;
                        this.checkbox2 = true;
                        this.calculateData = '';
                        this.special_fee = '',
                            this.cgpa = true;
                        this.ssc_result = '';
                        this.hsc_result = '';
                        this.result_error = false;
                        this.ssc_out_of = 5;
                        this.hsc_out_of = 5;
                        this.calculate = true;
                        axios.get(
                                `https://api.diu.ac/public/admission/generale-student-minimum-cgpa/${this.program_id}`
                            )
                            .then(response => {
                                console.log(response);
                                this.m_ssc = response.data.m_ssc;
                                this.m_hsc = response.data.m_hsc;


                            })
                            .catch(error => {
                                console.error(error);
                            });



                    },

                    typeWiseProgram() {
                        this.fetchProgramInfo()
                    },

                    feeCalculate() {

                        // this.loading = true;
                        if (this.ssc_out_of == 5) {
                            var sscResult = this.ssc_result
                        } else {
                            var sscResult = (this.ssc_result * 1.25).toFixed(2)
                        }

                        if (this.hsc_out_of == 5) {
                            var hscResult = this.hsc_result
                        } else {
                            var hscResult = (this.hsc_result * 1.25).toFixed(2)
                        }
                        if (sscResult < this.m_ssc || hscResult < this.m_hsc) {
                            this.result_error = true;
                            this.calculateData = "";

                        } else {

                            axios.get('https://api.diu.ac/public/admission/course-fee-calculation', {
                                params: {
                                    type: this.type,
                                    program_id: this.program_id,
                                    ssc_result: sscResult,
                                    hsc_result: hscResult,
                                    sex: this.sex,
                                }
                            }).then((response) => {
                                console.log(response);

                                this.calculateData = response.data;
                                this.errors = '';
                                this.result_error = false

                                // toastr.success(response.data.message);

                            }).catch((error) => {

                                console.log(error.response)

                                this.errors = error.response.data;

                             

                            }).finally((res) => {
                                this.loading = false;
                            });
                        }

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

                updated() {
                    $('.bSelect').selectpicker('refresh');
                },

                created() {
                    this.fetchProgramInfo();
                }
            });

            $('.bSelect').selectpicker({
                liveSearch: true,
                size: 5
            });

        });
    </script>
@endpush
