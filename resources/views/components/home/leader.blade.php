<style>
    #leader {
        background: url("{{ asset('/assets/images/slider2.jpeg') }}") fixed center top;
        background-color: rgba(0, 0, 0, 0.5);
        background-blend-mode: overlay;
        background-size: cover;
        background-position: center;
    }

    #leader h1 {
        color: #F6880C;
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 20px;

    }

    #leader p {
        color: #fff;
        font-size: 18px;
        line-height: 1.4em;
        text-align: justify;
    }

    #leader .choice {
        margin-top: 160px;
        margin-bottom: 160px;
    }
</style>
<section id="leader">
    <div class="container">
        <div class="leader-block" style="min-height: 442px;">
            <div class="row">
                <div class="col-12">
                    <div class="choice">
                        <h1 class="">Building Leaders of Tomorrow</h1>
                        <br>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <a href="{{ route('future-student') }}" target="_blank" class="btn"
                            style="margin-top: 20px">Future Student</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
