<section class="programmebba">
          
    <div class="container">
        <div class="row">
<div class="col-md-12">

    <h2 class="text-justify my-5">PROGRAM EDUCATIONAL OBJECTIVES</h2>
    <ul>
        @foreach ($objective as $rows )           
          <li class="my-3">{{$rows->description}}</li>
          @endforeach
         

    </ul>
</div>    
</div>
</div>
</section>