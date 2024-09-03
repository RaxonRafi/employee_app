<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{

    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('attendance.index', compact('employees'));
    }

    public function store(Request $request)
    {


        $request->validate([
            'attendance.*.emp_id' => 'required',
            'date' => 'required|date|before_or_equal:today',
            'attendance.*.present' => 'nullable|boolean',
        ]);

        $date = $request->date;

        foreach ($request->attendance as $attendanceData) {

            DB::table('attendence')->updateOrInsert(
                [
                    'emp_id' => $attendanceData['emp_id'],
                    'date' =>$date,
                ],
                [
                    'present' => $attendanceData['present'] ?? 0
                ]
            );
        }

        return redirect()->back()->with('success', 'Attendance has been recorded.');
    }
}
