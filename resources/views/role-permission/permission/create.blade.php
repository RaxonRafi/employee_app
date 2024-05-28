@extends('layouts.app')

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
                        <form action="{{url('permission')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Add permission</label>
                              <input type="text" name="name" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection
