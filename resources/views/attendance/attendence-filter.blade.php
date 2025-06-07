@extends('layouts.admin')
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

                    <form action="{{ route('generate.pdf') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Start Date</label>
                          <input name="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}">
                          @error('start_date')
                              <div class="invalid-feedback">
                                {{$message }}

                              </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">End Date</label>
                          <input name="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}">
                          @error('start_date')
                              <div class="invalid-feedback">
                                {{$message }}
                              </div>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">print</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
