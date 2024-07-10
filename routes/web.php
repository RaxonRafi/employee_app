<?php

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
