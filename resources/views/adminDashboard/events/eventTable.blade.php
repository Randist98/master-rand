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
                                        <a href="{{ route('event.create') }}"> <button class="my-button">Add</button></a>
                                    </div>
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <!-- Index page content here -->

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>event Name</th>
                                                        <th>Beneficiary</th>
                                                        <th>No. of Beneficiaries</th>
                                                        <th>Address</th>
                                                        <th>Date</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Loop through events and display them in rows -->
                                                    @foreach($events as $event)
                                                    <tr>
                                                        <td>{{ $event->name }}</td>
                                                        <td>{{ $event->beneficiary }}</td>
                                                        <td>{{ $event->NoBeneficiary }}</td>
                                                        <td>{{ $event->address }}</td>
                                                        <td>{{ $event->date }}</td>
                                                        <td>{{ $event->description }}</td>


                                                        <td style="width: 100px">
                                                    @if ($event->image)
                                                        <img src="{{ asset('images/' . $event->image) }}"
                                                            alt="Office Image" class="img-thumbnail" style="width: 100px;">
                                                    @else
                                                        <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                                                    @endif
                                                </td>


                                                        <td>
                                                            <a href="{{ route('event.edit', $event->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                            <form action="{{ route('event.destroy', $event->id) }}" method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                            </form>
                                                        </td>
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
