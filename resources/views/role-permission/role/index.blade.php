@extends('layouts.app')

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
                      <h4 class="card-title">Role</h4>
                      <a href="{{url('role/create')}}" type="button" class="btn btn-info ">Create role</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">role</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role )
                                <tr>
                                    <th scope="row">{{$role->id}}</th>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        <a href="{{url('role/'.$role->id.'/give-permission')}}" type="button" class="btn btn-success">Edit/Add Role Permissions</a>
                                        <a href="{{url('role/'.$role->id.'/edit')}}" type="button" class="btn btn-warning">Edit</a>
                                        <a href="{{url('role/'.$role->id.'/delete')}}" type="button" class="btn btn-danger">Delete</a>
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
