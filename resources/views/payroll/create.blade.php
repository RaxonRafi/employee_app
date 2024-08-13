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
                          <input value="{{ old('basic_salary') }}" name="basic_salary" type="number" class="form-control @error('basic_salary') is-invalid @enderror">
                          @error('basic_salary')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Medical Allowance</label>
                          <input value="{{ old('medical_allowance') }}" name="medical_allowance" type="number" class="form-control @error('medical_allowance') is-invalid @enderror">
                          @error('medical_allowance')
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
                          <input value="{{ old('tax') }}" name="tax" type="number" class="form-control @error('tax') is-invalid @enderror">
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
    $(document).ready(function(){
       $('#dept_dropdown').change(function(){
           var dept_id = $(this).val();
        //ajax setup start
           $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   $.ajax({
       type : 'POST',
       url : "{{route('get.designations')}}",
       data:{dept_id:dept_id},
       success: function(data){

           $('#designation_dropdown').html(data);
       }
   });
     //ajax setup end
       })

    });

</script>
@endsection
