@extends('layouts.admin')
@section('title')
Leave Requests
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">List of Leave Requests</h5>
        
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr><th>#</th>
                                <th>Employee name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>

                                @foreach ($leaveRequests as $request)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$request->emp_name}}</td>
                                        <td>{{$request->start_date}}</td>
                                        <td>{{$request->end_date}}</td>
                                        <td>{{$request->status}}</td>
                                        <td class="d-flex">
                                            <form action="{{ route('leave.update.status', ['id' => $request->id, 'status' => 'approved']) }}" method="POST">
                                                @csrf
                                                <button  class="btn btn-success mr-3" type="submit">Approve</button>
                                            </form>
                                            <form action="{{ route('leave.update.status', ['id' => $request->id, 'status' => 'declined']) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Decline</button>
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

{{-- @foreach ($leaveRequests as $request)
    <p> {{ $request->start_date }} to {{ $request->end_date }}</p>
    <p>Status: {{ $request->status }}</p>
    <form action="{{ route('leave.update.status', ['id' => $request->id, 'status' => 'approved']) }}" method="POST">
        @csrf
        <button type="submit">Approve</button>
    </form>
    <form action="{{ route('leave.update.status', ['id' => $request->id, 'status' => 'declined']) }}" method="POST">
        @csrf
        <button type="submit">Decline</button>
    </form>
@endforeach --}}

@endsection
