<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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



Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/man',[FrontendController::class,'man'])->name('man');
Route::get('/flooringunit',[FrontendController::class,'flooringunit'])->name('flooringunit');
Route::get('/Prefab_Buildings',[FrontendController::class,'Prefab_Buildings'])->name('Prefab_Buildings');
Route::get('/cladding',[FrontendController::class,'cladding'])->name('cladding');
Route::get('/petrolium-products',[FrontendController::class,'petroliumproducts'])->name('petrolium-products');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');