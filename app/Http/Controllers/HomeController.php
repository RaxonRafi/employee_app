<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }

    public function dashboard()
    {
        $total_user = DB::table('users')->count();
        $total_employees = DB::table('employees')->count();

        $employees = DB::table('employees')
        ->join('designations','designations.designation_id','=','employees.emp_designation_id')
        ->join('departments','departments.dept_id','=','employees.emp_dep_id')
        ->select('employees.*','departments.dept_title','designations.designation')
        ->get();

        return view('admin.dashboard',compact('total_user','total_employees','employees'));
    }

}


