<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\RequestChambaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChambaController;
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
    $chambas = \App\Models\Chamba::all();
    $images = \App\Models\ImagesChamba::all();
    $trabajos = \App\Models\Trabajo::all();
    $user = \App\Models\User::all();
    return view('home', ["chambas" => $chambas, "images" => $images, "trabajos" => $trabajos, "user" => $user]);
})->middleware('auth');

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/{user}/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('{user}/destroy', [ProfileController::class, 'delete'])->name('profile.destroy');
});

Route::group(['prefix' => 'plans', 'middleware' => 'auth'], function () {
    Route::get('/', [PlanController::class, 'index'])->name('plan.index');
});

Route::group(['prefix' => 'chamba', 'middleware' => 'auth'], function () {
    Route::get('/', [ChambaController::class, 'create'])->name('chamba.create');
    Route::post('/store', [ChambaController::class, 'store'])->name('chamba.store');
    Route::get('/{id}', [ChambaController::class, 'show'])->name('chamba.show');
});

Route::group(['prefix' => 'request', 'middleware' => 'auth'], function() {
    Route::post('/store', [RequestChambaController::class, 'store'])->name('request.store');
});
