@extends('admin.dashboard')
@section('title')
Employees
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">Add Designation</h5>
                  <a href="{{route('designation.index')}}" class="btn btn-info">Designation List</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="{{ route('designation.add') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Department Name</label>
                          <select name="dept_id" class="form-control @error('dept_id') is-invalid @enderror">
                            <option value="">Select Department</option>
                            @foreach ($departments as $department)
                                <option value="{{$department->dept_id}}">{{$department->dept_title}}</option>
                            @endforeach
                          </select>
                          @error('dept_id')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Designation</label>
                          <input name="designation" class="form-control @error('designation') is-invalid @enderror">
                          @error('designation')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
