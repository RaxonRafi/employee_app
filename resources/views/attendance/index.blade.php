@extends('admin.dashboard')
@section('title')
Attendance
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">Employee Attendance</h5>
                  {{-- <a href="{{route('attendance.store')}}" class="btn btn-info">Add a Department</a> --}}
                </div>

                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-info" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                    <form action="{{ route('attendance.store') }}" method="POST">
                        @csrf

                        <div class="d-flex pb-3">
                            <label for="date">Date:</label>
                            <input class="form-control @error('date') is-invalid @enderror" style="width: 20%" type="date" id="date" name="date" required><br>
                            @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Employee</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->emp_name }}</td>
                                        <input type="hidden" name="attendance[{{ $loop->index }}][emp_id]" value="{{ $employee->emp_id }}">
                                        <td>
                                            <input type="checkbox" id="attendance-{{ $loop->index }}-present" name="attendance[{{ $loop->index }}][present]" value="1">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <button class="btn btn-success" type="submit">Submit Attendance</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
