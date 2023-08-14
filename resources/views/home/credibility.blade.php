@extends('home.layout')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<header style="background-color:  rgb(79, 121, 95); width: 100%; height: 300px;">
    <h1 style="color: rgb(253, 254, 253); font-weight: bold; text-align: center; padding-top: 150px; font-size: 40px;">Credibility</h1>
</header>


<div class="container mt-4">
    <div class="row">
        <!-- Loop through donors and display them as cards -->
        @foreach($donors as $donor)
        <div class="col-md-4 mb-4" style="text-align: center;">
            <div class="card">
                <div class="card-header text-white" style="background-color: rgb(79, 121, 95); ">
                    <h5 class="mb-0" style=" color: white;">Donor: <strong>{{ $donor->user->name }}</strong></h5>
                    <h5 class="mb-0" style=" color: white;">Case: <strong>{{ $donor->case->name }}</strong></h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Donation Value: {{ $donor->amountPaymnt }} $</p>
                    <p class="card-text">Donation Date: {{ $donor->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
