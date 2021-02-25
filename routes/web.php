<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\TemplateController;
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

Route::get('/',[TemplateController::class,'index']);





// back
Route::get('/backoffice',[BackController::class,'index']);

// nav
Route::get('/edit-Nav/{id}',[BackController::class,'editNav']);


Route::post('/delete-nav/{id}', [BackController::class,"destroyNav"]);
Route::post('/update-nav/{id}', [BackController::class,"updateNav"]);
