<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    public function index(){


        $employees = DB::table('employees')
        ->join('designations','designations.designation_id','=','employees.emp_designation_id')
        ->join('departments','departments.dept_id','=','employees.emp_dep_id')
        ->select('employees.*','departments.dept_title','designations.designation')
        ->get();
        return view('employees.index',compact('employees'));

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

        $validate = $request->validate([
            "emp_designation_id"=>'required',
            "emp_dep_id"=>'required',
            "emp_name"=>'required|string|max:50',
            "emp_mbl"=>'numeric|digits:11',
            "profile_pic"=>'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            "emp_designation_id"=>'required',

        ]);

        $imageName = time().'.'.$request->profile_pic->extension();
        $request->profile_pic->move(public_path('images'), $imageName);

        $employees = DB::table('employees')->insert(
            [
                'emp_designation_id'=> $request->emp_designation_id,
                'emp_dep_id'=> $request->emp_dep_id,
                'emp_name'=> $request->emp_name,
                'emp_mbl'=> $request->emp_mbl,
                'emp_email'=> $request->emp_email,
                'profile_pic'=> $imageName,
                'created_at'=> now(),
                'updated_at'=> now()
            ]
        );

        if($employees){
            DB::table('users')->insert([
                'name'=> $request->emp_name,
                'email'=>$request->emp_email,
                'role'=>'user',
                'password'=> Hash::make('123456789'),
                'profile_pic'=> $imageName,
                'created_at'=> now(),
                'updated_at'=> now()
            ]);
        }

        return back()->with('success','Employee Added Successfully!');

    }

}
