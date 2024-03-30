<style>
    .form-control {
        background: rgba(255, 255, 255, 0.2);
        height: 37px;
        box-shadow: 0 5px 5px 0 rgb(0 0 0 / 5%);
        border-color: #f0f0f0;
        font-size: 16px;
        color: #000 !important;
        padding-left: 10px;
    }

    #form-container {
        /* background: linear-gradient(#2e3a6a,#2f0b45); */
        background: rgba(4, 4, 4, 0.7);
        opacity: 0.85;
    }

    .underline2 {
        color: #fff;
        font-weight: 800;
    }

    .form-control::placeholder {
        color: #fff;
        !important font-weight: 800;
        opacity: 2;
    }

    input[type="text"]:focus::placeholder {
        color: #000 !important;
        font-weight: 600;
        opacity: 2;
    }

    #registerBtn {
        width: 100%;
        color: #fff;
        font-weight: 800;
        font-size: 16px;
        height: 42px;
        background-color: #a3161a;
        border: none;
        margin-top: 10px;
    }

    select {
        border: 1px solid gray;
        border-radius: 8px;
        padding: 4px 0 4px 24px;
        background-image: url('https://s17.postimg.cc/kc1y6xwlb/download.png');
        background-repeat: no-repeat;
        background-position: 8px;
        
    }

    .select-wrapper {
        position: relative;
    }

    .select-wrapper select {
        padding-right: 25px;
        color: #fff !important;
        background: rgba(255, 255, 255, 0.2);
        
       
    }

    .select-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        color: #fff !important
    }
    .select-wrapper:focus {
        color: #000; !important
    }
    option {
        color: #126CAB;
    }

    select:focus option {
        color: #000 !important ; 
    }
    select:focus{
        color: #000 !important; 
    }
 
</style>


<div class="p-3">
    <div class="form-group mb-2">
        <input type="text" class="form-control" placeholder="Student Name *">
    </div>
    <div class="form-group mb-2">
        <input type="text" class="form-control" placeholder="Student Email Address *">
    </div>
    <div class="form-group mb-2">
        <input type="text" class="form-control" placeholder="Student Phone Number *">
    </div>

    <div class="form-group mb-2 field-select">
        <div class="select-wrapper">
            <select class="form-control" id="subjectSelect">
                <option value="" selected disabled>Select Programs</option>
                {{-- @if ($programs)                    --}}
             
                {{-- @foreach ($programs->data as $rows)                  
                
                <option value="option2">{{$rows->title}}</option>
                @endforeach --}}
                {{-- @endif --}}
                <option value="option3">Option 3</option>
                <option value="option4">Option 4</option>
            </select>
            <span class="select-icon">&#9660;</span>
        </div>
    </div>
    <button id="registerBtn">Submit</button>

</div>
