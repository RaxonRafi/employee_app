@extends('layouts.admin')
@section('title', 'Edit Employee')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edit Employee</h5>
                </div>
                <div class="card-body">

                    <form action="{{ route('update.employees', $employee->emp_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Employee Name</label>
                            <input value="{{ $employee->emp_name }}" type="text" name="emp_name" class="form-control @error('emp_name') is-invalid @enderror">
                            @error('emp_name')
                              <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Employee Email</label>
                            <input value="{{ $employee->emp_email }}" name="emp_email" type="email" class="form-control @error('emp_email') is-invalid @enderror">
                            @error('emp_email')
                              <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Mobile No.</label>
                            <input value="{{ $employee->emp_mbl }}" name="emp_mbl" type="number" class="form-control @error('emp_mbl') is-invalid @enderror">
                            @error('emp_mbl')
                              <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Employee Department</label>
                            <select id="dept_dropdown" name="emp_dep_id" class="form-control @error('emp_dep_id') is-invalid @enderror" aria-label="Default select example">
                              <option value="" selected>Select Department</option>
                              @foreach ($departments as $department)
                                  <option
                                  @if ($department->dept_id == $employee->emp_dep_id)
                                    {{"selected"}}
                                  @endif
                                  value="{{$department->dept_id}}">
                                  {{$department->dept_title}}
                                </option>
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
                          <div class="mb-3">
                            <label class="form-label">Employee Image</label><br>
                            <img width="100" height="100" src="{{asset('images/'.$employee->profile_pic)}}" alt="" srcset="">

                          </div>
                        <button type="submit" class="btn btn-primary">Update</button>
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
        function fetchDesignations(dept_id, selectedDesignation) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{ route('get.designations') }}",
                data: { dept_id: dept_id },
                success: function(data){
                    $('#designation_dropdown').html(data);

                    // Set the selected designation
                    if (selectedDesignation) {
                        $('#designation_dropdown').val(selectedDesignation);
                    }
                }
            });
        }

        // Trigger the change event if there is a pre-selected department
        var selectedDept = $('#dept_dropdown').val();
        var selectedDesignation = "{{ $employee->emp_designation_id }}";
        if (selectedDept) {
            fetchDesignations(selectedDept, selectedDesignation);
        }

        // Fetch designations on department change
        $('#dept_dropdown').change(function(){
            var dept_id = $(this).val();
            fetchDesignations(dept_id, null);  // null because we only want to set the designation initially
        });
    });
</script>
@endsection
