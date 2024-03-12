<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertyListingController;
use App\Http\Controllers\PropertyPageController;
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

Route::get('/about', function () {
    return view('about');
});

// Create additional Routes below
Route::get('/properties/create', [PropertyController::class, 'index']);
Route::post('/property', [PropertyController::class, 'store']);

Route::get('/properties', [PropertyListingController::class, 'index']);
Route::get('/properties/{property_id}', [PropertyPageController::class, 'index']);
