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
                  <a href="#" class="btn btn-info">Employee List</a>
                </div>
                <div class="card-body">
                    <form action="{{route('add.employees')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Employee Name</label>
                          <input type="text" name="emp_name" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Email</label>
                          <input name="emp_email" type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Mobile No.</label>
                          <input name="emp_mbl" type="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Department</label>
                          <select id="dept_dropdown" name="emp_dep_id" class="form-control" aria-label="Default select example">
                            <option value="" selected>Select Department</option>
                            @foreach ($departments as $department)
                                <option value="{{$department->dept_id}}">{{$department->dept_title}}</option>
                            @endforeach

                          </select>

                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Designation</label>
                          <select id="designation_dropdown" name="emp_designation_id" class="form-control">
                            <option value="">--No data yet--</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Upload Employee Image</label>
                          <input class="form-control" type="file" name="profile_pic">
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
