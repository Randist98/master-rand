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
                                    <div class="card-header">
                                        <h4 class="card-title" style="font-size: 20px">Donors Table</h4>
                                    </div>
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <!-- Index page content here -->

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Donor Name</th>
                                                        <th>Donation Value</th>
                                                        <th>Case Name</th>
                                                        <th>Donation Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Loop through events and display them in rows -->
                                                    @foreach($donors as $donor)
                                                    <tr>
                                                        <td>{{  $donor->user->name }}</td>
                                                        <td>{{  $donor->amountPaymnt }}</td>
                                                        <td>{{  $donor->case->name }}</td>
                                                        <td>{{  $donor->created_at->diffForHumans() }}</td>


                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
