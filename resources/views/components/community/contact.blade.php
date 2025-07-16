<style>
    .email-signature {
        color: #222f42;
        background: #fff;
        font-family: 'Muli', sans-serif;
        padding: 20px 190px 20px 20px;
        border: 15px solid #222f42;
        box-shadow: 0 0 0 3px #91b33c inset, 0 0 10px rgba(0, 0, 0, 0.5);
        position: relative;
        height: 220px;
    }

    .email-signature:before {
        content: "";
        background: #91b33c;
        width: 230px;
        border: 15px solid #fefdfa;
        position: absolute;
        top: -15px;
        bottom: -15px;
        right: -16px;
        clip-path: polygon(0 0, 100% 0, 100% 100%);
    }

    .email-signature .signature-icon {
        width: 150px;
        height: 150px;
        border: 10px solid #fff;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        overflow: hidden;
        transform: translateY(-50%);
        position: absolute;
        top: 50%;
        right: 20px;
        width: 150px;
    }

    .email-signature .signature-icon img {
        width: 100%;
        height: auto;
    }

    .email-signature .signature-details {
        padding-bottom: 10px;
        margin-bottom: 12px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .email-signature .title {
        font-size: 22px;
        font-weight: 800;
        text-transform: capitalize;
        margin: 0;
    }

    .email-signature .post {
        font-size: 15px;
        font-weight: 400;
        text-transform: lowercase;
    }

    .email-signature .signature-content {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .email-signature .signature-content li {
        font-size: 13px;
        font-weight: 600;
        margin: 0 0 7px;
    }

    .email-signature .signature-content li:last-child {
        margin: 0;
    }

    .email-signature .signature-content li span {
        margin-right: 6px;
    }

    @media screen and (max-width:576px) {
        .email-signature {
            padding: 190px 0 20px 0;
            height: auto;
        }

        .email-signature:before {
            height: 200px;
            width: auto;
            right: -15px;
            left: -15px;
            top: -15px;
            bottom: auto;
            clip-path: polygon(0% 0%, 100% 0%, 100% 95%);
        }

        .email-signature .signature-icon {
            transform: translateY(0) translateX(-50%);
            left: 50%;
            top: 20px;
        }

        .email-signature .signature-details,
        .email-signature .signature-content {
            text-align: center;
        }
    }
</style>

<div class="demo py-5">
    <div class="container">
        <h3 class="build-title mb-3">Contact</h3>
        <div class="row">


            <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                <a href="https://profile.diu.ac/rezaurrahman#PersonalInformation" target="_blank">
                <div class="email-signature">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_770.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Rezaur Rahman</h2>
                        <span class="post">Section Officer</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-phone"></span> 01939851064</li>
                        <li><span class="fa fa-envelope"></span> rezaur@diu.ac</li>

                    </ul>
                </div>
            </a>
            </div>


            {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                <a href="https://profile.diu.ac/mohammadthaminahsan#PersonalInformation" target="_blank">
                <div class="email-signature">
                    <div class="signature-icon">
                        <img src="https://api.diu.ac/images/profile_photo_file_860.jpg" alt="">
                    </div>
                    <div class="signature-details">
                        <h2 class="title">Mohammad Thamin Ahsan</h2>
                        <span class="post">Junior Officer (Information & Admission )</span>
                    </div>
                    <ul class="signature-content">
                        <li><span class="fa fa-phone"></span> 01302690340</li>
                        <li><span class="fa fa-envelope"></span> ahsan.diu@diu.ac</li>

                    </ul>
                </div>
                </a>

            </div> --}}
        </div>
    </div>
</div>
