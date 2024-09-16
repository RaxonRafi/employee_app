@extends('layouts.admin')
@section('title', 'Edit Designation')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Designation</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('designation.update', $designation->designation_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">

                            <label class="form-label">Department Name</label>
                            <select name="dept_id" class="form-control @error('dept_id') is-invalid @enderror">
                              <option value="">Select Department</option>
                              @foreach ($departments as $department)
                                  <option
                                  @if ($department->dept_id == $designation->dept_id)
                                    {{"selected"}}
                                  @endif
                                  value="{{$department->dept_id}}">
                                  {{$department->dept_title}}
                                </option>
                              @endforeach
                            </select>
                            @error('dept_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input value="{{old('designation',$designation->designation)}}" name="designation" class="form-control @error('designation') is-invalid @enderror">
                            @error('designation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
