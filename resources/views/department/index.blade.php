@extends('admin.dashboard')
@section('title')
Designation
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">List of Departments</h5>
                  <a href="{{route('department.create')}}" class="btn btn-info">Add a Department</a>
                </div>
                <div class="card-body">
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr><th>#</th>
                                <th>Department Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr></thead>
                            <tbody>

                                @foreach ($departments as $department)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$department->dept_title}}</td>
                                        <td>{{$department->dept_desc}}</td>
                                        <td class="d-flex ">
                                            <a href="{{route('department.edit',$department->dept_id)}}" type="button" class="btn btn-outline-warning mr-3">Edit</a>
                                            <a  href="{{route('department.delete',$department->dept_id)}}" type="button" class="btn btn-outline-danger">Delete</a>
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
