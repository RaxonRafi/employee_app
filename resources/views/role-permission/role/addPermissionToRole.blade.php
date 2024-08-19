@extends('admin.dashboard')
@section('title')
 Add Permission To Roles
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
                      <h4 class="card-title">Role: {{$roles->name}}</h4>
                      <a href="{{url('role/create')}}" type="button" class="btn btn-info ">Create role</a>
                    </div>
                    <div class="card-body">
                        <form action="{{url('role/'.$roles->id.'/give-permission')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                @foreach ($permissions as $permission )
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input
                                            name="permissions[]"
                                            class="form-check-input"
                                            type="checkbox"
                                            value="{{$permission->name}}"
                                            {{in_array($permission->id,$role_permissions)?'checked':''}}
                                            id="defaultCheck1">
                                            <label class="form-check-label" for="defaultCheck1">
                                           {{$permission->name}}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Add Permission</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection
