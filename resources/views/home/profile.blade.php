@extends('home.layout')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<header style="background-color:  rgb(79, 121, 95); width: 100%; height: 200px;">
    <h3 style="color: rgb(253, 254, 253); font-weight: bold; text-align: center; padding-top: 100px; font-size: 30px;"> Welcome {{ $users->name }}  </h1>
</header>



<div class="section">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-6 col-lg-6 mb-4">
                        @if ($users->image)
                            <img src="{{ asset($users->image) }}" class="rounded-circle img-thumbnail"
                                style="height: 300px; width: 300px; border: 4px solid rgb(89,136,107);">
                        @else
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle img-thumbnail">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="name" class="ps-3 fw-bold mb-2 text-success">
                            <i class="fas fa-phone"></i> Your Phone Num:
                        </label>
                        <span class="d-block fw-bold">{{ $users->phone }}</span>
                    </div>
                    <div class="mb-3 col-lg-12">
                        <label for="email" class="ps-3 fw-bold mb-2 text-success">
                            <i class="fas fa-envelope"></i> Your Email:
                        </label>
                        <span class="d-block fw-bold">{{ $users->email }}</span>
                    </div>
                    <form action="{{ route('profile-user.update', $users->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <input type="text" name="name" placeholder="Enter your Name"
                                value="{{ $users->name }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="email" placeholder="Enter your Email"
                                value="{{ $users->email }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="text" name="phone" placeholder="Enter your Phone Number"
                                value="{{ $users->phone }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Enter New Password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-success fw-bold">- CHOOSE YOUR IMAGE :</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5">
    <h1>Your cases</h1>
    <div class="row">
        @foreach ($cases as $case)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('assest/images/' . $case->image) }}" class="card-img-top" alt="Case Image" style="height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $case->name }}</h5>
                        <p class="card-text">{{ $case->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">

                            <small class="text-muted">{{ $case->totalAmount }}</small>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-home"></i> {{ $case->address }}</li>
                            <li class="list-group-item"><i class="fas fa-users"></i> {{ $case->NoBeneficiary }}</li>
                            <li class="list-group-item">
                                @if ($case->status == 0)
                                    <i class="fas fa-clock text-warning"></i> Pending
                                @elseif ($case->status == 1)
                                    <i class="fas fa-check-circle text-success"></i> Approved
                                @else
                                    <i class="fas fa-times-circle text-danger"></i> Rejected
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h1>Your Volunteers</h1>
    <div class="row">
        @foreach ($volunteers as $volunteer)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $volunteer->event->name }}</h5>
                        <p class="card-text">{{ $volunteer->event->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">

                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> {{ $volunteer->event->address }}</li>
                            <li class="list-group-item"><i class="fas fa-calendar"></i> {{ $volunteer->event->date }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h1>Your Donations</h1>
    <div class="row">
        @foreach ($donors as $donor)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $donor->case->name }}</h5>
                        <p class="card-text">{{ $donor->case->description }}</p>
                        <div class="d-flex justify-content-between align-items-center">

                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-hand-holding-usd"></i> {{ $donor->amountPaymnt }}</li>
                            <li class="list-group-item"><i class="fas fa-clock"></i> {{ $donor->created_at->diffForHumans() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
