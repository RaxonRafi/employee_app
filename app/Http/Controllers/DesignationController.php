<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesignationController extends Controller
{
    public function index()
    {

        $designations= DB::table('designations')
            ->join('departments','departments.dept_id','=','designations.dept_id')
            ->select('designations.*','departments.dept_title')
            ->get();
        return view('designation.index',['designations'=>$designations]);
    }
    public function create()
    {
        $departments  = DB::table('departments')->get();
        return view('designation.create',compact('departments'));
    }
    public function add_designation(Request $request)
    {
        $validated = $request->validate([
            'dept_id'=> 'required|string',
            'designation'=> 'required|string|max:255'

        ]);
        DB::table('designations')->insert([
            'dept_id'=> $request->dept_id,
            'designation'=> $request->designation,
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        return back()->with('success','designation Added Successfully!');
    }
    public function edit($id)
    {
        $designation = DB::table('designations')->where('dept_id',$id)->first();
        return view('designation.edit', compact('designation'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'dept_title' => 'required|string',
            'dept_desc' => 'required|string|max:255',
        ]);

        $designation = DB::table('designations')->where('dept_id',$id);
        $designation->update($validated);

        return redirect()->route('designation.index')->with('success', 'designation updated successfully!');
    }
    public function delete($id)
    {

        $designation = DB::table('designations')->where('dept_id',$id);
        $designation->delete();

        return redirect()->route('designation.index')->with('success', 'Designation deleted successfully!');
    }
}
