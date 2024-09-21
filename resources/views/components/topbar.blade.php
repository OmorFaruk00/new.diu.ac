<style>
    #topbar {
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

    .back-to-top {
        background: #18AC4F !important;
        bottom: 60px;
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


    .btn {
        color: #fff;
        background: #ffd30e !important;
        /* font-family: 'Abril Fatface', cursive; */
        font-size: 17px;
        font-weight: 800;
        text-transform: capitalize;
        letter-spacing: 2px;
        padding: 8px 15px;
        border-radius: 5px;
        border: none;
        position: relative;
        z-index: 1;
        transition: all 0.3s ease-out;
    }

    .btn:hover {
        color: #000;
    }

    .btn:before,
    .btn:after {
        content: "";
        background: #01AA4D;
        height: 100%;
        width: 55%;
        border-radius: 5px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all 0.3s ease-out;
    }

    .btn:after {
        left: auto;
        right: 0;
    }

    .btn:hover:before,
    .btn:hover:after {
        width: 0;
    }

    @media (max-width: 380px) {       
        .top-menu{
            font-size: 12px
        }
    }
</style>

<section id="topbar" class="fixed-top">
    <div class="container-fluid">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-none d-sm-block">
                <i class="fa fa-home text-white"></i> <span>Welcome to Dhaka International University</span>
            </div>
            <div class="d-block d-lg-none">
                <i class="fa fa-home text-white"></i> <span class="top-menu">Welcome to DIU</span>
            </div>
            <div>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="https://students.diu.ac/" class="text-white" target="_blank"><i
                                class="fa fa-user top-menu" style="margin-right: 5px" aria-hidden="true"></i> <span class="top-menu">Students Portal</span></a>
                    </li>
                    <li class="list-inline-item"><i class="fa fa-phone" style="margin-right: 5px"
                            aria-hidden="true"></i><a href="{{ route('contact') }}" class="text-white top-menu ml-3"
                            target="_blank">Contact us</a></li>
                </ul>
            </div>

        </div>
    </div>

</section>
