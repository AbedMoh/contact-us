<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/',[ContactController::class,'index']); 
Route::get('contact',[ContactController::class,'contact']);
Route::post('store',[ContactController::class,'store']);
Route::post('update/{id}', [contactcontroller::class ,'update']);

Route::post('update', [contactcontroller::class ,'updateData']);

Route::post('delete/{id}', [contactcontroller::class ,'delete']);
