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
                                        <h4 class="card-title" style="font-size: 20px">Volunteers Table</h4>
                                        {{-- <a href="{{ route('event.create') }}"> <button class="my-button">Add</button></a> --}}
                                    </div>
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <!-- Index page content here -->

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Volunteer Name</th>
                                                        <th>Volunteer email</th>
                                                        <th>Event Name</th>
                                                        <th>Event Address</th>
                                                        <th>Event Date</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Loop through events and display them in rows -->
                                                    @foreach($volunteers as $volunteer)
                                                    <tr>
                                                        <td>{{  $volunteer->user->name }}</td>
                                                        <td>{{  $volunteer->user->email }}</td>
                                                        <td>{{  $volunteer->event->name }}</td>
                                                        <td>{{  $volunteer->event->address }}</td>
                                                        <td>{{  $volunteer->event->date }}</td>


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
