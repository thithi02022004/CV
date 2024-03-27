<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/admin/infomation',[AdminController::class, "infomation"])->name("infomation_api");
Route::get('/admin/experience',[AdminController::class, "experience"])->name("experience_api");
Route::get('/admin/education',[AdminController::class, "education"])->name("education_api");
Route::post('/admin/edit_infomation',[AdminController::class, "edit_infomation"])->name("edit_infomation_api");
Route::get('/admin/edit_experience/{project}',[AdminController::class, "edit_experience"])->name("edit_experience_api");
Route::post('/admin/update_experience{project}',[AdminController::class, "update_experience"])->name("update_experience_api");
Route::get('/admin/edit_education/{education}',[AdminController::class, "edit_education"])->name("edit_education_api");
Route::post('/admin/update_education{education}',[AdminController::class, "update_education"])->name("update_education_api");
Route::post('/admin/contact_me',[AdminController::class, "contact_me"])->name("contact_me_api");
