<?php

use App\Facade\SyncTagsKeystoArrays;
use App\Http\Controllers\CarController;
use App\Models\Car as Carro;
use Illuminate\Http\Request;
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
    return redirect('dashboard');
});

Route::middleware(['auth'])->group(function (){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/findcar', [CarController::class, 'finderCar'])->name('findcar');
    Route::get('/catchcar', [CarController::class, 'catchCar'])->name('catchcar');
    Route::post('/catchCarBy', [CarController::class, 'catchCarBy'])->name('catchCarBy');
    Route::delete('/deletecar/{id}', [CarController::class, 'deleteCar'])->name('deletecar');
});




require __DIR__.'/auth.php';
