@extends('layouts.admin')
@section('title')
Roles
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-info" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                <div class="card">

                    <div class="card-header d-flex justify-content-between align-center">
                      <h4 class="card-title">Users</h4>
                      <a href="{{url('users/create')}}" type="button" class="btn btn-info ">Create Admin</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Users</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user )
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role}}</td>
                                    <td>
                                        <a href="{{route('assign.role',$user->id)}}" type="button" class="btn btn-success">Edit/Assign Role</a>
                                        {{-- <a href="{{url('users/'.$user->id.'/assign-role')}}" type="button" class="btn btn-success">Edit/Assign Role</a> --}}
                                        <a href="{{url('users/'.$user->id.'/edit')}}" type="button" class="btn btn-warning">Edit</a>
                                        <a href="{{url('users/'.$user->id.'/delete')}}" type="button" class="btn btn-danger">Delete</a>
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
