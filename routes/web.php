<?php

use App\Http\Controllers\AuthorizedDealerController;
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

Route::get('/',[AuthorizedDealerController::class,'index'])->name('index');
Route::get('{id}/edit',[AuthorizedDealerController::class,'edit'])->name('edit');
Route::get('/create',[AuthorizedDealerController::class,'create'])->name('create');
Route::get('{id}/delete',[AuthorizedDealerController::class,'destroy'])->name('delete');
Route::get('/search',[AuthorizedDealerController::class,'search'])->name('search');
Route::post('/store',[AuthorizedDealerController::class,'store'])->name('store');
Route::post('/update',[AuthorizedDealerController::class,'update'])->name('update');
