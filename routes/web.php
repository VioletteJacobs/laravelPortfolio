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

// update
Route::get('/edit-nav/{id}',[BackController::class,'editNav']);
Route::post('/update-nav/{id}', [BackController::class,"updateNav"]);

// delete
Route::post('/delete-nav/{id}', [BackController::class,"destroyNav"]);
Route::post('/delete-titre/{id}', [BackController::class,"destroyTitre"]);
Route::post('/delete-info/{id}', [BackController::class,"destroyInfo"]);
Route::post('/delete-aboutp2/{id}', [BackController::class,"destroyAboutP2"]);
Route::post('/delete-skill/{id}', [BackController::class,"destroySkill"]);
Route::post('/delete-sumary/{id}', [BackController::class,"destroySumary"]);
Route::post('/delete-education/{id}', [BackController::class,"destroyEducation"]);
Route::post('/delete-experience/{id}', [BackController::class,"destroyExperience"]);
Route::post('/delete-service/{id}', [BackController::class,"destroyService"]);
Route::post('/delete-portfolio/{id}', [BackController::class,"destroyPortfolio"]);
Route::post('/delete-mail/{id}', [BackController::class,"destroyMail"]);
Route::post('/delete-phone/{id}', [BackController::class,"destroyPhone"]);



