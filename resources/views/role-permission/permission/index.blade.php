@extends('admin.dashboard')
@section('title')
Permissions
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-center">
                      <h4 class="card-title">Permissions</h4>
                      <a href="{{url('permission/create')}}" type="button" class="btn btn-info ">Create permission</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Permission</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission )
                                <tr>
                                    <th scope="row">{{$permission->id}}</th>
                                    <td>{{$permission->name}}</td>
                                    <td>
                                        <a href="{{url('permission/'.$permission->id.'/edit')}}" type="button" class="btn btn-warning">Edit</a>
                                        <a href="{{url('permission/'.$permission->id.'/delete')}}" type="button" class="btn btn-danger">Delete</a>
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


@endsection
