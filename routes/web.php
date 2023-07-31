<?php

use App\Http\Controllers\OurProjectsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(OurProjectsController::class)->group(function(){
    Route::get('/our_projects', 'OurProjects')->name('our_projects');
    Route::post('/add/project', 'AddProject')->name('add.project');
    Route::get('/delete/project/{id}', 'DeleteProject')->name('delete.project');
    Route::get('/edit_project/{id}', 'EditProject')->name('edit_project');
    Route::get('/update/project', 'UpdateProject')->name('update.project');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
