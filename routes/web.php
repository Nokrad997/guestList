<?php

use App\Http\Controllers\adminPanelController;
use App\Http\Controllers\loginController;
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

Route::match(['post', 'get'], '/form', 'formController@index')
    ->name('form');

Route::get('/login', [loginController::class, 'check'])
    ->name("admin");

Route::get('/adminPanel', [adminPanelController::class, 'index'])
    ->name("adminPanel");

Route::match(['post','delete'],'/adminPanel/destroy/{id}', [adminPanelController::class, 'destroy'])
    ->name("destroy");
