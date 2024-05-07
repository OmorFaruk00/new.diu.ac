<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-9e1ZvQdB5ZVzNsQPHOKcRmHbdz5c1gL7aCnMNHnfTwNN0DE8ZwgnXymfpwE1emItn9eJ+tWW8xYPpd2BjZJ3NA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

 .title {
        display: block;
        font-size: 30px;
        font-weight: 800;
        color: #22272c;
        padding-bottom: 8px;
        margin: 8px 0 15px 0;
        position: relative;
    }

    .title:after {
        content: "";
        display: block;
        width: 50px;
        border-top: 3px solid #1B85BB;
        position: absolute;
        bottom: 0;
        left: 0;
        transition: all 0.3s ease 0s;
    }
    .head{
    padding: 20px;
    margin: 20px 10px;
}
.head .pic{
    margin-top: 30px;
    width: 250px;
    height: 250px;
    float: left;
    margin-right: 50px;
    position: relative;
}
.head .pic:before,
.head .pic:after{
    content: "";
    display: block;
    height: 50%;
    width: 50%;
    position: absolute;
}
.head .pic:before{
    bottom: -10%;
    left: -10%;
    border-bottom: 3px solid #136EAD;
    border-left: 3px solid #136EAD;
}
.head .pic:after{
    top: -10%;
    right: -10%;
    border-top: 3px solid #136EAD;
    border-right: 3px solid #136EAD;
}
.head .pic img{    
    width: 100%;
    height: 100%;
}
.head .head-content{
    display: table;
    position: relative;
}
.head .head-content:before{
    content: "\f10d";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    position: absolute;
    top: -30px;
    left: -15px;
    font-size: 60px;
    color: #d8dad6;
    z-index: -1;
}
.head .head-title{
    font-size: 24px;
    color: #136EAD;
    text-transform: capitalize;
    font-weight: 600
}
.head .post{
    font-size: 13px;
    font-weight: 600;
    color: #585f62;
    border-left: 1px solid rgba(0, 0, 0, 0.1);
    margin-left: 5px;
    padding-left: 5px;
}
.head .description{
    font-size: 15px;
    color: #585f62;
    line-height: 22px;
    margin-top: 12px;
    font-style: italic;
    text-align: justify
}

@media only screen and (max-width: 980px){
    .head{
        padding: 20px 0;
        margin: 20px 15px;
    }
    .head .pic{
        float: none;
    }
    .head .head-content{
        display: block;
        margin-top: 30px;
    }
    .head .head-content:before{
        z-index: 1;
        top: -200px;
    }
}
</style>
<div class="demo py-5" style="background:#E3DDDD">
    <div class="container">
        <h3 class="title">DEPARTMENT HEAD</h3>
        <div class="row">
            <div class="col-md-12">
                <div id="head-slider" >
                    <div class="head">
                        <div class="pic">
                            <img src="{!! json_decode(json_encode($basic->data->chairman_image)) !!}" alt="">
                        </div>
                        <div class="head-content">
                            <h3 class="head-title">{!! json_decode(json_encode($basic->data->chairman_name)) !!}
                                <small class="post">{!! json_decode(json_encode($basic->data->chairman_designation)) !!}</small>
                                <small class="post">{!! json_decode(json_encode($basic->data->chairman_office_email)) !!}</small>
                            </h3>
                            <div class="description">
                                {!! json_decode(json_encode($basic->data->department_head_speach)) !!}
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>