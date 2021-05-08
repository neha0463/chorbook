<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
    return view('base');
});
Route::get('/newly',[BookController::class,"newly"])->name('newly');
Route::get('/eatu',[BookController::class,"eatu"])->name('eatu');
Route::get('/deal',[BookController::class,"deal"])->name('deal');
Route::get('/popular',[BookController::class,"popular"])->name('popular');
Route::get('/young',[BookController::class,"young"])->name('young');
Route::get('/rate',[BookController::class,"rate"])->name('rate');
Route::get('/lock',[BookController::class,"create"])->name('lock');
Route::post('/lock',[BookController::class,"store"])->name('store');
Route::get('/stor',[BookController::class,"stor"])->name('stor');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
