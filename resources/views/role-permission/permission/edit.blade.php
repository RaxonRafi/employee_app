@extends('admin.dashboard')
@section('title')
Permissions
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-center">
                      <h4 class="card-title">Permissions</h4>
                      <a href="{{url('permission')}}" type="button" class="btn btn-danger">back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{url('permission/'.$permission->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <label class="form-label">Edit permission</label>
                              <input value="{{$permission->name}}" type="text" name="name" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
