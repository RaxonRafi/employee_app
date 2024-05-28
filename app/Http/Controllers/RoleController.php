<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('role-permission.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role-permission.role.create');
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
                    'unique:roles,name'
                ]
            ]
        );
        Role::create([
            "name"=>$request->name,
        ]);
        return redirect('role')->with('status','role created Successfully!');
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
    public function edit(Role $role)
    {
        return view('role-permission.role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {

        $request->validate(
            [
                "name"=>[
                    'required',
                    'string',
                    'unique:roles,name'
                ]
            ]
        );
        $role->update([
                'name' => $request->name,
            ]);
        return redirect('role')->with('status','role updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $permission = Role::find($id);
        $permission->delete();
        return redirect('role')->with('status','role deleted successfully');

    }
    public function addPermissionToRole($roleId){

        $roles = Role::findOrFail($roleId);
        $permissions = Permission::all();
        $role_permissions = DB::table('role_has_permissions')
                                ->where('role_has_permissions.role_id',$roles->id)
                                ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
                                ->all();

        return view('role-permission.role.addPermissionToRole',compact('roles','permissions','role_permissions'));

    }
    public function givePermissionToRole(Request $request,$roleId){

         $request->validate([
            'permissions'=>'required'
         ]);

        $roles = Role::findOrFail($roleId);
        $roles->syncPermissions($request->permissions);
        return redirect()->back()->with('status','permission added to the role!');


    }
}
