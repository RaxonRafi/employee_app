<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('role-permission.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role-permission.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                "name"=>[
                    'required',
                    'string',
                    'unique:permissions,name'
                ]
            ]
        );
        Permission::create([
            "name"=>$request->name,
        ]);
        return redirect('permission')->with('status','Permission created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('role-permission.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {

        $request->validate(
            [
                "name"=>[
                    'required',
                    'string',
                    'unique:permissions,name'
                ]
            ]
        );
        $permission->update([
                'name' => $request->name,
            ]);
        return redirect('permission')->with('status','Permission updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
        return redirect('permission')->with('status','permission deleted successfully');

    }

}
