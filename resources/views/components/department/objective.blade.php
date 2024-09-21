<style>
    .objective-desc{
        font-size: 16px;
    }
</style>

<section class="programmebba">
          
    <div class="container">
        <div class="row">
<div class="col-md-12">

    <h2 class="text-justify my-5">PROGRAM EDUCATIONAL OBJECTIVES</h2>
    <ul>
        @if($objective)     
        
        @foreach ($objective as $rows )           
          <li class="my-3 objective-desc">{{$rows->description ?? null}}</li>
          @endforeach
          @endif
         

    </ul>
</div>    
</div>
</div>
</section>