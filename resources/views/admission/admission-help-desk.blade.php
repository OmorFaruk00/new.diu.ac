@extends('layouts.master')
@section('content')
<main id="main" style="margin-top: 80px;">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Admission Help Desk</h1>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Admission Help Desk</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <section class="inner-page internship">
        <img src="{{asset('assets/images/helpdesk.png')}}" alt="helpdesk" class="img-fluid w-100 banner">
        <div class="bannertext">
        <h2>Admission <br> Help Desk</h2>
        </div>
        <div class="container my-4">

            <div class="row">
                <div class="col-12">
                    <h3 style="font-weight: bold;">Admission Help Desk</h3>
                    
                    <table class="table table-striped table-bordered mobtable">
                    <thead class='bg-info text-white'>
                        <tr>
                            <th style="text-align: left;">S.no</th>
                            <th style="text-align: left;">Information Centers:</th>
                            <th style="text-align: left;">Phone</th>
                        </tr>
                    </thead>

                        <tr>
                            <td>1.</td>
                            <td>Director of Admissions</td>
                            <td>9490 361 1111, 0866-35 00122, 2577715, 799 799 5704, 7997 995 730</td>
                        </tr>

                        <tr>
                            <td>2.</td>
                            <td>Srikakulam / Vizianagaram</td>
                            <td>7997995728</td>
                        </tr>

                        <tr>
                            <td>3.</td>
                            <td>Vizag</td>
                            <td>7997 995 706, 9985 657 365</td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td>Vijayawada</td>
                            <td>7997 998 354, 7997 998 377, 7997 995 694, 7997 995 695, 9666 637 613</td>
                        </tr>

                        <tr>
                            <td>5.</td>
                            <td>Guntur</td>
                            <td>7997 995 733, 7997 995 106, 7997 995 725, 7997 996 048</td>
                        </tr>

                        <tr>
                            <td>6.</td>
                            <td>Nellore</td>
                            <td>7997 998 356, 9492 469 999, 7997 995 702</td>
                        </tr>
                        
                        <tr>
                            <td>7.</td>
                            <td>Prakasam</td>
                            <td>7997 998 356, 9492 469 999, 7997 995 698</td>
                        </tr>

                        <tr>
                            <td>8.</td>
                            <td>East Godavari</td>
                            <td>7997 995 705, 7997 995 706</td>
                        </tr>

                        <tr>
                            <td>9.</td>
                            <td>West Godavari</td>
                            <td>7997 995 740, 7997 995 693</td>
                        </tr>

                        <tr>
                            <td>10.</td>
                            <td>Tirupathi</td>
                            <td>7997 995 713, 9949 366 189</td>
                        </tr>

                        <tr>
                            <td>11.</td>
                            <td>Cuddapah / Anantapur</td>
                            <td>7997995711</td>
                        </tr>

                        <tr>
                            <td>12.</td>
                            <td>Kurnool</td>
                            <td>7997 995 711, 7997 995 701</td>
                        </tr>

                        <tr>
                            <td>13.</td>
                            <td>Khammam</td>
                            <td>9290429635</td>
                        </tr>

                        <tr>
                            <td>14.</td>
                            <td>Hyderabad</td>
                            <td>9550 344 777, 9010 150 111, 7997 998 380, 9133 926 000, 9493 514 295</td>
                        </tr>

                        <tr>
                            <td>15.</td>
                            <td>Warangal</td>
                            <td>9133925000</td>
                        </tr>

                        <tr>
                            <td>16.</td>
                            <td>Karimnagar</td>
                            <td>9133924000</td>
                        </tr>

                        <tr>
                            <td>17.</td>
                            <td>Nizamabad</td>
                            <td>9390361996</td>
                        </tr>

                        <tr>
                            <td>18.</td>
                            <td>Rajasthan / Delhi</td>
                            <td>9887717753</td>
                        </tr>

                        <tr>
                            <td>19.</td>
                            <td>Orissa</td>
                            <td>7997995727</td>
                        </tr>
                        
                        <tr>
                            <td>20.</td>
                            <td>Bihar / Jharkhand / Uttar Pradesh / Uttarakhand/ Maharashtra</td>
                            <td>7997998383</td>
                        </tr>

                        <tr>
                            <td>21.</td>
                            <td>North-East / Jammu and Kashmir</td>
                            <td>9492469999</td>
                        </tr>

                        <tr>
                            <td>22.</td>
                            <td>Kerala</td>
                            <td>9492469999</td>
                        </tr>

                        <tr>
                            <td>23.</td>
                            <td>Karnataka</td>
                            <td>7997 998 356, 8088 053 020</td>
                        </tr>

                        <tr>
                            <td>24.</td>
                            <td>PG Programs</td>
                            <td>7997 995 724, 7997 998 358, 7997 995 741</td>
                        </tr>
                    </table>
                    


                </div>
            </div>

        </div>
    </section>

</main>

@endsection