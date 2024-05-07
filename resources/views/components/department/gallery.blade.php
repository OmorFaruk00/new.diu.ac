
<style>
    /*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 15px auto;
  list-style: none;
  text-align: center;
  border-radius: 50px;
  padding: 2px 15px;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 10px 15px 8px 15px;
  font-size: 16px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #444444;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  color: #135C51;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio .portfolio-item .portfolio-info {
  opacity: 0;
  position: absolute;
  left: 30px;
  right: 30px;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  background: rgba(255, 255, 255, 0.9);
  padding: 15px;
}

.portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  color: #fff;
  font-weight: 600;
  color: #222222;
}

.portfolio .portfolio-item .portfolio-info p {
  color: #555555;
  font-size: 14px;
  margin-bottom: 0;
}

.portfolio .portfolio-item .portfolio-info .preview-link,
.portfolio .portfolio-item .portfolio-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #3c3c3c;
}

.portfolio .portfolio-item .portfolio-info .preview-link:hover,
.portfolio .portfolio-item .portfolio-info .details-link:hover {
  color: #135C51;
}

.portfolio .portfolio-item .portfolio-info .details-link {
  right: 10px;
}

.portfolio .portfolio-item .portfolio-links {
  opacity: 0;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-item .portfolio-links a {
  color: #fff;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-item .portfolio-links a:hover {
  color: #6ba7f5;
}

.portfolio .portfolio-item:hover .portfolio-info {
  opacity: 1;
  bottom: 20px;
}

</style>
<div class="container-xxl py-5">
    <div class="container">
        @if(!empty($gallery->data))
            
       
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h3 class="header">GALLERY</h3>
        <p></p>
      </div>
      <div class="row g-4 justify-content-center align-self-center">
          @foreach ($gallery->data as $rows)             
          
        <div class="col-lg-3 col-md-6 wow fadeInUp portfolio-item" data-wow-delay="0.1s">
            <a href="{{$rows->image_url}}" target="_blank">
          <div class="team-item bg-light">
            <div class="overflow-hidden" style="height: 280px">
              <img
                class="img-fluid"
                src="{{$rows->image_url}}" 
                alt="image" style="height: 280px;width:100%"
              />
            </div>
            <div class="text-center p-4" style="height: 90px">
              <h6 class="mb-0" style="color: gray" >{{$rows->title}}</h6>
              
            </div>
          </div>
        </a>
        </div>
          @endforeach       
        
        
      </div>
    </div>
    @endif
  </div>
 