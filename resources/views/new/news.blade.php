@extends('home.layout')
@section('content')
    <div class="hero overlay" style="background-image: url('images/img_v_6-min.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <span class="subheading-white text-white mb-3" data-aos="fade-up">Events</span>

                    <h1 class="heading text-white mb-2" data-aos="fade-up">Our Events</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Join our charity website for inspiring
                        events that make a difference. From galas to community outreach, we strive to uplift and empower
                        those in need. Together, let's create positive change.</p>

                </div>


            </div>
        </div>
    </div>



    <div class="section bg-light">
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="causes-item bg-white">
                            <a href="#"><img src="{{ asset('images/' . $event->image) }}" alt="Image"
                                    class="img-fluid mb-4 rounded"></a>
                            <div class="px-4 pb-3 pt-3">
                                <h6 class="date">{{ $event->date }}</h6>
                                <h3><a href="#">{{ $event->name }}</a></h3>
                                <p>{{ $event->description }}</p>
                                <button type="submit" class="btn btn-primary">
                                    <a href="{{ route('events.singlePage', ['id' => $event->id]) }}"
                                        style="color: white; font-weight: bold">Be A Volunteer</a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row align-items-center py-5">
                <div class="col-lg-3">
                    <!-- Pagination (1 of 10) -->
                </div>
                <div class="col-lg-6 text-center">
                    <div class="custom-pagination">
                        {{ $events->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="section sec-instagram pb-0">
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
