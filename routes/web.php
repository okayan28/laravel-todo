<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('task', [TaskController::class, 'index']);
Route::get('task/add',[TaskController::class, 'add']);
Route::post('task/add', [TaskController::class, 'create']);
Route::get('task/edit', [TaskController::class, 'edit']);
Route::post('task/edit', [TaskController::class, 'update']);
Route::get('task/del', [TaskController::class, 'del']);
Route::post('task/del', [TaskController::class, 'remove']);
Route::post('task', [TaskController::class, 'search']);