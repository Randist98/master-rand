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
                                            <h4 class="text-primary">Edit Event</h4>
                                            <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group">
                                                    <label for="name">Case Name</label>
                                                    <input type="text" id="name" name="name" placeholder="Enter Case Name" class="form-control" value="{{ $event->name }}">
                                                </div>

                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="beneficiary">Beneficiary</label>
                                                        <input type="text" id="beneficiary" name="beneficiary" placeholder="Beneficiary" class="form-control" value="{{ $event->beneficiary }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="noBeneficiary">Number of Beneficiaries</label>
                                                        <input type="text" id="noBeneficiary" name="NoBeneficiary" placeholder="Number of Beneficiaries" class="form-control" value="{{ $event->NoBeneficiary }}">
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" id="address" name="address" placeholder="1234 Main St" class="form-control" value="{{ $event->address }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="date">Date</label>
                                                    <input type="date" id="date" name="date" placeholder="Date" class="form-control" value="{{ $event->date }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" id="image" name="image" class="form-control">
                                                    <img src="{{ $event->image }}" alt="Event Image" class="mt-2" style="max-width: 200px">
                                                </div>

                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea id="description" name="description" rows="5" placeholder="Write the description" class="form-control">{{ $event->description }}</textarea>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update Event</button>
                                            </form>
                                        </div>


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
