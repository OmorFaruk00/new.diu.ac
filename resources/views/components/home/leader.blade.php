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
                        <p>KL Hyderabad Global Business School is one of the most prestigious business schools in
                            the
                            country. It offers a unique combination of <b>BBA and MBA programs,</b>
                            allowing students to understand business principles more deeply. With our
                            comprehensive and advanced learning experience, we prepare students to face
                            challenges and lead in the professional world of business.
                        </p>
                        <a href="{{ route('future-student') }}" target="_blank" class="btn"
                            style="margin-top: 20px">Future Student</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
