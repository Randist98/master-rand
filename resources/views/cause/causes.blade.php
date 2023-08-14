@extends('home.layout')
@section('content')
    <div class="hero overlay" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    {{-- <span class="subheading-white text-white mb-3" data-aos="fade-up">Causes</span> --}}

                    <h1 class="heading text-white mb-2" data-aos="fade-up">The Cases</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">
                        Donations are crucial in cases of natural disasters, poverty, medical research, and education
                        initiatives. Contributions make a significant impact, bringing hope and transforming lives.</p>

                </div>


            </div>
        </div>
    </div>



    <div class="section bg-light">
        <div class="container">
            <div class="row">


                @foreach ($cases as $case)
                    <div class="col-lg-4 col-md-6">
                        <div class="causes-item bg-white">
                            <a href="#"><img src="{{ asset('assest/images/' . $case->image) }}" alt="Image"
                                    class="img-fluid mb-4 rounded"></a>
                            <div class="px-4 pb-5 pt-3">
                                <h3><a href="#">{{ $case->name }}</a></h3>
                                <p>{{ $case->description }}</p>

                                @php
                                    $progressPercentage = ($case->amountCollected / $case->totalAmount) * 100;
                                    $progressPercentage = min($progressPercentage, 100); // Ensure progress doesn't exceed 100%
                                @endphp

                                <div class="progress mb-2">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $progressPercentage }}%;"
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
                                            class="btn btn-primary">Donate
                                            Now</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach


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
                        difference!</p>
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
