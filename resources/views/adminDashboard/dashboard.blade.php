@extends('adminDashboard.Layout.master')

@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body container-fluid">
        

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="fas fa-gavel text-info border-info"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Cases</div>
                                <div class="stat-digit">{{$casesCount}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="fas fa-users text-warning border-warning"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Users</div>
                                <div class="stat-digit">{{$userCount}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="fas fa-calendar text-danger border-danger"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Events</div>
                                <div class="stat-digit">{{$eventCount}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="fas fa-hand-holding-usd text-success border-success"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Donors</div>
                                <div class="stat-digit">{{$donorCount}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="fas fa-hands-helping text-primary border-primary"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Volunteers</div>
                                <div class="stat-digit">{{$volunteerCount}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="fas fa-donate text-pink border-pink"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Donation</div>
                                <div class="stat-digit">{{$donationSum}}$</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table student-data-table m-t-20">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                        <tr>
                                            <td>
                                                @if ($item->image)
                                                <img style="height: 50px; width: 50px; border-radius: 100%;" src="{{ asset($item->image) }}" class="rounded-full">
                                                @else
                                                <img  style="height: 50px; width: 50px; border-radius: 100%;" src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-full">
                                                @endif
                                            </td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->created_at}}</td>
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
        <!--**********************************
            Content body end
        ***********************************-->


@endsection
