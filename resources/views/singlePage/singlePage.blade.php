<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Volunteer &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="{{ Route('index') }}" class="logo m-0 float-start text-black">Randist</a>
                        </div>
                        <div class="col-8 text-center" style="color: black;">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a style="color: black;" href="{{ Route('index') }}">Home</a>
                                </li>
                                <li>
                                    <a style="color: black;" href="{{ Route('causes.index') }}">Cases</a>
                                </li>
                                <li><a style="color: black;" href="{{ Route('about.index') }}">About</a></li>
                                <li><a style="color: black;" href="{{ Route('news.index') }}">Events</a></li>
                                <li><a style="color: black;" href="{{ Route('zakah.index') }}">Zakat</a></li>
                                <li class="active"><a href="{{ Route('SeekSupport.index') }}">Seek Support</a></li>
                            </ul>
                        </div>
                        <div class="col-2 text-end">
                            <a href="#"
                                class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                                <span></span>
                            </a>
                            <a href="#" class="call-us d-flex align-items-center">
                                <span class="icon-phone"></span>
                                <span>123-489-9381</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>





    <div class="section sec-about" style="margin-top: 50px">
        <div class="container">
            <div class="row g-5 justify-content-between">
                <div class="col-lg-7 has-bg" data-aos="fade-right">
                    <!-- Image display -->
                    <img src="{{ asset('assest/images/' . $case->image) }}" alt="Image"
                        class="img-fluid img-box-shadow rounded">

                    <br> <br>

                    <div>
                        <h4 style="color: rgb(79, 121, 95); font-weight: bold;">Description :</h4>
                        <h5 style=" font-weight: normal;">{{ $case->description }}</h5>
                    </div>

                    <br>

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
                    @endif

                    <br>

                    <div>
                        <h4 style="color: rgb(79, 121, 95); font-weight: bold;">Address :</h4>
                        <h5 style=" font-weight: normal;">{{ $case->address }}</h5>
                    </div>

                </div>
                <div class="col-lg-4 align-self-center" data-aos="fade-left" data-aos-delay="100">
                    <h4 class="heading mb-4" style="color: rgb(79, 121, 95)">{{ $case->name }}</h4>


                    {{-- <br> --}}


                    <div
                        style="width: 300px; height: 100px;  background-color: rgba(128, 128, 128, 0.166);border-radius: 5px;box-sizing: border-box; padding:10px;">
                        <h4 style="color: rgb(79, 121, 95); font-weight: normal;">
                            <i class="fa fa-user-circle-o"
                                style="margin-right: 5px;font-size:36px;color:rgb(79, 121, 95)"></i> Beneficiary
                            ({{ $case->NoBeneficiary }})
                        </h4>
                        <h5 class="beneficiary">{{ $case->beneficiary }} </h5>

                    </div>

                    <br>

                    <br>

                    <div
                        style="width: 300px; height: 100px;  background-color: rgba(128, 128, 128, 0.166);border-radius: 5px;box-sizing: border-box; padding:10px;">
                        <h4 style="color: rgb(79, 121, 95); font-weight: normal;">
                            <i class="fa fa-money"
                                style="margin-right: 5px;font-size:36px;color:rgb(79, 121, 95)"></i> Total Amount
                        </h4>
                        <h5 class="beneficiary">{{ $case->totalAmount }}$</h5>

                    </div>


                    <br> <br>

                    <div
                        style="width: 300px; height: 100px; background-color: rgba(128, 128, 128, 0.166); border-radius: 5px;box-sizing: border-box; padding:10px;">
                        <h4 style="color: rgb(79, 121, 95); font-weight: normal;">
                            <i class="fa-solid fa-hand-holding-heart"></i> Number of Donors
                        </h4>
                        @if(isset($totalDonors))
                        <h5 class="beneficiary">{{ $totalDonors }} Donors</h5>
                    @endif

                    </div>

                    <br> <br>

                    <div
                        style="width: 300px; height: 120px; background-color: rgba(128, 128, 128, 0.166); border-radius: 5px;box-sizing: border-box; padding:10px;">
                        <h4 style="color: rgb(79, 121, 95); font-weight: normal;">
                            <i class="fa fa-clock-o"
                                style="margin-right: 5px;font-size:36px;color:rgb(79, 121, 95)"></i> last Donation
                        </h4>
                        @if(isset($lastDonationTime))
                        <h5 class="beneficiary">Last donation before {{ $lastDonationTime }}</h5>
                        @endif
                    </div>

                    <br> <br>
                    <button type="submit" class="btn btn-primary"><a
                            href="{{ route('donate.index', ['id' => $case->id]) }}"
                            style="color: white; font-weight: bold">Donate Now</a> </button>

                </div>

            </div>

        </div>

    </div>




    {{-- footer start --}}


    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Donate Now</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Popular Causes</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Food for the Hungry</a></li>
                            <li><a href="#">Education for Children</a></li>
                            <li><a href="#">Support for Livelihood</a></li>
                            <li><a href="#">Medical Mission</a></li>
                            <li><a href="#">Education</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Volunteer</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="widget">
                        <h3>Contact</h3>
                        <address>43 Raymouth Rd. Baltemoer, London 3910</address>
                        <ul class="list-unstyled links mb-4">
                            <li><a href="tel://11234567890">+962788286013</a></li>
                            <li><a href="mailto:info@mydomain.com">Randist@gmail.com</a></li>
                        </ul>
                        <h3>Connect</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p class="copyright">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>. All Rights Reserved. &mdash; Designed with love by <a
                            href="https://untree.co">Untree.co</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        function updateAmount(amount) {
            document.getElementById("donation-amount").value = amount.toFixed(2);
        }
    </script>
</body>

</html>
