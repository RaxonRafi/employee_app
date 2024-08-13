@extends('admin.dashboard')
@section('title')
Payroll
@endsection
@section('content')
<style>
    .modal-lg {
        max-width: 1200px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">Payroll Management</h5>
                  <div>
                      <a href="{{route('payroll.create')}}" class="btn btn-info">Create payroll</a>
                  </div>
                </div>
                <div class="card-body">
                    <div class="card-content table-responsive">
                       @if (count($payrolls)>0)
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Basic Salary</th>
                                    <th>Medical Allowncess</th>
                                    <th>Festible Allowncess</th>
                                    <th>Tax</th>
                                    <th>Net Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($payrolls as $payroll)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$payroll->emp_name}}</td>
                                        <td>{{$payroll->basic_salary}}</td>
                                        <td>{{$payroll->medical_allowance}}</td>
                                        <td>{{$payroll->festival_bonuse}}</td>
                                        <td>{{$payroll->tax}}</td>
                                        <td>{{($payroll->basic_salary +$payroll->medical_allowance+ $payroll->festival_bonuse)-$payroll->tax}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('payroll.edit',$payroll->emp_id)}}" type="button" class="btn btn-dark">Edit</a>
                                        </td>
                                    </tr>

                            @endforeach

                            </tbody>
                        </table>
                      @else
                      <div class="text-center" style="color: red;font-weight:bold">No data to show!</div>
                      @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
