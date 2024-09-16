@extends('layouts.admin')
@section('title', 'Edit Department')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Department</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('department.update', $department->dept_id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Department Title</label>
                            <input name="dept_title" type="text" class="form-control @error('dept_title') is-invalid @enderror" value="{{ old('dept_title', $department->dept_title) }}">
                            @error('dept_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Write About the Department!</label>
                            <textarea name="dept_desc" class="form-control @error('dept_desc') is-invalid @enderror">{{ old('dept_desc', $department->dept_desc) }}</textarea>
                            @error('dept_desc')
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
