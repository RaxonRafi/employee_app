@extends('admin.dashboard')
@section('title')
Request Leave
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">Request Leave</h5>
                  <a href="{{route('employee.index')}}" class="btn btn-info">My Leaves</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="{{ route('leave.store') }}" method="POST">
                        @csrf
                        <input class="form-control" type="hidden" name="emp_id" value="{{  $emp_id[0]->emp_id  }}">
                        <div class="mb-3">
                            <label for="start_date">Start Date:</label>
                            <input class="form-control" type="date" name="start_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="end_date">End Date:</label>
                            <input class="form-control" type="date" name="end_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="reason">Reason (Optional):</label>
                            <textarea class="form-control" name="reason"></textarea>
                        </div>

                        <button class="btn btn-success" type="submit">Request Leave</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
