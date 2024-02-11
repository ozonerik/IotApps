<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\IotledsController;
use App\Http\Controllers\IotledsUpdate;

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
/* 
Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', IotledsController::class);
Route::get('ledupdate/{serialno?}/{status?}', [IotledsUpdate::class, 'ledupdate'])->name('ledupdate');
Route::get('led2update', [IotledsUpdate::class, 'led2update'])->name('led2update');