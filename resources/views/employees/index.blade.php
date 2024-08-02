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
                  <h5 class="card-title">List of Employees</h5>
                  <a href="{{route('employee.create')}}" class="btn btn-info">Employee Create</a>
                </div>
                <div class="card-body">
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr></thead>
                            <tbody>
                            
                            @foreach ($employees as $employee)
                                <tr>

                                    <td>
                                        <img style="border-radius: 50%; width:50px;height:50px" src="{{asset('images/'.$employee->profile_pic)}}" alt="emp_img">
                                    </td>
                                    <td>{{$employee->emp_name}}</td>
                                    <td>{{$employee->dept_title}}</td>
                                    <td>{{$employee->designation}}</td>
                                    <td>{{$employee->emp_mbl}}</td>
                                    <td>{{$employee->emp_email}}</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
