@extends('layouts.master')
@section('content')
<style>
    .policy p, .policy ul li  {
        font-size: 18px;
        text-align: justify;
        color: #000;
        line-height: 25px;
        margin-bottom: 20px;

    }
    .policy h4{
        color: #000;
        font-weight: 600;
        margin-bottom: 20px;

    }
</style>
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Privacy Policy
            </h4>
            <ol class="d-flax justify-content-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Privacy Policy</a></li>
                </li>
            </ol>
        </div>

    </div>
</section>
<div class="container py-5 policy">

    <h4>Privacy Policy:</h4>

    <p>
        IT Team-DIU built the DIU CMS app as a Free app. This SERVICE is provided by IT Team-DIU at no cost and
        is intended for use as is.

        This page is used to inform visitors regarding my policies with the collection, use, and disclosure of
        Personal Information if anyone decided to use my Service.

        If you choose to use my Service, then you agree to the collection and use of information in relation to
        this policy. The Personal Information that I collect is used for providing and improving the Service. I
        will not use or share your information with anyone except as described in this Privacy Policy.

        The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is
        accessible at DIU CMS unless otherwise defined in this Privacy Policy.

        Information Collection and Use

        For a better experience, while using our Service, I may require you to provide us with certain
        personally identifiable information. The information that I request will be retained on your device and
        is not collected by me in any way. This app uses device camera to scan only QR codes and showing data by
        scanning the code. We do not access device camera for other purposes without your concern.

        The app does use third party services that may collect information used to identify you.

        Link to privacy policy of third party service providers used by the app

        Google Play Services

        Log Data

        I want to inform you that whenever you use my Service, in a case of an error in the app I collect data
        and information (through third party products) on your phone called Log Data. This Log Data may include
        information such as your device Internet Protocol (“IP”) address, device name, operating system version,
        the configuration of the app when utilizing my Service, the time and date of your use of the Service,
        and other statistics.
    </p>

    <h4>Cookies:</h4>

    <p>
        Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers.
        These are sent to your browser from the websites that you visit and are stored on your device's internal
        memory.

        This Service does not use these “cookies” explicitly. However, the app may use third party code and
        libraries that use “cookies” to collect information and improve their services. You have the option to
        either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose
        to refuse our cookies, you may not be able to use some portions of this Service.

        Service Providers
    </p>

    <p>
        I may employ third-party companies and individuals due to the following reasons:
    </p>

    <ul>
        <li>To facilitate our Service;</li>
        <li>To provide the Service on our behalf;</li>
        <li> To perform Service-related services; or</li>
        <li>To assist us in analyzing how our Service is used.</li>
        <li>I want to inform users of this Service that these third parties have access to your Personal
            Information. The reason is to perform the tasks assigned to them on our behalf. However, they are
            obligated not to disclose or use the information for any other purpose.
        </li>
    </ul>


    <h4>Security:</h4>
    <p>
        I value your trust in providing us your Personal Information, thus we are striving to use commercially
        acceptable means of protecting it. But remember that no method of transmission over the internet, or
        method of electronic storage is 100% secure and reliable, and I cannot guarantee its absolute security.

        Links to Other Sites

        This Service may contain links to other sites. If you click on a third-party link, you will be directed
        to that site. Note that these external sites are not operated by me. Therefore, I strongly advise you to
        review the Privacy Policy of these websites. I have no control over and assume no responsibility for the
        content, privacy policies, or practices of any third-party sites or services.
    </p>

    <h4>Children’s Privacy</h4>
    <p>These Services do not address anyone under the age of 13. I do not knowingly collect personally
        identifiable information from children under 13 years of age. In the case I discover that a child under
        13 has provided me with personal information, I immediately delete this from our servers. If you are a
        parent or guardian and you are aware that your child has provided us with personal information, please
        contact me so that I will be able to do necessary actions.</p>

    <h4>Changes to This Privacy Policy</h4>
    <p>I may update our Privacy Policy from time to time. Thus, you are advised to review this page periodically
        for any changes. I will notify you of any changes by posting the new Privacy Policy on this page. This
        policy is effective as of 2021-09-01.</p>

    <h4>Contact Us</h4>

    <p>If you have any questions or suggestions about my Privacy Policy, do not hesitate to contact me at <a
            href="mailto:admin@diu.ac">admin@diu.ac</a></p>

</div>

   
@endsection
