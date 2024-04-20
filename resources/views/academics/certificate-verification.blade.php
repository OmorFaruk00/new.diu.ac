@extends('layouts.master')

@push('style')
    <style>  
        .form-control {
        background: rgba(255, 255, 255, 0.2);
        height: 37px;
        box-shadow: 0 5px 5px 0 rgb(0 0 0 / 5%);
        border-color: #f0f0f0;
        font-size: 16px;
        color: #000 !important;
        padding-left: 10px;
    }



    .search-btn {
        width: 100%;
        color: #fff;
        font-weight: 800;
        font-size: 16px;
        height: 42px;
        background-color: #49B5E7;
        border: none;
        margin-top: 10px;
    }

    select {
        border: 1px solid gray;
        border-radius: 8px;
        padding: 4px 0 4px 24px;
        background-image: url('https://s17.postimg.cc/kc1y6xwlb/download.png');
        background-repeat: no-repeat;
        background-position: 8px;
        
    }

    .select-wrapper {
        position: relative;
    }

 

    .select-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        color: #000 !important;
        margin-top: 10px;
    }
    .main{
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }
 
    </style>
@endpush

@section('content')
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 style="text-transform:uppercase;">Certificate Verifications</h1>
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Certificate Verifications</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->


    <form id="certificateForm" class="py-5">
        @csrf <!-- Add CSRF token for Laravel -->

      <div class="px-3">
        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
           
            <div class="form-group mb-2 field-select">
                <div class="select-wrapper">
                <label for="roll"><strong>Roll</strong></label>

                <select id="roll" class="form-control" name="roll" required>
                    <option value="" selected disabled hidden>Select roll</option>
                    @php
                        for ($row = 1; $row <= 600; $row++) {
                            echo "<option value='" . str_pad($row, 2, '0', STR_PAD_LEFT) . "'>" . str_pad($row, 2, '0', STR_PAD_LEFT) . '</option>';
                        }
                    @endphp
                </select>
                <span class="select-icon">&#9660;</span>
                </div>
                <small id="rollError" class="text-danger with-errors"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
            <div class="form-group mb-2 field-select">
                <div class="select-wrapper">
                <label for="session"><strong>Session</strong></label>
                <select class="form-control" name="session" id="session" required>
                    <option value="" selected disabled hidden>Select session</option>
                    @php
                        function sessionCreate($year)
                        {
                            return $year . '-' . ($year + 1);
                        }
                        $currentYear = date('Y');
                        $startYear = 1993;
                        for ($year = $startYear; $year <= $currentYear; $year++) {
                            $session = sessionCreate($year);
                            echo "<option value=\"$session\">$session</option>";
                        }
                    @endphp
                </select>
                <span class="select-icon">&#9660;</span>

            </div>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
            <div class="form-group mb-2">
                <label for="reg_code"><strong>Reg Code</strong></label>
                <input id="regCode" name="reg_code" type="text" class="form-control"
                    placeholder="Enter reg code.Ex: xx-x-xx-xx-xxxxxx" required>
                <small id="regCodeError" class="text-danger with-errors"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto">
            <div class="form-group">
                <label for="passingYear"><strong>Passing Year</strong></label>
                <input id="passingYear" name="passingYear" type="text" class="form-control"
                    placeholder="Enter passing year.Ex:2021" required>
                <small id="passingYearError" class="text-danger with-errors"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 mx-auto mt-3">
            <button type="button" class="search-btn" id="find">Search</button>
            <span id="loadingSpinner" class="fa fa-spinner fa-pulse" style="display: none;"></span>
            <button id="clearButton" type="button" class="btn btn-outline-danger btn-block mt-2"
                style="display: none;">Clear</button>
        </div>
      </div>

    </form>
    <div id="error" class="text-center" >
       
    </div>
   
    <div id="students" class="col-lg-4 col-md-4 col-sm-12 mx-auto py-4 px-3" style="margin-bottom: 30px" ></div>

   
@endsection

@push('script')
    
    <script>
        $(document).ready(function() {
            $("#find").click(function() {
                let roll = document.getElementById('roll').value;
                let session = document.getElementById('session').value;
                let reg_code = document.getElementById('regCode').value;
                let passing_year = document.getElementById('passingYear').value;
                console.log(roll);
                if(!roll || !session || !reg_code|| !passing_year){
                    Swal.fire({
                            title: 'All field are required.',
                            timer: 3000,
                            icon: 'error',
                            position: 'top-right',
                            showConfirmButton: false
                        });
                }else{
                
               

                axios.post('https://api.diu.ac/transcript_verification', {
                        "roll": roll,
                        'session': session,
                        'reg_code': reg_code,
                        'passing_year': passing_year
                    }, {
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => {

                        
                        Swal.fire({
                            title: 'Transcript Found.',
                            timer: 2000,
                            position: 'top-right',
                            showConfirmButton: false
                        });
                        var opt = '';
                        if (response.data) {
                            opt += '<table class="table main" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">';
                            opt += '<tr>';
                            opt += '<th scope="col">Name</th>';
                            opt += '<td scope="col">' + response.data.data.name + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Roll</th>';
                            opt += '<td scope="col">' + response.data.data.roll + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Program</th>';
                            opt += '<td scope="col">' + response.data.data.program + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Batch</th>';
                            opt += '<td scope="col">' + response.data.data.batch + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Session</th>';
                            opt += '<td scope="col">' + response.data.data.session + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">CGPA/Class</th>';
                            opt += '<td scope="col">' + response.data.data.cgpa + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Passing Year</th>';
                            opt += '<td scope="col">' + response.data.data.passing_year + '</td>';
                            opt += '</tr>';
                            opt += '<tr>';
                            opt += '<th scope="col">Transcript</th>';
                            opt += '<td scope="col"><a href="' + response.data.data.transcript_link +
                                '" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>Download</a></td>';
                            opt += '</tr>';


                            opt += '</table>';
                        }else{
                            opt += '<h4>Transcript Not Found</h4>';

                        }

                        $("#students").html(opt);



                    })
                    .catch(error => {
                        console.log(error);                     

                        if (error.response.status == 404) {

                            $('#error').html('<h4 style="color: red">Transcript Not Found</h4>');

                    Swal.fire({
                            title: 'Transcript Not Found.',
                            timer: 2000,
                            position: 'top-right',
                            showConfirmButton: false
                        });

                } else if (error.response.status == 422) {
                    console.log(error.response);
                    Swal.fire({
                            title: 'Validation error.',
                            timer: 2000,
                            position: 'top-right',
                            showConfirmButton: false
                        });
                    
                } else {
                    console.log('certificate verification fail')
                }


                    });


                }
            });



        });
    </script>
@endpush
