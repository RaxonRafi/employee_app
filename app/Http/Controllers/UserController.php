<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        return view('role-permission.users.index',compact('users'));
    }
    public function assignrole($id)
    {
        $user = User::where('id',$id)->first();
        $roles = Role::all();
        return view('role-permission.users.assign-role',compact('roles','user'));

        // $user->syncRoles(['writer', 'admin']);

    }
    public function updaterole(Request $request,$id)
    {
        $validated = $request->validate([
            'role'=> "required",
        ]);

        $user = User::where('id', $id)->first();  // Retrieve the user as a model instance

        if ($user) {

            $user->update([
                'role' => $request->role
            ]);

            $user->syncRoles($request->role);

            return redirect()->route('users.index')->with('success', 'Role Updated Successfully!');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('role-permission.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if ($user) {

            return back()->with('success','user already exists with this mail!');

        } else {
            if($request->role === "user"){

                DB::table('users')->insert([

                ]);

            }

            DB::table('users')->insert([

            ]);
            
        }
        return $request;
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
