@extends('admin.dashboard')
@section('title')
Payroll
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">Add Payroll</h5>
                  <a href="{{route('payroll.index')}}" class="btn btn-info">Payroll List</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="{{route('payroll.add')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Employee Name</label>
                          <select class="form-control" name="emp_id" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            @foreach ($employees as $employee)
                                <option value="{{$employee->emp_id}}">{{$employee->emp_name}}</option>
                            @endforeach
                          </select>
                          @error('emp_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Basic Salary</label>
                          <input id="basic_salary" value="{{ old('basic_salary') }}" name="basic_salary" type="number" class="form-control @error('basic_salary') is-invalid @enderror">
                          @error('basic_salary')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Medical Allowance</label>
                          <input id="medical_allowance" readonly value="{{ old('medical_allowance') }}" name="medical_allowance" type="number" class="form-control @error('medical_allowance') is-invalid @enderror">
                          @error('medical_allowance')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Conveyance Allowance</label>
                          <input readonly id="conveyance_allowance" value="{{ old('conveyance_allowance') }}" name="conveyance_allowance" type="number" class="form-control @error('conveyance_allowance') is-invalid @enderror">
                          @error('conveyance_allowance')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">House rent Allowance</label>
                          <input readonly id="house_rent_allowance" value="{{ old('house_rent_allowance') }}" name="house_rent_allowance" type="number" class="form-control @error('house_rent_allowance') is-invalid @enderror">
                          @error('house_rent_allowance')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Festival Bonuse</label>
                          <input value="{{ old('festival_bonuse') }}" name="festival_bonuse" type="number" class="form-control @error('festival_bonuse') is-invalid @enderror">
                          @error('festival_bonuse')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Income Tax</label>
                          <input readonly  id="tax" value="{{ old('tax') }}" name="tax" type="number" class="form-control @error('tax') is-invalid @enderror">
                          @error('tax')
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

@section('scripts')
<script>

$(document).ready(function () {
    $('#basic_salary').on('input', function () {
        const basic_salary = parseFloat($(this).val());
        const yearly_salary = basic_salary*12;
        const medical_allowance = (basic_salary*0.10).toFixed(2);
        $('#medical_allowance').val(medical_allowance);
        const conveyance_allowance = (basic_salary*0.10).toFixed(2);
        $('#conveyance_allowance').val(conveyance_allowance);
        const house_rent_allowance = (basic_salary*0.50).toFixed(2);
        $('#house_rent_allowance').val(house_rent_allowance);

        if(yearly_salary>350000)
        {
            const tax = basic_salary*0.10
            $('#tax').val(tax);

        }else {
            $('#tax').val(0)
        }


    });
});

</script>
@endsection
