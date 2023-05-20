<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('assignment/index');
})->name('assignment.index');

Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class)->except('index');

Route::get('tasks/create/{project}', [ TaskController::class, 'create'])->name('tasks.create');
Route::post('tasks/store/{project}', [ TaskController::class, 'store'])->name('tasks.store');

require __DIR__.'/auth.php';
