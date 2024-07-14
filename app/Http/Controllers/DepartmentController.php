<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = DB::table('departments')->get();
        return view('department.index',compact('departments'));
    }
    public function create()
    {
        return view('department.create');
    }
    public function add_department(Request $request)
    {
        $validated = $request->validate([
            'dept_title'=> 'required|string',
            'dept_desc'=> 'required|string|max:255'

        ]);
        DB::table('departments')->insert([
            'dept_title'=> $request->dept_title,
            'dept_desc'=> $request->dept_desc,
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        return back()->with('success','Department Added Successfully!');
    }
    public function edit($id)
    {
        $department = DB::table('departments')->where('dept_id',$id)->first();
        return view('department.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'dept_title' => 'required|string',
            'dept_desc' => 'required|string|max:255',
        ]);

        $department = DB::table('departments')->where('dept_id',$id);
        $department->update($validated);

        return redirect()->route('department.index')->with('success', 'Department updated successfully!');
    }
    public function delete($id)
    {

        $department = DB::table('departments')->where('dept_id',$id);
        $department->delete();

        return redirect()->route('department.index')->with('success', 'Department deleted successfully!');
    }
}
