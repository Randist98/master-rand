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
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Update Account</h4>
                                                <form method="post" action="{{ route('cases.update', ['id' => $case->id]) }}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Name</label>
                                                            <input type="text" name="name" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="dropdown" class="ps-3 fw-bold mb-2">Case Type</label>
                                                            <select name="Beneficiary" id="dropdown" class="form-control" value="{{ $case->beneficiary }}">
                                                                <option disabled value="option1">- Select Case Type-</option>
                                                                <option value="Patient" {{ $case->beneficiary === 'Patient' ? 'selected' : '' }}>Patient</option>
                                                                <option value="Student" {{ $case->beneficiary === 'Student' ? 'selected' : '' }}>Student</option>
                                                                <option value="Orphans" {{ $case->beneficiary === 'Orphans' ? 'selected' : '' }}>Orphans</option>
                                                                <option value="Necessitous" {{ $case->beneficiary === 'Necessitous' ? 'selected' : '' }}>Necessitous</option>
                                                                <option value="Other" {{ $case->beneficiary === 'Other' ? 'selected' : '' }}>Other</option>
                                                            </select>
                                                        </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Number of Beneficiary</label>
                                                                <input type="text" name="NoBeneficiary" placeholder="Number of Beneficiary" class="form-control" value="{{ $case->NoBeneficiary }}">
                                                            </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Address</label>
                                                            <input type="text" name="address" placeholder="1234 Main St" class="form-control" value="{{ $case->address }}">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Total Amount</label>
                                                            <input type="text" name="totalAmount" placeholder="required amount " class="form-control" value="{{ $case->totalAmount }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Image</label>
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Description</label>
                                                            <textarea name="description" rows="5" cols="100" placeholder="Write the description" class="form-control">{{ $case->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update</button>
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
