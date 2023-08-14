@extends('adminDashboard.Layout.master')

@section('content')
    {{-- Content body start
        ***********************************--> --}}
    <div class="content-body">
        <div class="container-fluid">
        
            <!-- row -->


            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" style="font-size: 20px">case Us Table</h4>
                            {{-- <a href="{{ route('casesTable.create') }}"> <button class="my-button">Add</button></a> --}}
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Salary</th>
                                            <th scope="col">No. of Family</th>
                                            <th scope="col">Case Type</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">image</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cases as $case)
                                            <tr>
                                                <td>{{ $case->name }}</td>
                                                <td>
                                                    {{ $case->phone }}
                                                </td>
                                                <td> {{ $case->Salary }}</td>
                                                <td>
                                                    {{ $case->NoFamily }}
                                                </td>



                                                <td>
                                                    {{$case->case ? $case->case->name : 'N/A'}}
                                                </td>

                                                <td>
                                                    {{ $case->address }}
                                                </td>

                                                <td>
                                                    {{ $case->description }}
                                                </td>

                                                <td style="width: 100px">
                                                    @if ($case->image)
                                                        <img src="{{ asset('assest/images/' . $case->image) }}"
                                                            alt="Office Image" class="img-thumbnail" style="width: 100px;">
                                                    @else
                                                        <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                                                    @endif
                                                </td>

                                                <td>
                                                    {{ $case->status }}
                                                </td>


                                                <td style="width: 130px">
                                                    <form method="POST" action="{{ route('casesTable.update', $case->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        @method('PUT')
                                                        @csrf
                                                        <input type="hidden" class="form-control" name="status" id="status" value="2">
                                                        <input type="hidden" name="totalAmount" placeholder="required amount " class="form-control" value="{{ $case->totalAmount }}">
                                                        <input type="hidden" name="address" placeholder="1234 Main St" class="form-control" value="{{ $case->address }}">
                                                        <input type="hidden" name="NoBeneficiary" placeholder="Number of Beneficiary" class="form-control" value="{{ $case->NoBeneficiary }}">
                                                        <input type="hidden" name="Beneficiary" placeholder="Beneficiary" class="form-control" value="{{ $case->beneficiary }}">
                                                        <input type="hidden" name="description" placeholder="Beneficiary" class="form-control" value="{{ $case->description }}">

                                                        <input type="hidden" name="name" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->name }}">
                                                        <input type="hidden" name="username" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->username }}">
                                                        <input type="hidden" name="phone" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->phone }}">
                                                        <input type="hidden" name="user_id" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->user_id }}">

                                                        <button style="background-color: white; color: red; border: none; width: 40px; height:40px;" type="submit" class="btn btn-danger btn-lg" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                            <i class="fas fa-times" aria-hidden="true"></i> <!-- Changed icon to a cross -->
                                                        </button>
                                                    </form>

                                                    <form method="POST" action="{{ route('casesTable.update', $case->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        @method('PUT')
                                                        @csrf
                                                        <input type="hidden" name="totalAmount" placeholder="required amount " class="form-control" value="{{ $case->totalAmount }}">
                                                        <input type="hidden" name="address" placeholder="1234 Main St" class="form-control" value="{{ $case->address }}">
                                                        <input type="hidden" name="NoBeneficiary" placeholder="Number of Beneficiary" class="form-control" value="{{ $case->NoBeneficiary }}">
                                                        <input type="hidden" name="Beneficiary" placeholder="Beneficiary" class="form-control" value="{{ $case->beneficiary }}">
                                                        <input type="hidden" name="description" placeholder="Beneficiary" class="form-control" value="{{ $case->description }}">

                                                        <input type="hidden" name="name" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->name }}">
                                                        <input type="hidden" name="username" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->username }}">
                                                        <input type="hidden" name="phone" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->phone }}">
                                                        <input type="hidden" name="user_id" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->user_id }}">

                                                        <input type="hidden" class="form-control" name="status" id="status" value="1">
                                                        <button style="background-color: white; color: green; border: none; width: 40px; height:40px;" class="btn btn-primary btn-lg">
                                                            <i class="fas fa-check" style="color: green"></i> <!-- Changed icon to a tick -->
                                                        </button>
                                                    </form>


                                                </td>



                                            </tr>
                                            <tr>
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
    <!--**********************************
                    Content body end
                ***********************************-->
@endsection
