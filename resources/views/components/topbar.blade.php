<style>
    #topbar{
        height: 30px;
        background: #01AA4D;
        color: #fff;
        font-weight: 600;
        padding-top: 5px;
        
        
    }
    .breadcrumbs {  
    margin-top: 85px !important;
    background: #01AA4D;
    
}

    .back-to-top{
        background: #18AC4F !important;
    }

    ::-webkit-scrollbar {
    width: 10px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1; 
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(transparent, #01AA4D);
    border-radius: 5px;
}


    
</style>

<section id="topbar" class="fixed-top">
    <div class="container-fluid">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-none d-sm-block">
                <i class="fa fa-home text-white"></i> <span>Welcome to Dhaka International University</span>
            </div>
            <div class="d-block d-lg-none">
                <i class="fa fa-home text-white"></i> <span>Welcome to DIU</span>
            </div>
            <div>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="https://students.diu.ac/" class="text-white" target="_blank"><i class="fa fa-user" style="margin-right: 5px" aria-hidden="true"></i>Students Portal</a></li>
                    <li class="list-inline-item"><i class="fa fa-phone" style="margin-right: 5px" aria-hidden="true"></i><a href="{{route('contact')}}" class="text-white ml-3" target="_blank">Contact us</a></li>
                </ul>
            </div>
            
        </div>
    </div>
    
  </section>