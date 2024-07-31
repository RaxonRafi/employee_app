<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{
    public function index(){


        return view('employees.index');

    }
    public function create(){
        $departments = DB::table('departments')->get();
        return view('employees.create',compact('departments'));

    }
    public function getdesignations(Request $request){
        $designations=DB::table('designations')->where('dept_id',$request->dept_id)->get();

        if ($designations->count() == 0){
            $str_to_send=" <option value=''>--No subcategory yet--</option>";
        }
        else{
            $str_to_send =  "<option value=''>--Choose One--</option>";
        }
        foreach($designations as $designation){
          $str_to_send.= "<option value='$designation->designation_id'>$designation->designation</option>";

        }
        echo $str_to_send;
    }
    public function add_employees(Request $request){

        return $request;

    }
}
