<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('/',[HomeController::class, "index"])->name("index");
Route::post('/contact_me',[HomeController::class, "contact_me"])->name("contact_me_api");






// BACKEND
Route::get('/admin',[AdminController::class, "admin"])->name("admin");
Route::get('/admin/show_infomation',[AdminController::class, "show_infomation"])->name("show_infomation");
Route::get('/admin/list_experience',[AdminController::class, "list_experience"])->name("list_experience");
Route::get('/admin/list_education',[AdminController::class, "list_education"])->name("list_education");
Route::get('/admin/show_edit_experience{project}',[AdminController::class, "show_edit_experience"])->name("show_edit_experience");
Route::get('/admin/show_edit_education{education}',[AdminController::class, "show_edit_education"])->name("show_edit_education");


