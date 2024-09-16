@extends('layouts.admin')
@section('title')
Create Users
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-center">
                      <h4 class="card-title">Create Users</h4>
                      <a href="{{url('users')}}" type="button" class="btn btn-danger">back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{url('users')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Name</label>
                              <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Email</label>
                              <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Role</label>
                                <select name="role" class="form-control" aria-label="Default select example">
                                    <option value="">Select Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->name}}">
                                            {{$role->name}}
                                        </option>
                                    @endforeach
                                  </select>
                                  @error('role')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Password</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
