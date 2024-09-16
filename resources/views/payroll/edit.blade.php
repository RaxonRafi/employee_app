@extends('layouts.admin')
@section('title')
Payroll Edit
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">Update Payroll</h5>
                  <a href="{{route('payroll.index')}}" class="btn btn-info">Payroll List</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="{{route('payroll.update',$payrolls->emp_id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label class="form-label">Employee Name</label>
                          <select class="form-control" name="emp_id" aria-label="Default select example">
                            <option selected>select Employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{$employee->emp_id}}"
                                    @if ($payrolls->emp_id ===$employee->emp_id)
                                        {{'selected'}}
                                    @endif
                                    >
                                    {{$employee->emp_name}}
                                </option>
                            @endforeach
                          </select>
                          @error('emp_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Basic Salary</label>
                          <input value="{{$payrolls->basic_salary}}" name="basic_salary" type="number" class="form-control @error('basic_salary') is-invalid @enderror">
                          @error('basic_salary')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Medical Allowance</label>
                          <input value="{{$payrolls->medical_allowance}}" name="medical_allowance" type="number" class="form-control @error('medical_allowance') is-invalid @enderror">
                          @error('medical_allowance')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Festival Bonuse</label>
                          <input value="{{$payrolls->festival_bonuse}}" name="festival_bonuse" type="number" class="form-control @error('festival_bonuse') is-invalid @enderror">
                          @error('festival_bonuse')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Income Tax</label>
                          <input value="{{$payrolls->tax}}" name="tax" type="number" class="form-control @error('tax') is-invalid @enderror">
                          @error('tax')
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

