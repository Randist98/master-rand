@extends('home.layout')
@section('content')
    <div class="hero overlay" style="background-image: url('images/hero_2.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 text-left">
                    <span class="subheading-white text-white mb-3" data-aos="fade-up">Volunteer</span>
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Give a helping hand to those who need it!</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">"Extend your kindness and lend a
                        helping hand to those in need, for together we can make a difference."</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('SeekSupport.index') }}"

                            class="btn btn-primary me-4 d-inline-flex align-items-center">
                            <span>Do You Need Help ?</span>
                        </a>


                        <a href="assest/images/unicef-for-every-child_toeckecb.mp4"
                            class="text-white glightbox d-inline-flex align-items-center"><span
                                class="icon-play me-2"></span><span>Watch the video</span></a>




                    </p>

                </div>


            </div>
        </div>
    </div>




    <div class="section cause-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading mb-3">Cases</span>
                    <h2 class="heading">New Cases</h2>
                    <p>Donations are crucial in cases of natural disasters, poverty, medical research, and education
                        initiatives. Contributions make a significant impact, bringing hope and transforming lives.</p>

                    <ul id="features-slider-nav" class="mt-5 d-flex justify-content-center">
                        <li class="btn btn-primary prev d-flex align-items-center me-2">Patient</li>
                        <li class="btn btn-primary prev d-flex align-items-center me-2">Student</li>
                        <li class="btn btn-primary prev d-flex align-items-center me-2">Orphans</li>
                        <li class="btn btn-primary prev d-flex align-items-center me-2">Necessitous</li>
                        <li class="btn btn-primary prev d-flex align-items-center me-2">Other</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="features-slider" id="features-slider">
                        @foreach ($cases as $case)
                            <div class="col-lg-4 col-md-6 mb-4"> <!-- Added margin-bottom to separate cards -->
                                <div class="causes-item bg-white" data-beneficiary="{{ strtolower($case->beneficiary) }}">
                                    <a href="#"><img style="height: 350px; width: 100%;"
                                            src="{{ asset('assest/images/' . $case->image) }}" alt="Image"
                                            class="img-fluid mb-4 rounded"></a>
                                    <div class="px-4 pb-5 pt-3">
                                        <h3><a href="#">{{ $case->name }}</a></h3>
                                        <p>{{ $case->description }}</p>

                                        @php
                                            $progressPercentage = ($case->amountCollected / $case->totalAmount) * 100;
                                            $progressPercentage = min($progressPercentage, 100); // Ensure progress doesn't exceed 100%
                                        @endphp

                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: {{ $progressPercentage }}%;"
                                                aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">
                                                {{ $progressPercentage }}%
                                            </div>
                                        </div>

                                        <div class="d-flex mb-4 justify-content-between amount">
                                            <div>{{ $case->amountCollected }}</div>
                                            <div>{{ $case->totalAmount }}</div>
                                        </div>

                                        @if ($progressPercentage < 100)
                                            <div>
                                                <a href="{{ route('single.page', ['id' => $case->id]) }}"
                                                    class="btn btn-primary">Show the case</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="section flip-section" style="background-image: url('images/img_v_2-min.jpg')">
        <div class="blob-1">
            <img src="images/blob.png" alt="Image" class="img-fluid">
        </div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center" data-aos="fade-up">
                    <span class="subheading-white mb-3 text-white">Help Now</span>
                    <h2 class="heading text-white">See Change. Be the Difference.</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-flip">
                        <div class="flip">
                            <div class="front">
                                <!-- front content -->
                                <div class="flip-content-wrap">
                                    <span class="icon-local_drink"></span>
                                    <h3>Pure Water</h3>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <div class="flip-content-wrap">
                                    <h3>Pure Water</h3>
                                    <p>Water is essential for life and supports ecosystems and human health.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Flip -->
                </div>
                <div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-flip">
                        <div class="flip">
                            <div class="front">
                                <!-- front content -->
                                <div class="flip-content-wrap">
                                    <span class="icon-graduation-cap"></span>
                                    <h3>Give Education</h3>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <div class="flip-content-wrap">
                                    <h3>Give Education</h3>
                                    <p>Donate for education. Empower lives, break poverty cycle, foster progress. Impact
                                        together.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-flip">
                        <div class="flip">
                            <div class="front">
                                <!-- front content -->


                                <div class="flip-content-wrap">
                                    <span class="icon-tree"></span>
                                    <h3>Tree Planting</h3>
                                </div>

                            </div>
                            <div class="back">
                                <!-- back content -->
                                <div class="flip-content-wrap">
                                    <h3>Give Donation</h3>
                                    <p>Tree planting donations create a greener future.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-flip">
                        <div class="flip">
                            <div class="front">
                                <!-- front content -->
                                <div class="flip-content-wrap">
                                    <span class="icon-medkit"></span>
                                    <h3>Medical Mission</h3>
                                </div>
                            </div>
                            <div class="back">
                                <!-- back content -->
                                <div class="flip-content-wrap">
                                    <h3>Medical Mission</h3>
                                    <p>Medical mission donations save lives in underserved areas.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#features-slider-nav li').click(function() {
                var caseType = $(this).text().toLowerCase(); // Get the case type from the button text.
                $('.causes-item').hide(); // Hide all cases.
                $('[data-beneficiary="' + caseType + '"]')
                    .show(); // Show only the cases that match the selected type.
            });
        });
    </script>



    <div class="section bg-light pt-0">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-5 mb-5" data-aos="fade-up">
                    <span class="subheading mb-1" style="margin-top:50px">News Update</span>
                    <h2 class="heading mb-1">New Events</h2>
                    <p>Join our charity website for inspiring events that make a difference. From galas to community
                        outreach, we strive to uplift and empower those in need. Together, let's create positive change.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="causes-item bg-white">
                            <a href="#"><img src="{{ asset('images/' . $event->image) }}" alt="Image"
                                    class="img-fluid mb-4 rounded"></a>
                            <div class="px-4 pb-3 pt-3">
                                <span class="date"></span>
                                <h3><a href="#">{{ $event->name }}</a></h3>
                                <p> {{ $event->description }}</p>
                                <a href="{{ route('events.singlePage', ['id' => $event->id]) }}"
                                    class="btn btn-primary">Become a Volunteer</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




    <div class="section flip-section secondary-bg" style="background-image: url('images/img_v_4-min.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="subheading-white mb-3 text-white" data-aos="fade-up">Help Now</span>
                    <h3 class="mb-4 heading text-white" data-aos="fade-up">Let's Help The Vulnerable People </h3>
                    <a href="{{ Route('news.index') }}" class="btn btn-outline-white me-3" data-aos="fade-up"
                        data-aos-delay="100">Become a Volunteer</a>

                    <a href="{{ Route('causes.index') }}" class="btn btn-outline-white" data-aos="fade-up"
                        data-aos-delay="200">Donate Now</a>
                </div>
            </div>
        </div>
    </div>


    <div class="section bg-light">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5" data-aos="fade-up">
                    <span class="subheading mb-3">Impact</span>
                    <h2 class="heading mb-4">Explore Volunteer work and Impact in 2023</h2>
                    <p>Explore the impactful volunteer work of 2023 and witness the incredible difference made through
                        collective action!</p>
                    <p>From disaster relief to community support, volunteers demonstrated selflessness and resilience!</p>
                    <p>Discover the stories of compassion and join us in celebrating the power of volunteering!</p>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="row section-counter">
                        <div class="col-lg-6">
                            <div class="counter">
                                <i class="flaticon-social-services d-block text-secondary"></i>

                                <span class="number countup">{{ $eventCount }}</span>
                                <span class="d-block">Events</span>
                            </div>

                            <div class="counter">
                                <i class="flaticon-charity-money d-block text-secondary"></i>
                                <span class="number">$<span class="countup">{{ $donationSum }}</span></span>
                                <span class="d-block">Fund Raised</span>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="counter mt-5">
                                <i class="flaticon-money-donation d-block text-secondary"></i>
                                <span class="number countup">{{ $donorCount }}</span>
                                <span class="d-block">Donors</span>
                            </div>

                            <div class="counter">
                                <i class="flaticon-organs-donation d-block text-secondary"></i>
                                <span class="number countup">{{ $volunteerCount }}</span>
                                <span class="d-block">Volunteers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center justify-content-between">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                    <span class="subheading mb-3">Who we are</span>
                    <h2 class="heading">About Us</h2>
                    <p>We are a charity website dedicated to making a positive impact. Join us in creating a better future
                        for all.</p>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <blockquote>
                        We are a charity website with a mission to make a positive impact. Through partnerships,
                        fundraising, and community engagement, we address critical issues like poverty, education,
                        healthcare, and the environment. Join us in creating a brighter future for all.
                    </blockquote>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <ul class="nav nav-pills mb-5 custom-nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-mission" type="button" role="tab"
                                aria-controls="pills-mission" aria-selected="true">Our Mission</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-values-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-values" type="button" role="tab"
                                aria-controls="pills-values" aria-selected="false">Our Values</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-history" type="button" role="tab"
                                aria-controls="pills-history" aria-selected="false">Our History</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-mission" role="tabpanel"
                            aria-labelledby="pills-mission-tab">
                            <h2 class="mb-3 text-primary fw-bold">Our Mission</h2>
                            <p>At our charity website, our mission is to create a world where compassion, generosity, and
                                kindness prevail. We are driven by the belief that every individual deserves access to basic
                                necessities, education, healthcare, and opportunities for a better life.</p>
                            <p>Through our initiatives, we strive to alleviate poverty, empower marginalized communities,
                                and promote sustainable development. We work diligently to raise awareness, mobilize
                                resources, and implement impactful projects that address pressing social issuespernatur fuga
                                labore eius sequi nihil sit iusto, enim. Aliquam, cumque! Quaerat inventore
                                illo dicta, exercitationem natus ducimus?</p>
                            <p class="mt-5">
                                <a href="{{ Route('causes.index') }}" class="btn btn-primary me-4">Donate Now</a>

                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-values" role="tabpanel" aria-labelledby="pills-values-tab">
                            <h2 class="mb-3 text-primary fw-bold">Our Values</h2>
                            <p>At our charity website, our core values serve as the guiding principles behind everything we
                                do. Compassion is at the heart of our organization, driving us to empathize with the
                                struggles of others and take action to alleviate their hardships. We believe in
                                transparency, ensuring that every donation is used effectively and responsibly. </p>
                            <p>Collaboration is another key value, as we actively seek partnerships and work together with
                                communities, volunteers, and other organizations to maximize our impact. We value integrity
                                and hold ourselves to the highest ethical standards, earning the trust and confidence of our
                                supporters. Lastly, we embrace innovation, continuously seeking creative and sustainable
                                solutions to address the ever-evolving challenges faced by those we serve.</p>
                            <p class="mt-5">
                                <a href="{{ Route('news.index') }}" class="btn btn-primary me-4">Be A Volunteer</a>

                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-history" role="tabpanel"
                            aria-labelledby="pills-history-tab">

                            <h2 class="mb-3 text-primary fw-bold">Our History</h2>
                            <p>Founded with a vision for change, our charity website has a rich history of making a
                                difference. It all began with a group of passionate individuals who recognized the pressing
                                needs of underserved communities</p>
                            <p>Over the years, our organization has evolved and grown, expanding our reach and impact. We
                                have collaborated with like-minded partners, engaged dedicated volunteers, and leveraged the
                                power of collective action to address critical social issues. Together, we have implemented
                                transformative projects, provided essential resources, and uplifted countless lives.</p>
                            <p class="mt-5">
                                <a href="{{ route('SeekSupport.index') }}" class="btn btn-primary me-4">Be a Sponsor</a>

                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="overlap-imgs">
                        <img src="images/img_v_2-min.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up"
                            data-aos="100">
                        <img src="images/img_v_3-min.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up"
                            data-aos="200">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="vision">
                        <h2>Our Vision</h2>
                        <p class="mb-4 lead" id="vision-content">
                            At our charity website, our vision is to create a world where everyone has equal opportunities
                            and access to a better life.
                        </p>
                        <p>
                            <a href="#" id="vision-learn-more-link" class="link-underline">Read More</a>
                        </p>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var visionContent = document.getElementById('vision-content');
                            var visionLearnMoreLink = document.getElementById('vision-learn-more-link');

                            var isVisionExpanded = false;
                            var visionFullText =
                                'At our charity website, our vision is to create a world where everyone has equal opportunities and access to a better life. We envision a society where poverty, discrimination, and injustice are eliminated, and every individual can thrive and reach their full potential. Through our efforts, we aim to inspire compassion, promote sustainable development, and foster a culture of giving and empathy. We believe in the power of collective action and collaboration, as we work towards creating positive change on a global scale. Together, we can build a future filled with hope, dignity, and opportunity for all. Join us in realizing this vision and be a part of the transformation that can make our world a better place.';
                            var visionShortText =
                                'At our charity website, our vision is to create a world where everyone has equal opportunities and access to a better life.';

                            visionContent.textContent = visionShortText;

                            visionLearnMoreLink.addEventListener('click', function(e) {
                                e.preventDefault();

                                if (isVisionExpanded) {
                                    visionContent.textContent = visionShortText;
                                    visionLearnMoreLink.textContent = 'Learn More';
                                    isVisionExpanded = false;
                                } else {
                                    visionContent.textContent = visionFullText;
                                    visionLearnMoreLink.textContent = 'Show Less';
                                    isVisionExpanded = true;
                                }
                            });
                        });
                    </script>
                </div>
                <div class="col-md-6">
                    <div class="mission">
                        <h2>Our Mission</h2>
                        <p class="mb-4 lead" id="mission-content">
                            At our charity website, our mission is clear: to bring about positive and lasting change in the
                            world. We are driven by a deep commitment to addressing pressing issues such as poverty,
                            inequality, access to education, healthcare, and environmental sustainability. Through our
                            strategic initiatives, collaborative partnerships, and unwavering dedication, we aim to empower
                            and uplift communities in need. By raising awareness, mobilizing resources, and implementing
                            effective solutions, we strive to make a tangible difference in the lives of individuals and
                            foster a more equitable and sustainable future. Together, let's work towards a world where
                            everyone has the opportunity to thrive and live with dignity.
                        </p>
                        <p>
                            <a href="#" id="mission-learn-more-link" class="link-underline">Read More</a>
                        </p>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var missionContent = document.getElementById('mission-content');
                            var missionLearnMoreLink = document.getElementById('mission-learn-more-link');

                            var isMissionExpanded = false;
                            var missionFullText =
                                'At our charity website, our mission is clear: to bring about positive and lasting change in the world. We are driven by a deep commitment to addressing pressing issues such as poverty, inequality, access to education, healthcare, and environmental sustainability. Through our strategic initiatives, collaborative partnerships, and unwavering dedication, we aim to empower and uplift communities in need. By raising awareness, mobilizing resources, and implementing effective solutions, we strive to make a tangible difference in the lives of individuals and foster a more equitable and sustainable future. Together, let\'s work towards a world where everyone has the opportunity to thrive and live with dignity.';
                            var missionShortText =
                                'At our charity website, our mission is clear: to bring about positive and lasting change in the world.';

                            missionContent.textContent = missionShortText;

                            missionLearnMoreLink.addEventListener('click', function(e) {
                                e.preventDefault();

                                if (isMissionExpanded) {
                                    missionContent.textContent = missionShortText;
                                    missionLearnMoreLink.textContent = 'Learn More';
                                    isMissionExpanded = false;
                                } else {
                                    missionContent.textContent = missionFullText;
                                    missionLearnMoreLink.textContent = 'Show Less';
                                    isMissionExpanded = true;
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>




    <div class="section sec-instagram pb-0 ">
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-3" data-aos="fade-up">
                    <span class="subheading mb-3">Instagram</span>
                    <h2 class="heading">We Are In Instagram</h2>
                </div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Follow us on Instagram @Randist-website for the latest updates, initiatives, and inspiring stories.
                        Together, let's create a movement of kindness and generosity. Join our community and make a
                        difference.!</p>
                </div>
            </div>
        </div>

        <div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
            <div class="instagram-slider" id="instagram-slider">

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_8-min.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_2-min.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_3-min.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_4-min.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_5-min.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_6-min.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>

                <div class="item">
                    <a class="instagram-item">
                        <span class="icon-instagram"></span>
                        <img src="images/img_v_7-min.jpg" alt="Image" class="img-fluid">
                    </a>
                </div>


            </div>
        </div>

    </div>
@endsection
