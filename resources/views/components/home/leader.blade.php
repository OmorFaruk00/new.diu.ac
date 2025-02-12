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
    .leader-ul {
        list-style-type: disc;
        padding-left: 30px;
        font-size: 18px;
        line-height: 30px;
        color: #fff;        
        margin-bottom: 20px;
        text-align: justify;
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
                            To achieve this, DIU is taking various proactive steps by engaging with professionals and industry leaders graduated from different universities of the country to gain valuable insights that will:
                        </p>

                        <ul class="leader-ul">
                            <li> Design a State-of-the-Art Career Placement Centre: Tailored to address the dynamic demands of the job market, ensuring our students are equipped for success.</li>
                            <li> Enhance Student Skills Development: Identifying core competencies and providing targeted training to make our graduates industry-ready.</li>
                            <li>Boost Placement Opportunities: Building stronger industry connections to open doors for internships, job placements, and long-term careers.</li>
                            <li>Foster Joint Collaborations: Creating impactful partnerships with organizations for mutual growth and innovative initiatives.</li>
                            <li>This initiative is more than a strategy—it’s DIU's promise to bridge the gap between academia and industry, empowering students to become the leaders of tomorrow.</li>
                          
                        </ul>
                        <a href="{{ route('future-student') }}" class="btn"
                            style="margin-top: 20px">Future Student</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
