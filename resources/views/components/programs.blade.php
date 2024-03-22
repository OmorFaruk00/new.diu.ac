<section class="ourprograms text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-4">
          <h2>EXPLORE OUR PROGRAMS</h2>
        </div>
      </div>
      <div class="row">
        @foreach ($programs->data as $item )
            
        
        <div class="col-md-4">

          <a href="programs/bba">
            <div class="box">
              {{$item->title}}
            </div>
          </a>
        </div>
        @endforeach        
      </div>
    </div>
  </section>