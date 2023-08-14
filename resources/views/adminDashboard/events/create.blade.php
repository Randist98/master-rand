@extends('adminDashboard.Layout.master')

@section('content')

   <!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">

                                <div class="tab-content">
                                    {{-- <li class="nav-item">
                                        <a href="#profile-settings" data-toggle="tab" class="nav-link">Add New Account</a>
                                    </li> --}}

                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Add Event</h4>
                                                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="name">Event Name</label>
                                                        <input type="text" id="name" name="name" placeholder="Enter Case Name" class="form-control">
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="dropdown" class="ps-3 fw-bold mb-2">Event Type</label>
                                                            <select name="beneficiary" id="dropdown" class="form-control">
                                                                <option disabled selected value="option1">- Select Case Type-</option>
                                                                    <option value="Ifttar">Ifttar</option>
                                                                    <option value="Orphanage">Orphanage</option>
                                                                    <option value="Hospice">Hospice</option>
                                                                    <option value="Environment">Environment</option>
                                                                    <option value="Other">Other</option>

                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Number of Beneficiary</label>
                                                            <input type="text" name="NoBeneficiary" placeholder="Number of Beneficiary" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" id="address" name="address" placeholder="1234 Main St" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="date">Date</label>
                                                        <input type="date" id="date" name="date" placeholder="Date" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="file" id="image" name="image" class="form-control">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea id="description" name="description" rows="5" placeholder="Write the description" class="form-control"></textarea>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Add Event</button>
                                                </form>
                                            </div>

                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <!--**********************************
            Content body end
        ***********************************-->

@endsection
