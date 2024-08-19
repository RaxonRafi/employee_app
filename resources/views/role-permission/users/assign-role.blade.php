@extends('admin.dashboard')
@section('title')
Assign Roles
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-center">
                  <h4 class="card-title">Roles</h4>
                  <a href="{{url('role')}}" type="button" class="btn btn-danger">back</a>
                </div>
                <div class="card-body">
                    <form action="{{route('update.role',$user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <select name="role" class="form-control" aria-label="Default select example">
                                <option  value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option
                                    @if ($user->role === $role->name)
                                        {{'selected'}}
                                    @endif
                                    value="{{$role->name}}">
                                        {{$role->name}}
                                    </option>
                                @endforeach
                              </select>
                              @error('role')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Assign Role</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
