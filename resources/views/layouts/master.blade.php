<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta http-equiv = "content-language" content = "en">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIU | Dhaka International University</title>



    <meta name="description"
        content="Dhaka International University DIU is one of the leading, familiar and note-worthy private universities in Bangladesh which was established on 7th April 1995. It is a non-profitable institution having strict academic discipline">
    <meta name="keywords"
        content="DIU, Dhaka International University, Dhaka, Dhaka International, University, Private Universities In Bangladesh, Universities In Bangladesh">
    <meta name="author" content="Dhaka International University">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@diubd" />
    <meta name="google-site-verification" content="A8rwnYA9M2SLmwpyC8lbmsPvrY-QkJWoBb4-B0aitc4" />

    <link rel="canonical" href="{{ urldecode(url()->full()) ?? env('api_url') }}" />
    <meta property="og:title"
        content="{{ \Request::route()->getName() ?? 'DIU | DIU | Dhaka International University' }}" />
    <meta property="og:url" content="{{ urldecode(url()->full()) ?? env('api_url') }}" />

    <link rel="icon" href="{{ asset('/assets/img/url.png') }}" type="image/x-icon">

     <!-- Meta Pixel Code -->
     <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '333868642744773');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=333868642744773&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
 

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        {{-- <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/vue/vue.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vue/axios.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

    {{-- <link rel="stylesheet" href="{{ asset('assets/vue/bootstrap-select/dist/css/bootstrap-select.min.css') }}"> --}}

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

   <style>
    
   </style>
   
    @stack('style')
    

</head>

<body>



    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTZCPMB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->



    <!-- ======= Header ======= -->
    <x-topbar />
    <x-menu />


  
    <!-- End Header -->
    <main1 >
            @yield('content')

    </main1>



    <!-- ======= Footer ======= -->
    <x-new-footer />
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><img src="{{ asset('/assets/img/up-arow.png') }}" alt=""></a> <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- <script type="text/javascript">
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://widgets.nopaperforms.com/emwgts.js";
        document.body.appendChild(s);
    </script> --}}


    <!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "160248167326381");
    chatbox.setAttribute("attribution", "biz_inbox");
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v11.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
    
    @stack('script')

</body>

</html>
