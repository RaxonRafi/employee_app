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
                  <h5 class="card-title">List of Designations</h5>
                  <a href="{{route('designation.create')}}" class="btn btn-info">Add a Designation</a>
                </div>
                <div class="card-body">

                    @if (count($designations)>0)
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designations as $designation)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$designation->designation}}</td>
                                            <td>{{$designation->dept_title}}</td>
                                            <td class="d-flex">
                                                <a href="{{route('department.edit',$designation->dept_id)}}" type="button" class="btn btn-outline-warning mr-3">Edit</a>
                                                <a  href="{{route('department.delete',$designation->dept_id)}}" type="button" class="btn btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else

                        <div class="text-center" style="color: red;font-weight:bold">No data to show!</div>

                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
