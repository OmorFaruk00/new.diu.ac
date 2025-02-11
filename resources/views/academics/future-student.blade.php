@extends('layouts.master')
@section('content')
<style>
    .future-title {
        font-weight: 700;
        font-size: 34px;
        color: #444444;
        text-align: center;
    }

    .future-desc {
        font-size: 18px;
        color: #000;
        text-align: justify;
        line-height: 25px;
        /* font-weight: 500; */
        margin-top: 15px;
    }

    .program ul {
        list-style: none;
        line-height: 30px;
        /* margin-top: 20px; */


    }

    .program li a {
        font-size: 20px;
        color: gray !important;
        font-weight: 700;
    }

    .why-ul {
        list-style-type: disc;
        padding-left: 30px;
        font-size: 18px;
        line-height: 30px;
        color: #000;
        margin-bottom: 20px;
    }

    .program li a:hover {
        color: #01AA4D !important;
    }

    .campus-life:hover {
        color: #01AA4D !important;
    }

    .campus-image img {
        width: 100%;
        margin-top: 30px;

    }

</style>

<main id="main" style="margin-top: 80px">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="text-transform: uppercase">Future Student</h1>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Future Student</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="py-4">
        <div class="container">
            <h2 class="future-title">Why Study at DIU</h2>

            <h4>Top-notch Faculty</h4>
            <p class="future-desc">The academic excellence at Dhaka International University (DIU) relies heavily on its outstanding faculty team. Our faculty dedicates themselves with 225 full-time educators and more than 20 PhD holders to deliver superior educational experiences and research mentorship for our students. Part-time educators who have industry expertise together with academic background share their practical experiences to enhance classroom learning at DIU. The faculty group collaborates to pour enthusiasm into students which develops innovative capacity and builds leadership skills that transforms students into field specialists.</p>

            <h4>Ranking and Accreditation</h4>
            <p class="future-desc">We display our rankings with great pride. DIU holds a position of 292+ among Southern Asian institutions and 901+ among Asian institutions based on QS World Rankings 2025 assessment. Our dedication to producing academic work received international validation through THE IMPACT Rankings 2024 which placed our institution among 1501+ worldwide universities.</p>

            <h4>A Modern, Green Campus</h4>
            <p class="future-desc">DIU operates from its central Dhakian location using 1.8-Bigha land for a campus design that merges contemporary buildings with peaceful green areas. Students at our institution can benefit from the extensive 50,000 square-foot playground which offers space for outdoor recreational activities. A vibrant learning environment flourishes within our 10-story academic building because it contains modern facilities throughout its entire space. DIU provides its students with the ideal combination of educational experiences and recreational moments between studying and nature exploration.</p>


            <h4>World-Class Facilities and Student Services</h4>
            <p class="future-desc">The university maintains top status through full adaptation of modern technological innovation across both academic systems and institutional operations. The UCAM (University Comprehensive Academic Manager) system from DIU enables complete automation of university management through every scholarship process and student admission step. With our eLMS (eLearning Management System) students can access study materials and assignments and quizzes at all times because learning is available twenty-four hours a day. The RFID-based entry-exit system tracks attendance by using smart and secure touch operations.

                Students at DIU benefit from complete educational infrastructure which provides superior facilities with all necessary student services. The modern library at our institution provides students with both printed materials exceeding 40,000 titles alongside electronic books reaching 2,400+ volumes together with digital resources extending to 12,000+ items for learning support. Students can also enjoy:</p>
            <ul class="why-ul">
                <li>A spacious indoor games room</li>
                <li>A lively canteen with multiple food vendors</li>
                <li>A dedicated coffee shop for those caffeine-fueled study sessions</li>
                <li>Free Wi-Fi across campus</li>
                <li>Licensed Cadence tool-sets for engineering students</li>
            </ul>

            <h4>Scholarships and Financial Aid</h4>
            <p class="future-desc">A large number of students of the university enjoy waivers ranging from 10% to 100% as per SSC & HSC results. Female students get an additional 10% waiver. Merit Scholarships are given to the top students of each department as per semester results. Besides, there are awards for special groups of students such as wards of the freedom fighters, the indigenous, the physically disabled, etc. A number of students get full free studentship as per Private University Act, 2010.</p>

            <h4>Academic Sessions</h4>
            <p class="future-desc">The academic year is mainly divided into two semesters. Each semester consists of 21 weeks including examinations. Dhaka International University (DIU) has its own Holiday list.</p>


            <h4>Health Service</h4>
            <p class="future-desc">DIU operates a healthcare service system that makes student welfare its top priority. The Health Services Department of our university allows doctors to be available in all our campuses for students to receive medical consultations and support whenever they need it.</p>

            <h4>Research Cells</h4>
            <ul class="why-ul">
                <li>Institutional Quality Assurance Cell (IQAC)</li>
                <li>Tobacco Control and Research Cell (TCRC)</li>
                <li>Yunus Social Business Academic Cell (YSBAC)</li>
                <li>Human Rights & Advocacy Cell (HRAC)</li>
                <li>Centre for Excellence and Career Development (CECD)</li>
                <li>Bangladesh Center for Governance and Development (BCGD)</li>
            </ul>

            <h4>Library</h4>
            <p class="future-desc">DIU Library is committed to provide expedient and effective access to high quality library service, to enhance the academic experience, research, professional, intellectual, creative and personal needs of the DIU community with the collections in a variety of formats and information resources. The library provides easy access to full text journals, research databases, e-books and e-journals within DIU network and is continuously enriching its collections. The library resources include books, periodicals, theses, CDs and other reading materials. The library subscribes to various electronic journals from world acclaimed online publishers. There are dedicated computers for accessing online journals and books. The library is also fully automated with computerized catalogues and subscription system.</p>

            <h4>Class Rooms & Labs</h4>
            <p class="future-desc">All class rooms of DIU are spacious, well-decorated, air-conditioned and equipped with multimedia projector.</p>
            <p class="future-desc">DIU has 10 Pharmacy labs, 06 Computer labs, 06 EEE labs, 10 Civil labs, 04 Microbiology labs and 04 Biochemistry and Molecular Biology labs. All labs are designed by the experts from DU and BUET, and equipped with modern appliances.</p>
            <p class="future-desc">All DIU campuses are under Wi-Fi facilities. Internet facilities are available for all students.</p>

            <h4>International Link</h4>
            <p class="future-desc">Dhaka International University has international collaboration with Mahsa University, Malaysia; MTC Global, Bangalore, India; Vivekanadha College of Arts & Science of Women, Tamil Nadu, India; Institute of Innovation in Technology & Management, New Delhi, India; Ballari Institute of Technology and Management, India; Dr. Ambedkar Institute of Technology, Bengaluru, India; Indus Business Academy, Bangalore, India; JIS University, Kolkata, India; United Nations Framework Convention on Climate Change (UNFCCC); Guru Kashi University, Punjab, India; Gitarattan International Business School, Delhi, India; RV Institute of Management, Bangalore, India and Others.</p>

            <h4>Student Counseling</h4>
            <p class="future-desc">DIU provides counseling for its students regarding academic and career related problems.</p>


            <h4>Seminars and Workshops</h4>
            <p class="future-desc">DIU is not a place where only regular and routine studies are carried on; it also provides facilities for co-curricula activities. Seminars, Discussions, Workshops and Lectures are arranged frequently regarding current issues to link the students to know about the developments in different fields of study. Distinguished personalities from different walks of life, who could reach the zenith of success, are also invited to such seminars and workshops. The above activities obviously help to widen knowledge, intelligence and mental brightness of our students.</p>


            <h4>Hostels</h4>
            <p class="future-desc">DIU offers well-decorated hostels with modern facilities. Six boys' hostels and three girls' hostels are at Permanent Campus.</p>

            <h4>Clubs</h4>
            <p class="future-desc">DIU Debating Society, DIU Cultural Club, DIU Volunteer Team, DIU Rover Scout, DIU Shuvo Songho (Daily Kaler Kantha Pathok Forum), DIU Bondhu Shova (Daily Prothom Alo) and others.</p>

            <h4>Culture</h4>
            <p class="future-desc">The Cultural Club intends to remove the monotony of rigid academic pressure. The students perform music, dance, recitation and drama regularly in different programmes of the university.</p>

            <h4>Convocations</h4>
            <p class="future-desc">Dhaka International University organized convocation regularly.</p>

            <h4>Sports</h4>
            <p class="future-desc">The University believes in the harmonious growth of physical and mental health. The Sports Club comprises a football team and a cricket team participating in different inter-departmental competitions held at the university and various inter-university competitions as well.</p>

            <h4>Debate</h4>
            <p class="future-desc">DIU emphasizes developing and fostering the creativity of students. To enhance their participation in extra-curricular activities, DIU Debating Club has been formed. The debating club not only motivates our students to public speaking but also nurtures a sense of being a part of such an institution that puts a lot of importance on students' overall grooming.</p>

            <h4>Cine</h4>
            <p class="future-desc">Regular film shows are held in the auditorium and seminar room as part of the academic program. Films reflecting history, business, literature and professions are shown to aid classroom teaching.</p>

            <h4>Tours</h4>
            <p class="future-desc">Annual picnics, excursions, historical spot visit, industrial visit and educational tours are also arranged for the students.</p>

            <h4>Alumni</h4>
            <p class="future-desc">Every Department has Students' Alumni Association. It works as a hub for creating a sense of belongingness among old and current students of DIU.</p>

            <h4>English Proficiency</h4>
            <p class="future-desc"> In order to improve English proficiency of the students, DIU has set up a language institute with expert tutors and modern language labs.</p>









        </div>
    </section>

    <section class="py-2">
        <div class="container">
            <a href="#" class="future-title campus-life">Campus Life</a>
            <div class="col-lg-6 mx-auto campus-image">
                <img src="{{asset('/assets/images/slider/slider33.jpeg')}}" alt="">
            </div>

            <p class="future-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste libero itaque nemo
                assumenda quidem exercitationem, obcaecati facere! Necessitatibus eius tempore quaerat magnam ut enim
                cupiditate, suscipit, vero tempora hic accusamus? Quam, obcaecati sunt! Mollitia rerum quo ipsam
                voluptate ipsum doloremque eaque magnam omnis non eum nihil blanditiis dolorem consequuntur doloribus
                deserunt debitis sapiente id optio hic, neque voluptas reiciendis totam. Rerum ad pariatur unde
                possimus, voluptatum, quia sed adipisci dolores in, voluptatem molestiae omnis magni quo eveniet
                obcaecati nulla! Aperiam maxime libero quos cumque. Commodi, autem hic. Voluptas soluta in reprehenderit
                nesciunt distinctio cupiditate id a nostrum inventore, exercitationem ut accusamus dolores, pariatur
                laborum quos vitae error iure. Quaerat, maiores. In eos voluptatum rerum nobis esse magnam impedit id
                unde quam delectus alias,</p>



        </div>

        </div>
    </section>



    <section class="py-4">
        <div class="container">
            <h2 class="future-title">Programs</h2>
            <div class="row">
                @foreach ($programs->data as $index => $program)
                <div class="col-lg-4 col-md-6 col-sm-12 program">
                    <ul>
                        <li>
                            <a href="{{ url('/programs/' . $program->slug) }}" target="_blank">
                                {{ $program->title }}
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Start a new row after every 4 items --}}
                @if (($index + 1) % 5 == 0)
            </div>
            <div class="row">
                @endif
                @endforeach
            </div>
        </div>
    </section>




</main>
@endsection
