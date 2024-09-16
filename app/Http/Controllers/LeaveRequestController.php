<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeaveRequestController extends Controller
{

    public function index_emp()
    {
        $user_email = DB::table('users')
        ->select('users.email')
        ->where('id',Auth::user()->id)
        ->get();
        $emp_id = DB::table('employees')
        ->select('emp_id')
        ->where('emp_email',$user_email[0]->email)
        ->get();

         return view('leaves.employee-view.index',compact('emp_id'));

    }
    public function my_leaves(){
    $emp_email= DB::table('users')
     ->select('users.email')
     ->where('id',auth()->id())
     ->get();
     $emp_id= DB::table('employees')
     ->select('employees.emp_id')
     ->where('emp_email',$emp_email[0]->email)
     ->get();
     $leaveRequests = DB::table('leave_requests')
     ->where('emp_id',$emp_id[0]->emp_id)
     ->get();
     return view('leaves.employee-view.myleaves',compact('leaveRequests'));
    }
    public function index_admin()
    {
        $leaveRequests = DB::table('leave_requests')
        ->join('employees','employees.emp_id','=','leave_requests.emp_id')
        ->select('employees.emp_name','leave_requests.*')
        ->get();
         return view('leaves.admin-view.index',compact('leaveRequests'));

    }
    public function store(Request $request)
    {
        $request->validate([
            'emp_id' => 'required',
            'start_date' => 'required|date|after_or_equal:today|before_or_equal:end_date',
            'end_date' => 'required|date|after:start_date',
            'reason' => 'required|string',
        ]);

        DB::table('leave_requests')->insert([
            'emp_id' => $request->emp_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Leave request submitted.');
    }

    public function updateStatus($id, $status)
    {
        $validStatuses = ['approved', 'declined'];
        if (in_array($status, $validStatuses)) {
            DB::table('leave_requests')->where('id', $id)->update(['status' => $status]);

            return redirect()->back()->with('success', 'Leave request status updated.');
        }

        return redirect()->back()->with('error', 'Invalid status.');
    }
}
