@extends('admin.dashboard')
@section('title')
Designation
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                  <h5 class="card-title">List of Employees</h5>
                  <a href="{{route('employee.create')}}" class="btn btn-info">Employee Create</a>
                </div>
                <div class="card-body">
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr><th>ID</th>
                                <th>Name</th>
                                <th>Salary</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr></thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bob Williams</td>
                                    <td>$23,566</td>
                                    <td>USA</td>
                                    <td>demo@gmail.com</td>
                                    <td>Sales</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mike Tyson</td>
                                    <td>$10,200</td>
                                    <td>Canada</td>
                                    <td>demo@gmail.com</td>
                                    <td>Sales</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tim Sebastian</td>
                                    <td>$32,190</td>
                                    <td>Netherlands</td>
                                    <td>demo@gmail.com</td>
                                    <td>Sales</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Morris</td>
                                    <td>$31,123</td>
                                    <td>Korea, South</td>
                                    <td>demo@gmail.com</td>
                                    <td>Sales</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Minerva Hooper</td>
                                    <td>$23,789</td>
                                    <td>South Africa</td>
                                    <td>demo@gmail.com</td>
                                    <td>Sales</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Hulk Hogan</td>
                                    <td>$43,120</td>
                                    <td>Netherlands</td>
                                    <td>demo@gmail.com</td>
                                    <td>Sales</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Angelina Jolie </td>
                                    <td>$12,140</td>
                                    <td>Australia</td>
                                    <td>demo@gmail.com</td>
                                    <td>Sales</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-info">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
