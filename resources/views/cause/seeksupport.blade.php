@extends('home.layout')
@section('content')
    <div class="hero overlay" style="background-image: url('images/img_v_5-min.jpg')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading text-white mb-2" data-aos="fade-up">Seek Support</h1>
                    <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Seek Support: Get Help

                        Our "Seek Support: Get Help" program is here for you. We provide a safe space to share your needs
                        and connect you with the necessary assistance. Reach out to us and let us support you through your
                        challenges.</p>
                    <p data-aos="fade-up" data-aos-delay="100">
                        {{-- <a href="#" class="btn btn-primary me-4">Donate Now</a> --}}
                    </p>

                </div>


            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6" data-aos="fade-up">
                    <h2 class="heading">Get Help</h2>
                    <p class="text-black-50">Get Help Now: Seek Support

                        Facing challenges? Our program is here for you. Share your needs and receive the support you
                        deserve. Reach out today for the help you need.</p>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('SeekSupport.store') }}" method="POST" enctype="multipart/form-data"
                class="row justify-content-between">
                @csrf

                <div class="col-md-6 col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">

                        <div class="mb-3 col-lg-6">
                            <label for="name" class="ps-3 fw-bold mb-2">Full Name</label>
                            <input type="text" class="form-control" name="username" id="name">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="phone_number" class="ps-3 fw-bold mb-2">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone_number">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="phone_number" class="ps-3 fw-bold mb-2">Number of Beneficiary</label>
                            <input type="text" class="form-control" name="NoBeneficiary" id="NoBeneficiary">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="Salary" class="ps-3 fw-bold mb-2">Cases name</label>
                            <input type="text" class="form-control" name="name" id="Salary">
                        </div>



                        <div class="mb-3 col-lg-6">
                            <label for="Salary" class="ps-3 fw-bold mb-2">Number of Beneficiary</label>
                            <input type="text" class="form-control" name="NoBeneficiary" id="NoBeneficiary">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="Salary" class="ps-3 fw-bold mb-2">Amount Required</label>
                            <input type="text" class="form-control" name="totalAmount" id="totalAmount">
                        </div>


                        <div class="mb-3 col-lg-6">
                            <label for="image" class="ps-3 fw-bold mb-2">Image(ID, passport or any official
                                document)</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>

                        <div class="mb-3 col-lg-6">
                            <label for="dropdown" class="ps-3 fw-bold mb-2">Case Type</label>
                            <select name="beneficiary" id="dropdown" class="form-control">
                                <option disabled selected value="option1">- Select Case Type-</option>
                                <option value="Patient">Patient</option>
                                <option value="Student">Student</option>
                                <option value="Orphans">Orphans</option>
                                <option value="Necessitous">Necessitous</option>
                                <option value="Other">Other</option>

                            </select>
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label for="address" class="ps-3 fw-bold mb-2">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="Country - City - District - Street - Building No">
                        </div>

                        <div class="mb-3 col-lg-12">
                            <label for="description" class="ps-3 fw-bold mb-2">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="col-lg-6">
                            <input type="submit" class="btn btn-primary text-white py-3" value="submit">
                        </div>

                    </div>
                </div>

            </form>





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
