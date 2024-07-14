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
                  <h5 class="card-title">Add Department</h5>
                  <a href="{{route('department.index')}}" class="btn btn-info">Department List</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                    @endif

                    <form action="{{ route('department.add') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Department Title</label>
                          <input name="dept_title" type="text" class="form-control @error('dept_title') is-invalid @enderror" value="{{ old('dept_title') }}">
                          @error('dept_title')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Write About the Department!</label>
                          <textarea name="dept_desc" class="form-control @error('dept_desc') is-invalid @enderror">{{ old('dept_desc') }}</textarea>
                          @error('dept_desc')
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
