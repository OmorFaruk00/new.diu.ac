<style>
    .header{
    position: relative;
    text-transform: uppercase;
    display: inline-block; 
    margin-bottom: 40px;
    font-weight: 800;
}


.header:after {
    content: "";
    position: absolute;
    left: 50%; 
    bottom: -10px;
    height: 3px;
    width: 70px;
    background: #1474B5;
    transform: translateX(-50%); 
}
:root{ --main-color: #197FB9; }
.demo{ background-color: #eee; }
.serviceBox{
    color:#fff;
    background-color: #fff;
    font-family:'Poppins', sans-serif;
    text-align: center;
    padding: 40px 0 20px;
    border-radius: 25px;
    box-shadow: 0 5px 8px rgba(0,0,0,0.3);
}
.serviceBox .title{
    color: #fff;
    background: var(--main-color);
    font-size: 20px;
    font-weight: 500;
    text-transform: capitalize;
    padding: 10px 15px;
    box-shadow: inset 0 5px 10px rgba(0,0,0,0.4);
    position: relative;
    margin: 0 0 20px;
}
.serviceBox .title:before{
    content: "";
    background: var(--main-color);
    border-radius: 25px 5px 5px 25px;
    position: absolute;
    top: -10px;
    left: -7px;
    bottom: -10px;
    right: 100%;
}


.serviceBox .description{
    color: #888;
    font-size: 14px;
    line-height: 25px;
    margin: 0 25px;
    text-align: justify
}

@media only screen and (max-width: 1199px){
    .serviceBox{ margin: 0 0 30px; }
}

.card-columns {
    column-count: 3;
    column-gap: 1rem;
}

.card {
    break-inside: avoid;
    margin-bottom: 1rem;
}
</style>



<section style="background: #E3DDDD">
    <div class="container py-5">
        <div class="d-flex justify-content-center">
         <h3 class="header">FACILITIES</h3>
        </div>
      
        <div class="container">

            <div class="row">
                
                <div class="card-columns">
                    @foreach ($facility as $rows)   
                    <div class="card text-center" >
                        <div class="card-body">
                            <h5 class="card-title">{{$rows->title}}</h5>
                            <p class="card-text">{{$rows->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

    
            </div>
         {{-- <div class="row">
             @foreach ($facility as $rows)           
            
             <div class="col-md-4 col-sm-6 mb-4">
                 <div class="serviceBox">
                     <h3 class="title">{{$rows->title}}</h3>
                    
                     <p class="description">{{$rows->description}}</p>
                 </div>
             </div>
             @endforeach
            
         </div> --}}
     </div>
     </div>
</section>