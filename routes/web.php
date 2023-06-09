<?php

use App\Http\Controllers\Admin\AnimalController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VisitController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class,'index'])->name('index');

// Route::get('/animal/{id}/{visit_id?}', [AnimalController::class,'show'])->name('animal.show');

// Route::post('/visit/{animal_id}', [VisitController::class,'store'])->name('visit.store');



