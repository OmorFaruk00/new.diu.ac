@extends('layouts.master')
@section('content')
<style>
    .trams ol li  {
        font-size: 18px;
        text-align: justify;
        color: #000;
        line-height: 25px;
        margin-bottom: 20px;

    }
    .trams h2{
        color: #000;
        font-weight: 600;
        margin-bottom: 20px;

    }
</style>
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Terms & Conditions and Refund Policy
            </h4>
            <ol class="d-flax justify-content-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Terms & Conditions and Refund Policy</a></li>
                </li>
            </ol>
        </div>

    </div>
</section>
<div class="container py-5 trams">

    <div class="sec-title-2 mb-50 text-center mx-auto">
        <h2>Terms & Conditions and Refund Policy</h2>       
    </div>
    <ol style="text-align: justify">
        <li>TDR means Transaction Discount Rate that is chargeable to the Students of DIU while paying their dues through CityPay online payment gateway in accordance with” Exhibit A: Payment Details”.</li>

        <li>Following services shall be provided by DIU to the students under this agreement: Payment of Admission Fees, Tuition Fees, Semester Fees and any Other Fees through CityPay online payment gate way.
        </li>
        <li>
            If a transaction is an invalid transaction CityPay may at its sole discretion (and without a request or a demand from a cardholder) on legitimate grounds
            <ul>
                <li>a. Refuse to accept the transaction; or</li>
                <li>b. If the transaction has been processed, at any time within 10 days of the date of the Transaction, charge the transaction back to DIU and DIU will charge back to the concerned student accordingly.</li>
            </ul>

        </li>
        
        <li>If the DIU authority is unable to provide the agreed services to any student, the DIU shall forthwith make a proper cancellation for giving effect to the same as well as provide the funds in the account to facilitate a refund of the entire amount due to the student.</li>
        <li>All the refund related charges and/or reversal of TDR shall be applicable as per prevailing policy of the concerned payment channel in relation to the refund processing.</li>
        <li>DIU and all related parties shall comply with all AML & CFT regulations and guidelines of Bangladesh Bank while being involved in transactions under this agreement.</li>
        <li>If any dispute involving a Transaction or CityPay suspects that fraud is involved from DIU’s student, then CityPay will notify DIU about such matter and DIU shall take all the necessary measures to rectify such action by charging back to the concerned student.</li>
        <li>DIU shall be solely responsible for the accuracy of all information and validity of the Fees and any other charges.</li>
        <li>All disputes relating to the terms and conditions of this agreement shall be settled amicably between DIU and CityPay within 30 days. If amicable settlement is not possible any way then it will be settled in accordance with the provisions of the Arbitration Act,2001.</li>
        <li>The DIU and all parties related with DIU shall maintain the confidentiality of the information relating to the transactions through CityPay.</li>
        <li>DIU authority shall not be liable for any delay in or failure to perform its obligations if that delay or failure is caused by circumstances beyond its reasonable control i.e. fire, strikes, insurrection, riots, embargos, inability to obtain supplies, refusal or revocation of license, or regulations of any civil or military authority, act of God, flood or any network breach, breakdown in any equipment including computer hardware and software. If any such circumstances continue for a period of three months, then DIU and CityPay may terminate this Agreement whereupon DIU shall forthwith cease to use the services.</li>
    </ol>

    <div class="mb-5 pb-5">
        <h2 class="text-center pt-5">Exhibit A: Payment Details</h2>
        <ol>
            <li>Processing Fee for Visa Card (Local/International) - 1.02% of the Transaction Amount.</li>
            <li>Processing Fee for Master Card (Local/International) - 1.02% of the Transaction Amount.</li>
            <li>Processing Fee for Amex Card (Local) - 1.02% of the Transaction Amount.</li>
            <li>Processing Fee for Union Pay Card- 1.02% of the Transaction Amount.</li>
        </ol>
    </div>
    
</div>

   
@endsection
