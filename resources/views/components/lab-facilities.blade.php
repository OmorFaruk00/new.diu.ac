@push('style')

<style>
    .lab-btn {
        background-color: #01AA4D;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
    }
    .lab-btn:hover {
        background-color: red;
        color: #fff;
    }
    .card {
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
    }

    .lab-img {
      transition: transform 0.4s ease-in-out; 
      height: 250px;
    }

    .card:hover .lab-img {
      transform: scale(1.09); /* Slight zoom on image */
    }
    
</style>
@endpush


<div class="container pt-5">    
    <div class="d-flex justify-content-center">
      <h3 class="header">Laboratories</h3>
  </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
        <div class="card">
          <img src="/images/lab/environmental-lab.png" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Environmental Engineering Lab
            </h5>
            <a href="{{route('environmental-engineering-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
        <div class="card">
          <img src="/images/lab/Surveying Lab.jpg" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Surveying Lab
            </h5>
            <a href="{{route('surveying-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
        <div class="card">
          <img src="/images/lab/Geotechnical.png" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Geotechnical Engineering Lab
            </h5>
            <a href="{{route('geotechnical-engineering-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
        <div class="card">
          <img src="/images/lab/Transportation/Loss on Heating Oven.jpg" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Transportation Engineering Lab
            </h5>
            <a href="{{route('transportation-engineering-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
        <div class="card">
          <img src="/images/lab/Hydraulics/Broad crested weir.jpg" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Hydraulics Lab
            </h5>
            <a href="{{route('hydraulics-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>


      <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
        <div class="card">
          <img src="/images/lab/Concrete/Vicat’s Apparatus.png" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Concrete Lab
            </h5>
            <a href="{{route('concrete-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
          <img src="/images/lab/Mechanics/UNIVERSAL TESTING MACHINE.png" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Mechanics Lab
            </h5>
            <a href="{{route('mechanics-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
          <img src="/images/lab/computer-lab.png" class="lab-img" alt="Card Image">
          <div class="card-body">
            <h5 class="card-title">Computer Lab
            </h5>
            <a href="{{route('computer-lab')}}" class="lab-btn">Explore The Lab</a>
          </div>
        </div>
      </div>



    </div>
  </div>
