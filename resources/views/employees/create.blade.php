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
                  <h5 class="card-title">Add Employee</h5>
                  <a href="{{route('employee.index')}}" class="btn btn-info">Employee List</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-info" role="alert">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="{{route('add.employees')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Employee Name</label>
                          <input value="{{ old('emp_name') }}" type="text" name="emp_name" class="form-control @error('emp_name') is-invalid @enderror">
                          @error('emp_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Email</label>
                          <input value="{{ old('emp_email') }}" name="emp_email" type="email" class="form-control @error('emp_email') is-invalid @enderror">
                          @error('emp_email')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Mobile No.</label>
                          <input value="{{ old('emp_mbl') }}" name="emp_mbl" type="number" class="form-control @error('emp_mbl') is-invalid @enderror">
                          @error('emp_mbl')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Department</label>
                          <select id="dept_dropdown" name="emp_dep_id" class="form-control @error('emp_dep_id') is-invalid @enderror" aria-label="Default select example">
                            <option value="" selected>Select Department</option>
                            @foreach ($departments as $department)
                                <option value="{{$department->dept_id}}">{{$department->dept_title}}</option>
                            @endforeach

                          </select>
                          @error('emp_dep_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                         @enderror

                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Designation</label>
                          <select id="designation_dropdown" name="emp_designation_id" class="form-control @error('emp_designation_id') is-invalid @enderror">
                            <option value="">--No data yet--</option>
                          </select>
                          @error('emp_designation_id')
                          <div class="invalid-feedback">{{ $message }}</div>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Upload Employee Image</label>
                          <input class="form-control @error('profile_pic') is-invalid @enderror" type="file" name="profile_pic">
                          @error('profile_pic')
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
