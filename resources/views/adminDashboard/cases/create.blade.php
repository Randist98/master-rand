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
                                    <li class="nav-item">
                                        <a href="#profile-settings" data-toggle="tab" class="nav-link">Add New Account</a>
                                    </li>

                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form action="{{ route('casesTable.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Case Name</label>
                                                            <input type="text" name="name" placeholder="Enter Case Name" class="form-control">
                                                        </div>

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="dropdown" class="ps-3 fw-bold mb-2">Case Type</label>
                                                            <select name="Beneficiary" id="dropdown" class="form-control">
                                                                <option disabled selected value="option1">- Select Case Type-</option>
                                                                    <option value="Patient">Patient</option>
                                                                    <option value="Student">Student</option>
                                                                    <option value="Orphans">Orphans</option>
                                                                    <option value="Necessitous">Necessitous</option>
                                                                    <option value="Other">Other</option>

                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Number of Beneficiary</label>
                                                            <input type="text" name="NoBeneficiary" placeholder="Number of Beneficiary" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Address</label>
                                                            <input type="text" name="address" placeholder="1234 Main St" class="form-control">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label> Required Amount</label>
                                                            <input type="text" name="totalAmount" placeholder=" required amount" class="form-control">
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
                                                            <textarea name="description" rows="5" cols="100" placeholder="Write the description" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Add Case</button>
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
