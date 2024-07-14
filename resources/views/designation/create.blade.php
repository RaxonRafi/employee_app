@extends('admin.dashboard')
@section('title')
Employees
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">Add Employee</h5>
                  <a href="#" class="btn btn-info">Employee List</a>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                          <label class="form-label">Employee Name</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Email</label>
                          <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Mobile No.</label>
                          <input type="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Department</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Employee Designation</label>
                          <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
