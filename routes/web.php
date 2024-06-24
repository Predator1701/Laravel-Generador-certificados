<?php

use App\Http\Controllers\CampoController;
use App\Http\Controllers\ProjectController;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group( function(){
    
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/dashboard', [ProjectController::class,'index'])->name('dashboard');
    Route::get('/project/{project}', [ProjectController::class, 'show'])->name('project.show');
    Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/project/{project}',[ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');


    Route::get('/campos/create/{id}', [CampoController::class, 'create'])->name('campos.create');
    Route::post('/campos/{id}', [CampoController::class, 'store'])->name('campos.store');
    Route::get('/campos/{id}/edit', [CampoController::class, 'edit'])->name('campos.edit');
    Route::put('/campos/{id}', [CampoController::class, 'update'])->name('campos.update');
    Route::delete('/campos/{id}', [CampoController::class, 'destroy'])->name('campos.destroy');

});



require __DIR__.'/auth.php';
