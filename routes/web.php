<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Permission;

Route::get('/',[HomeController::class,'index']);

Auth::routes();

Route::get('/home',[HomeController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::resource('permission',PermissionController::class);
Route::get('permission/{id}/delete',[PermissionController::class,'destroy']);
Route::resource('role',RoleController::class);
Route::get('role/{id}/delete',[RoleController::class,'destroy']);
Route::get('role/{id}/give-permission',[RoleController::class,'addPermissionToRole']);
Route::put('role/{id}/give-permission',[RoleController::class,'givePermissionToRole']);
Route::resource('users',UserController::class);

Route::controller(EmployeesController::class)->group(function(){
    Route::get('/employees/index','index')->name('employee.index');
    Route::get('/employees/create','create')->name('employee.create');
});
Route::controller(DesignationController::class)->group(function(){
    Route::get('/designation/index','index')->name('designation.index');
    Route::get('/designation/create','create')->name('designation.create');
});
Route::controller(DepartmentController::class)->group(function(){
    Route::get('/department/index','index')->name('department.index');
    Route::get('/department/create','create')->name('department.create');
    Route::post('/department/add','add_department')->name('department.add');
    Route::get('/department/{id}/edit','edit')->name('department.edit');
    Route::put('/department/{id}','update')->name('department.update');
    Route::get('/department/{id}','delete')->name('department.delete');
});

