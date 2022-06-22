<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectionController;
use App\Http\Controllers\SuperAdmin\ClientController;
use App\Http\Controllers\SuperAdmin\ProjectsController;
use App\Http\Controllers\SuperAdmin\DepartmentsController;
use App\Http\Controllers\SuperAdmin\SubDepartmentController;
use App\Http\Controllers\SuperAdmin\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/' , [RedirectionController::class , 'redirection'])->name('redirection');

    Route::get('create-client' , [ClientController::class , 'index'])->name('create-client');
    Route::post('store-client' , [ClientController::class , 'store'])->name('store-client');
    Route::get('client-list' , [ClientController::class , 'create'])->name('client-list');

    Route::get('create-project' , [ProjectsController::class , 'index'])->name('create-project');
    Route::get('project-list' , [ProjectsController::class , 'create'])->name('project-list');

    Route::get('department-create' , [DepartmentsController::class , 'index'])->name('department-create');
    Route::get('department-list' , [DepartmentsController::class , 'create'])->name('department-list');
    Route::get('delete-department-list/{id}' , [DepartmentsController::class , 'delete'])->name('delete-department-list');
    Route::get('edit-department-list/{id}' , [DepartmentsController::class , 'edit'])->name('edit-department-list');
    Route::post('update-department-list/{id}' , [DepartmentsController::class , 'update'])->name('update-department-list');
    Route::post('department-store' , [DepartmentsController::class , 'store'])->name('department-store');

    Route::get('create-sub-department' , [SubDepartmentController::class , 'index'])->name('create-sub-department');
    Route::post('store-sub-department' , [SubDepartmentController::class , 'store'])->name('store-sub-department');
    Route::get('delete-sub-department/{id}' , [SubDepartmentController::class , 'delete'])->name('delete-sub-department');
    Route::get('edit-sub-department/{id}' , [SubDepartmentController::class , 'edit'])->name('edit-sub-department');
    Route::post('update-sub-department/{id}' , [SubDepartmentController::class , 'update'])->name('update-sub-department');
    Route::get('sub-department-list' , [SubDepartmentController::class , 'create'])->name('sub-department-list');

    Route::get('create-user' , [UsersController::class , 'index'])->name('create-user');
    Route::post('store-user' , [UsersController::class , 'store'])->name('store-user');
    Route::get('delete-user/{id}' , [UsersController::class , 'userDelete'])->name('delete-user');
    Route::get('edit-user/{id}' , [UsersController::class , 'edit'])->name('edit-user');
    Route::post('update-user/{id}' , [UsersController::class , 'update'])->name('update-user');
    Route::get('user-list' , [UsersController::class , 'create'])->name('user-list');


    Route::get('klaviyo' , [UsersController::class , 'v_klaviyo'])->name('klaviyo');
    Route::post('createKlaviyo' , [UsersController::class , 'createKlaviyo'])->name('createKlaviyo');



