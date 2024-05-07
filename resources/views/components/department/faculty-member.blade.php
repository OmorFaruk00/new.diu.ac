<style>
        .member-header{
    position: relative;
    text-transform: uppercase;
    display: inline-block; 
    margin-bottom: 40px;
    font-weight: 800;
}


.member-header:after {
    content: "";
    position: absolute;
    left: 50%; 
    bottom: -10px;
    height: 3px;
    width: 70px;
    background: #1474B5;
    transform: translateX(-50%); 
}
    .our-member{
    text-align: center;
    transition: all 0.5s ease 0s;
    border: 1px solid #E3DDDD
    
}
.our-member:hover{
    box-shadow: 0 15px 10px -10px rgba(0, 0, 0, 0.5), 0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
    cursor: pointer;
}
.our-member .pic{
    overflow: hidden;
    position: relative;
}
.our-member .pic:before,
.our-member .pic:after{
    content: "";
    width: 200%;
    height: 80%;
    background: rgba(38,37,37,0.8);
    position: absolute;
    top: -100%;
    left: -4%;
    transform: rotate(45deg);
    transition: all 0.5s ease 0s;
}
.our-member .pic:after{
    background: rgba(8,75,77,0.8);
    top: auto;
    left: auto;
    bottom: -100%;
    right: -4%;
}
.our-member:hover .pic:before{ top: 0; }
.our-member:hover .pic:after{ bottom: 0; }
.our-member .pic img{
    width: 100%;
    height: auto;
}
.team-content{
    height: 80px;
}
.member-title{
    margin-top: 5px;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #047168;
    text-transform: uppercase;
    margin-bottom: 7px;
}
.our-member .desc{
    display: block;
    font-size: 15px;
    font-weight: 600;
    color: #707070;
    text-transform: capitalize;
}
@media only screen and (max-width: 990px){
    .our-member{ margin-bottom: 30px; }
}

</style>
<section>

    <div class="container pt-5">
        <div class="d-flex justify-content-center">
            <h3 class="member-header">FACULTY MEMBERS</h3>
           </div>
        <div class="owl-carousel owl-theme" id="member">
            @foreach ($members->data as $rows )  
            <a href="{{$rows->website}}" target="_blank"> 
            <div class="item">
                <div class="our-member">
                    <div class="pic">
                        <img src="{{$rows->profilepic}}" style="height: 300px">
                        
                    </div>
                    <div class="team-content">
                        <h3 class="member-title">{{$rows->name}}</h3>
                        <span class="desc">{{$rows->designation}}</span>
                    </div>
            </div>
            </div>    
        </a>         
            @endforeach
    
        </div>   
    </div
</section>
<script>
    var owl = $('#member');
    owl.owlCarousel({
        margin: 20,
        dots: true,
        nav: true,
        navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    });
</script>