<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [IndexController::class, 'home']);
Route::get('/about/page', [IndexController::class, 'aboutPage']);
Route::get('/resume/page', [IndexController::class, 'resumePage']);
Route::get('/portfolio/page', [IndexController::class, 'portfolioPage']);
Route::get('/services/page', [IndexController::class, 'servicesPage']);
Route::get('/contact/page', [IndexController::class, 'contactPage']);
Route::get('/service/details',[IndexController::class, 'serviceDetails']);
Route::get('/portfolio/details', [IndexController::class, 'portfolioDetails']);


Auth::routes();

Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login-access', [AdminController::class, 'loginCheck']);

Route::get('/admin/panel', [AdminController::class, 'adminPanel']);
