<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    public function index()
    {


        $payrolls = DB::table('payroll')
        ->join('employees','employees.emp_id','=','payroll.emp_id')
        ->select('employees.emp_name','payroll.*')
        ->get();
        return view('payroll.index',compact('payrolls'));
    }
    public function create()
    {
        $employees = DB::table('employees')->get();
        return view('payroll.create',compact('employees'));
    }
    public function add_payroll(Request $request)
    {
        $validate = $request->validate([
            "emp_id"=>'required',
            "basic_salary"=>'required|numeric',
            "medical_allowance"=>'required|numeric',
            "house_rent_allowance"=>'required|numeric',
            "conveyance_allowance"=>'required|numeric',
            "festival_bonuse"=>'numeric',
            "tax"=>'numeric',

        ]);
        DB::table('payroll')->insert([
            "emp_id"=>$request->emp_id,
            "basic_salary"=>$request->basic_salary,
            "medical_allowance"=>$request->medical_allowance,
            "festival_bonuse"=>$request->festival_bonuse,
            "house_rent_allowance"=>$request->house_rent_allowance,
            "conveyance_allowance"=>$request->conveyance_allowance,
            "tax"=>$request->tax,
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
        return back()->with('success','Payroll Added Successfully!');

    }
    public function edit($id)
    {

        $payrolls = DB::table('payroll')
        ->join('employees','employees.emp_id','=','payroll.emp_id')
        ->select('employees.emp_name','payroll.*')
        ->where('payroll.emp_id',$id)
        ->first();
        $employees = DB::table('employees')->get();

        return view('payroll.edit', compact('payrolls','employees'));
    }
    public function update(Request $request, $id)
    {
        $payroll = DB::table('payroll')->where('emp_id',$id);
        $validated = $request->validate([
            "emp_id"=>'required',
            "basic_salary"=>'required|numeric',
            "medical_allowance"=>'required|numeric',
            "house_rent_allowance"=>'required|numeric',
            "conveyance_allowance"=>'required|numeric',
            "festival_bonuse"=>'numeric',
            "tax"=>'numeric',

        ]);
        $payroll->update($validated);
        return redirect()->route('payroll.index')->with('success','Payroll updated Successfully!');
    }
}
