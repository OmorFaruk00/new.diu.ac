@extends('layouts.master')
@section('content')
<style>
     @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap');
h1{ 
    color:#fff;
    padding: 0 0 30px;
}
a:hover{ text-decoration:none; }
.our-member{
    background: #2EAA4D;
    font-family: 'Noto Sans', sans-serif;
    text-align: center;
    padding: 0 0 15px;
    border-radius: 15px;
    overflow: hidden;
}
.our-member .icon{
    background-color: #fff;
    padding: 5px 0;
    margin: 0 0 15px;
    list-style: none;
}
.our-member .icon li{
    display: inline-block;
    margin: 0 13px;
}
.our-member .icon li a{
    color: #000;
    font-size: 18px;
    line-height: 35px;
    height: 35px;
    width: 35px;
    border-radius: 50%;
    display: block;
    transition: all 0.3s;
}
.our-member .icon li a:hover{
    color: #fff;
    background-color: #2EAA4D;
    text-shadow: 0 0 5px #333;
}
.our-member .signature-icon{
    width: 135px;
    height: 135px;
    margin: 0 auto 15px;
    border: 10px solid transparent;
    box-shadow: 0 0 25px -7px #222;
    border-radius: 50%;
    overflow: hidden;
}
.our-member .signature-icon img{
    width: 100%;
    height: 100%;
}
.our-member .title{
    color: #000;
    font-size: 22px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 0 15px;
    margin: 0 0 3px;
}
.our-member .title span{ font-weight: 600; }
.our-member .post{
    color: #fff;
    font-size: 18px;
    text-transform: capitalize;
    padding: 0 15px;
    margin: 0 0 10px;
    display: block;
    font-weight: 600;
}
.our-member .signature-content{
    background-color: #fff;
    font-weight: 600;
    letter-spacing: 0.5px;
    line-height: 24px;
    padding: 7px 12px;
    margin: 0 15px;
    list-style: none;
    border-radius: 10px;
}
@media screen and (max-width:359px){
    .our-member .icon li{ margin: 0 5px; }
}

        
    
</style>
<section class="breadcrumbs">
    <div class="container">

        <div class="text-center">
            <h4 style="text-transform:uppercase;font-weight:700">Research and Publication Cell
            </h4>
            <ol class="d-flax justify-content-center">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Cell</a></li>
                <li><a href="#">Research and Publication Cell</a></li>
                </li>
            </ol>
        </div>

    </div>
</section>

<div class="container py-5 mb-5">
       
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
            <div class="our-member pt-3">                  
                <div class="signature-icon">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJQAqgMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAAAQIFAwQGB//EAD8QAAEDAwEEBQgIBAcAAAAAAAEAAgMEBRESITFBURMUYZHSBhUiNVZxdIEyNlVilKGywiM0QlIWVHKxs8Hw/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAH/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwD9aAyqATaFYaqgAVAJgKgFFIBUAmAmAgWEYVYTwgnCMK8IwgjCMK8IwgjCMK8JYQQQkQuhCnCDnhSQuuEsIOJCghdiFJCo4EJLqQo0ojsAqAQArAUUAKgEwEwECTTAVAIJAVYTQgSFSECwhNCCUaVSSCCEYVpEIOaWFeEig5kKSF1IUEIORCnC6kKcIOgVBIKggYTAQFQQA2JoQgz7vdW2zq7eqz1MlQ8sZHDjOQM8SF5PPtX7P3Puj8Sd+9b2L4l/6CtxBh+fav2fufdH4kefav2fufdH4luIQYfn2r9n7n3R+JHn2r9n7n3R+JbiTnBjS5zg1o2kk7AgxPPtX7P3Puj8SPPtV7P3Tuj8S2IaiGoBME0cgG/Q4HC6IMaivhqLiyinttZSSSMc9hnDcOAxncTzWusSt+t1sz/lpv2rac9jNOt7W6jhuTjJ5BAJEKkFBzwpKspIOZCnC6FSgoKsJBUgYCoJBNAJoTQYd99b2L4l/wCgrcWHfvW9i+Jf+grcQCE1k1dTUVlQ6ktzxH0e2WfGQ08Gj/tBqrMvzSaeFz2udA2Zrp2tGcs/9hdbfXOmLqepaI6uLY9nB33h2Fe49qDDp30tRd4H2sN0tY7p3MbhpHAe/K3EmhuPRAweS8tyuFPbKV9TVP0sbsAAyXHgAOJKDNvTmUNzp7vVSBlNTQSRkb3Pe4jDWjidhU223VNbVtu14bomb/LUucinHM83nnwWdStrqvypoKi7Ma3pIpZIaXf0AGME/e2r6/GECQmhBJClWoKCSpwqKSBqgkm1BSpSqQCaSaDDv3rexfEv/QVuLDv3rexfEv8A0FbMwkMThC5rZMeiXDIBQeC4VMss3UKE4ncMyScIm8/evZR0sVJTthibho3k73HiT2qLfRMooS0HW9x1SSHe93NepB4rhQiqDZI3dFUxbYpBwPI9i8gp6+4DTcNMEA2OiiO2X3ngOxbC8lzuFPbaR9TVP0tbuA2l54ADiSgz3Tt8n4JnVMo6gwZhycvDj/QBx7FztlvqK+sZdrwzTIP5Wl3tgHM83H8lNDa5rrN5xvse0ginoyctgaeJ5vP5LXt9NJSQmGSXpWtP8MneG8jzQZlb9bbZ8NN+1biw6363Wz4ab9q3ECQhBQJSVSkoJKSZSQAVblIVIKTSCaBppIQY9/pK2ee31FvjikkpZS8slfpBBaRvwVHWvKX7Mt/4p3hW4hBh9a8pfs2g/FO8KOteUv2bQfineFbqRQYTrtcKGN896gpKenaNnRTF73u4NaMDasxtNf624sulRbqaQNGaannqCOg7SMfS3beC1aS11FTcjcbxoc+N5FLTtOWRN/u7XHnwW4gwus+Un2bQfineFHWvKX7NoPxTvCt3KSD5+lprvUX2mrbhTU0McEL2Dopi8kux2DkvoEIQJBQkgFJTUlAipTKlAwqUAqkFgqlzBVgoGmkhB5KG4dbrK+m6PT1SRrNWc6stDs9m9eW6XyO23Oho5YssqiR0urGjaAM/Mhc7H65v3xMf/G1eW/UbLhf6WklOGy0M4zyOWYPyKDS8oLxHZbc6rfGZXag1kQOC8nt92SvfBJ0sMcmMa2h2OWQviKmaou9trqitjLTbaKSFwO51QRh7h8sY/wBS+zoyG0EDicARNJJ9yDw119io7xS258Zd0305QdkROxoPvIK1V8OKa63ikuFZTU9KYq6QPhlklcJGNYfQwA0jhnfxK+rs1cLja6aqGx0jBrH9rhscO8FB5JLxUT1M0NpoOsiB2iSaSURs1cWg4OStGhmnnpmvqqY00uSHR6w7G3fnivnLRVRUlBU2qorm26timeTI/SCQXFwc3VsOQtHyWq56y2vlqanrLmzyMbNpaNTQdn0QAgJbvWuuVXR0VtbP1bQHPNSGfSaDuwtaF0j4WOlj6OQgFzA7Ok8s8V8nL1f/ABLd+sXeS3n+DgMmazX/AAxzX1VM5jqeMxS9KzSMSZzq7coOqRQkgCpKCUigkpIKWUCCoLmCrBQdAmCoBTyg6DamuYKrKDzB5jncxrqVsshyW7nO9/NIPMkpc19I6WMEZG1zQoiD2xywdG/pHueelAyNucHPco0PkZBGyndEYmkOyAB9EjA55JCDuWkxnIpTHKcnI2Pz/unmQjo80xBBGkZ3DYdi8TaWbo4oiw9HC6NzBxySM9w1LoKWR0jHhpa9hlcxx4Ev2fIhB6BI6CFuH0scQ9EcAOxOPVDEXMNLHEfSyBhu3ivLDHPEGSOheHFjhsaHGMlxO7tB/Jel7XPoY+ma8SANJ6MAlrh2IOVSIZ2MkqhQSN/odIMj5ZXUyOgjaC6ljZjDRuHyXKMzNkbNUQOeSwtwxu0bTvHDIwop45KZzXSQOeCwgBoDtHpE47iO5B0kpo5pCZIaGSQjJLmAkjntXrg0iFgaGBoGwMGG/JZ8dLMxzJGs0yRx5Zk/eOWd2zuXroWujo4WPaWuawAg8EHozhSShIoBSSglSUAVOUEqMoE0qwVwaV0BQdcqgVyBVAoOqeVAKYKCt6rPNRlPKCwUbOSjcjKC0ZUoygrYkSpyjKB5SSJSygeUiVJKRKB5UkpEqCUDJUZSJU6lUTnCtqEILB2qwhCiqCeUIQNNCEDymhCAQhCBZSQhAKShCBFTlCEEkqCUIVRBKSEIP//Z" alt="">
                </div>
                <div class="signature-details">
                    <h2 class="title">Prof. Dr Shariful Alam</h2>
                    <span class="post">Director</span>
                </div>
                <ul class="signature-content">
                    <li><span class="fa fa-mobile"></span> 0987654321</li>
                <li><span class="fa fa-envelope"></span> abc@gmail.com</li>
                    
                </ul>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
            <div class="our-member pt-3">                  
                <div class="signature-icon">
                    <img src="https://api.diu.ac/images/profile_photo_file_362.jpg" alt="">
                </div>
                <div class="signature-details">
                    <h2 class="title">Md. Abdul Based</h2>
                    <span class="post">Additional Director</span>
                </div>
                <ul class="signature-content">
                    <li><span class="fa fa-mobile"></span> 8801716505902</li>
                <li><span class="fa fa-envelope"></span> based@diu.ac</li>
                    
                </ul>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
            <div class="our-member pt-3">                  
                <div class="signature-icon">
                    <img src="https://api.diu.ac/images/profile_image_upload_142.jpg" alt="">
                </div>
                <div class="signature-details">
                    <h2 class="title">Mili Rahman</h2>
                    <span class="post">Joint Director</span>
                </div>
                <ul class="signature-content">
                    <li><span class="fa fa-mobile"></span> 801716412498</li>
                <li><span class="fa fa-envelope"></span> mili.eng@diu.ac</li>
                    
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-sm-12 mb-5">
            <div class="our-member pt-3">                  
                <div class="signature-icon">
                    <img src="https://api.diu.ac/images/profile_photo_file_310.jpg" alt="">
                </div>
                <div class="signature-details">
                    <h2 class="title">Mohammad Tareq</h2>
                    <span class="post">Joint Director</span>
                </div>
                <ul class="signature-content">
                    <li><span class="fa fa-mobile"></span>  01713129987</li>
                <li><span class="fa fa-envelope"></span> tareq.eee@diu.ac</li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>


   
@endsection
