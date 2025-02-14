@extends('layouts.master')
@section('content')
<style>
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

    .accordion-header .accordion-button:not(.collapsed) {
        background-color: #01AA4D;
        color: #fff;
    }

    .convocation-desc {
        font-size: 16px;
        color: #333;
        font-weight: 500;
        line-height: 25px;
        text-align: center;

    }

    .pic img {
        width: 100%;
        height: 150px;

    }

    .desc-body {
        height: 70px;

    }

    .vital-person .title {
        display: block;
        font-size: 18px;
        font-weight: 600;
        color: #2e282a;
        text-transform: capitalize;
        margin: 0 0 7px 0;
    }

    .vital-person .post {
        display: block;
        font-size: 15px;
        color: gray;
        font-weight: 500;
        text-transform: capitalize;
        margin-bottom: 15px;
    }

    @media only screen and (max-width: 990px) {
        .vital-person {
            margin-bottom: 30px;
        }
    }



    /* Modal Container */
    .image-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;

    }

    .modal-content {
        max-width: 90vw;
        max-height: 90vh;
        display: block;
        margin-top: 20px;
        border-radius: 8px;
        object-fit: contain;
    }

    /* Close Button */
    .close-btn {
        position: absolute;
        top: 40px;
        right: 20px;
        color: white;
        font-size: 30px;
        cursor: pointer;
        background: rgba(0, 0, 0, 0.6);
        padding: 10px 15px;
        border-radius: 50%;
        z-index: 1100;
    }

    /* Responsive Fixes */
    @media (max-width: 768px) {
        .close-btn {
            top: 45px;
            right: 10px;
            font-size: 24px;
            padding: 6px 10px;
        }
    }

    @media (max-width: 480px) {
        .close-btn {
            top: 45px;
            right: 5px;
            font-size: 20px;
            padding: 4px 8px;
        }

        .modal-content {
            width: 100vw;
            height: 100vh;
            /* object-fit: cover; */
        }
    }

</style>

<main id="main" style="background-color: #">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform:uppercase;">Convocations</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Convocations</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container-xxl pb-5">
        <div class="container">
            <div class=" text-center py-4">
                <h3 class="heading">CONVOCATIONS Of Dhaka International University</h3>
                <p class="convocation-desc">Convocation is a formal gathering of people who have been asked to come together, or a formal
                    ceremony at a college or university where awards are given. Dhaka International University is
                    organized the convocation ceremony to confer the degree to the graduate students almost every year.
                </p>

            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @if ($convocations)
                @foreach ($convocations as $index => $rows)
                <div class="accordion-item">
                    <div class="accordion-header" id="flush-heading{{ $index }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false" aria-controls="flush-collapse{{ $index }}">
                            {{ $rows->title }}
                        </button>
                    </div>
                    <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="flush-heading{{ $index }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <h5 style="font-weight: 600"> {{ $rows->short_description }} </h5>
                            <div style="text-align: justify" class="convocation-desc">{!! $rows->description !!}</div>
                            <a href="{{ asset($rows->pdf_link) }}" download class="btn btn-info my-3">
                                Souvenir Book of the {{ $rows->title }}
                            </a>

                            <div class="row">
                                @foreach ($rows->convoction_images as $image)
                                <div class="col-md-3 col-sm-6">
                                    <div class="pic my-3">
                                        <a href="javascript:void(0);" onclick="openModal('{{ $image->image_url }}')">
                                            <img src="{{ $image->image_url }}">
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

        </div>
        <!-- Image Modal -->
        <div id="imageModal" class="image-modal">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
</main>
@push('script')
<script>
    function openModal(imageUrl) {
        document.getElementById("imageModal").style.display = "flex";
        document.getElementById("modalImage").src = imageUrl;
    }

    function closeModal() {
        document.getElementById("imageModal").style.display = "none";
    }

</script>
@endsection
