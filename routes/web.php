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





// backOffice 
Route::get('/backoffice',[BackController::class,'index']);

// update
Route::get('/edit-nav/{id}',[BackController::class,'editNav']);
Route::post('/update-nav/{id}', [BackController::class,"updateNav"]);


Route::get('/edit-titre/{id}',[BackController::class,'editTitre']);
Route::post('/update-titre/{id}', [BackController::class,"updateTitre"]);


Route::get('/edit-info/{id}',[BackController::class,'editInfo']);
Route::post('/update-info/{id}', [BackController::class,"updateInfo"]);

Route::get('/edit-about/{id}',[BackController::class,'editAbout']);
Route::post('/update-about/{id}', [BackController::class,"updateAbout"]);

Route::get('/edit-skill/{id}',[BackController::class,'editSkill']);
Route::post('/update-skill/{id}', [BackController::class,"updateSkill"]);

Route::get('/edit-sumary/{id}',[BackController::class,'editSumary']);
Route::post('/update-sumary/{id}', [BackController::class,"updateSumary"]);

Route::get('/edit-education/{id}',[BackController::class,'editEducation']);
Route::post('/update-education/{id}', [BackController::class,"updateEducation"]);

Route::get('/edit-experience/{id}',[BackController::class,'editExperience']);
Route::post('/update-experience/{id}', [BackController::class,"updateExperience"]);


Route::get('/edit-service/{id}',[BackController::class,'editService']);
Route::post('/update-service/{id}', [BackController::class,"updateService"]);

Route::get('/edit-portfolio/{id}',[BackController::class,'editPortfolio']);
Route::post('/update-portfolio/{id}', [BackController::class,"updatePortfolio"]);

Route::get('/edit-mail/{id}',[BackController::class,'editMail']);
Route::post('/update-mail/{id}', [BackController::class,"updateMail"]);

Route::get('/edit-phone/{id}',[BackController::class,'editPhone']);
Route::post('/update-phone/{id}', [BackController::class,"updatePhone"]);


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



