<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Permission;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('permission',PermissionController::class);
Route::get('permission/{id}/delete',[PermissionController::class,'destroy']);
Route::resource('role',RoleController::class);
Route::get('role/{id}/give-permission',[RoleController::class,'addPermissionToRole']);
Route::put('role/{id}/give-permission',[RoleController::class,'givePermissionToRole']);
