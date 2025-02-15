<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Permission;

Route::get('/',[HomeController::class,'index']);

Auth::routes();

Route::get('/home',[HomeController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::group(['middleware' => ['role:admin']],function(){

    Route::resource('permission',PermissionController::class);
    Route::get('permission/{id}/delete',[PermissionController::class,'destroy']);
    Route::resource('role',RoleController::class);
    Route::get('role/{id}/delete',[RoleController::class,'destroy']);
    Route::get('role/{id}/give-permission',[RoleController::class,'addPermissionToRole']);
    Route::put('role/{id}/give-permission',[RoleController::class,'givePermissionToRole']);
    Route::get('users/{id}/assign-role',[UserController::class,'assignrole'])->name('assign.role');
    Route::put('users/{id}/update-role',[UserController::class,'updaterole'])->name('update.role');
    Route::resource('users',UserController::class);

Route::controller(EmployeesController::class)->group(function(){
    Route::get('/employees/index','index')->name('employee.index');
    Route::get('/employees/create','create')->name('employee.create');
    Route::post('/get/designations','getdesignations')->name('get.designations');
    Route::post('/employees/add','add_employees')->name('add.employees');
    Route::get('/employees/{id}/edit','edit')->name('edit.employees');
    Route::put('/employees/{id}','update')->name('update.employees');
    Route::get('/employees/{id}/soft-delete','softDelete')->name('softDelete.employees');
    Route::get('/employees/{id}/restore','restore')->name('restore.employees');
    Route::get('/employees/{id}/force-delete','destroy')->name('destroy.employees');
});
Route::controller(DesignationController::class)->group(function(){
    Route::get('/designation/index','index')->name('designation.index');
    Route::get('/designation/create','create')->name('designation.create');
    Route::post('/designation/add','add_designation')->name('designation.add');
    Route::get('/designation/{id}/edit','edit')->name('designation.edit');
    Route::put('/designation/{id}','update')->name('designation.update');
    Route::get('/designation/{id}','delete')->name('designation.delete');
});
Route::controller(DepartmentController::class)->group(function(){
    Route::get('/department/index','index')->name('department.index');
    Route::get('/department/create','create')->name('department.create');
    Route::post('/department/add','add_department')->name('department.add');
    Route::get('/department/{id}/edit','edit')->name('department.edit');
    Route::put('/department/{id}','update')->name('department.update');
    Route::get('/department/{id}','delete')->name('department.delete');
});
Route::controller(PayrollController::class)->group(function(){
    Route::get('/payroll/index','index')->name('payroll.index');
    Route::get('/payroll/create','create')->name('payroll.create');
    Route::post('/payroll/add','add_payroll')->name('payroll.add');
    Route::get('/payroll/edit/{id}','edit')->name('payroll.edit');
    Route::put('/payroll/update/{id}','update')->name('payroll.update');

});
Route::controller(AttendanceController::class)->group(function(){
    Route::get('/attendance/index','index')->name('attendance.index');
    Route::post('/attendance','store')->name('attendance.store');
    Route::get('/filter-attendence','filter_attendence')->name('filter.attendence');
    Route::post('generate-pdf','generatePDF')->name('generate.pdf');
});

});
Route::controller(LeaveRequestController::class)->group(function(){
    //Route::get('/leave-request','index')->name('leave.emp.index');
    Route::get('/leave-request','index_admin')->name('leave.admin.index');
    Route::get('/request/leave','index_emp')->name('leave.emp.index');
    Route::get('list/request/leave','my_leaves')->name('list.request.leave');
    Route::post('/request/leave','store')->name('leave.store');
    Route::post('/leave-request/{id}/{status}','updateStatus')->name('leave.update.status');
});

