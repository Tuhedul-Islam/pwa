<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index']);

Route::get('/1', function () {
    return view('pwa.1');
});
Route::get('/2', function () {
    return view('pwa.2');
});
Route::get('/3', function () {
    return view('pwa.3');
});
Route::get('/4', function () {
    return view('pwa.4');
});
Route::get('/5', function () {
    return view('pwa.5');
});
Route::get('/6', function () {
    return view('pwa.6');
});
Route::get('/7', function () {
    return view('pwa.7');
});
Route::get('/8', function () {
    return view('pwa.8');
});
Route::get('/9', function () {
    return view('pwa.9');
});
