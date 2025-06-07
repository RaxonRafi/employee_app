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
                  <h5 class="card-title">List of leaves</h5>
                  <a href="{{route('leave.emp.index')}}" class="btn btn-danger">Back</a>
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
                                <th>Reason</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                            <tbody>

                                @foreach ($leaveRequests as $request)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$request->reason}}</td>
                                        <td>{{$request->start_date}}</td>
                                        <td>{{$request->end_date}}</td>
                                        <td>{{$request->status}}</td>

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


@endsection
