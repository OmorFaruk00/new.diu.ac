<style>
        .syllabus-heading{
    position: relative;
    text-transform: uppercase;
    display: inline-block; 
    margin-bottom: 40px;
    font-weight: 800;
}


.syllabus-heading:after {
    content: "";
    position: absolute;
    left: 50%; 
    bottom: -10px;
    height: 3px;
    width: 70px;
    background: #2EAA4D;
    transform: translateX(-50%); 
}
    .accordion-body {
        background: #f5f5f5;
    }

    .accordion-button {
        font-size: 20px;
        font-weight: 600
    }

    .accordion-item {
        margin-bottom: 10px;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
    }

    .accordion-syllabus-heading .accordion-button:not(.collapsed) {
        background-color: #2EAA4D;
        color: #fff;
    }
    table {
    width: 100% !important;
  }
  tbody{
    width: 100%;
    padding: 20px !important
  }

  th, td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
    /* border-bottom: 1px solid #ddd; */
  }

  th {
    background-color: #f2f2f2;
    color: #333;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
    
</style>

<div class="container-xxl py-3">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h3 class="syllabus-heading">SYLLABUS</h3>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @if($syllabus)               
            @foreach ($syllabus as $index => $rows)
                <div class="accordion-item">
                    <div class="accordion-syllabus-heading" id="syllabus-heading{{ $index }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false"
                            aria-controls="flush-collapse{{ $index }}">
                            {{ $rows->title }}
                        </button>
                    </div>
                    <div id="flush-collapse{{ $index }}"
                        class="accordion-collapse collapse"
                        aria-labelledby="syllabus-heading{{ $index }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="table-responsive">
                                <div >

                                    {!! $rows->description !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>