@extends('layouts.admin')
@section('title')
Employees
@endsection
@section('content')
<style>
    .modal-lg {
        max-width: 1200px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">List of Employees</h5>
                  <div>
                      <a href="{{route('employee.create')}}" class="btn btn-info">Employee Create</a>
                      <a href="{{route('employee.create')}}" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        <span class="material-symbols-outlined">
                            delete
                        </span>
                      </a>
                      <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deleted Employees</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card">
                                      <div class="card-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                    <th>Mobile</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($employees as $employee)
                                                @if ($employee->deleted_at != null)
                                                    <tr>
                                                        <td>
                                                            <img style="border-radius: 50%; width:50px;height:50px" src="{{asset('images/'.$employee->profile_pic)}}" alt="emp_img">
                                                        </td>
                                                        <td>{{$employee->emp_name}}</td>
                                                        <td>{{$employee->dept_title}}</td>
                                                        <td>{{$employee->designation}}</td>
                                                        <td>{{$employee->emp_mbl}}</td>
                                                        <td>{{$employee->emp_email}}</td>
                                                        <td class="d-flex">

                                                            <a href="{{route('restore.employees',$employee->emp_id)}}" type="button" class="btn btn-success mr-3">Restore</a>
                                                            <a href="{{route('destroy.employees',$employee->emp_id)}}" type="button" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>

                                      </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                </div>
                            </div>
                            </div>
                        </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="card-content table-responsive">
                       @if (count($employees)>0)
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
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($employees as $employee)
                                @if ($employee->deleted_at == null)
                                    <tr>
                                        <td>
                                            <img style="border-radius: 50%; width:50px;height:50px" src="{{asset('images/'.$employee->profile_pic)}}" alt="emp_img">
                                        </td>
                                        <td>{{$employee->emp_name}}</td>
                                        <td>{{$employee->dept_title}}</td>
                                        <td>{{$employee->designation}}</td>
                                        <td>{{$employee->emp_mbl}}</td>
                                        <td>{{$employee->emp_email}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('softDelete.employees',$employee->emp_id)}}" type="button" class="btn btn-warning mr-3">Move to trash</a>
                                            <a href="{{route('edit.employees',$employee->emp_id)}}" type="button" class="btn btn-dark">Edit</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                      @else
                      <div class="text-center" style="color: red;font-weight:bold">No data to show!</div>
                      @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
