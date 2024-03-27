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
</style>
<div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h3 class="header">GALLERY</h3>
        <p></p>
      </div>
      <div class="row g-4 justify-content-center align-self-center">
          @foreach ($gallery->data as $rows)             
          
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <a href="{{$rows->image_url}}">
          <div class="team-item bg-light">
            <div class="overflow-hidden" style="height: 280px">
              <img
                class="img-fluid"
                src="{{$rows->image_url}}" 
                alt="image" style="height: 280px;width:100%"
              />
            </div>
            <div class="text-center p-4" style="height: 90px">
              <h6 class="mb-0">{{$rows->title}}</h6>
              
            </div>
          </div>
        </a>
        </div>
          @endforeach                
        
        
      </div>
    </div>
  </div>