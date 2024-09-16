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
                  <a href="{{route('list.request.leave')}}" class="btn btn-info">My Leaves</a>
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
                            <input class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date')}}" type="date" name="start_date" required>
                            @error('start_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="end_date">End Date:</label>
                            <input class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date')}}" type="date" name="end_date" required>
                        @error('end_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="mb-3">
                          <label for="reason">Reason</label>
                           <select class="form-control @error('reason') is-invalid @enderror" name="reason" id="">
                                <option value="">Select Reason</option>
                                <option value="Sick Leave">Sick Leave</option>
                                <option value="Annual Leave">Annual Leave</option>
                                <option value="Casual Leave">Casual Leave</option>
                           </select>
                           @error('reason')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                       @enderror
                        </div>

                        <button class="btn btn-success" type="submit">Request Leave</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
