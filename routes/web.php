<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\backend\BlogBackendController;
use App\Http\Controllers\Frontend\PropertiesController;
use App\Http\Controllers\backend\AboutBackendController;
use App\Http\Controllers\backend\ContactBackendController;
use App\Http\Controllers\backend\DashboardBackendController;
use App\Http\Controllers\backend\PropertiesBackendController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Frontend Routes
Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('about-us', [AboutController::class,'index'])->name('about.us');
Route::get('properties', [PropertiesController::class,'index'])->name('properties');
Route::get('blog', [BlogController::class,'index'])->name('blog');
Route::get('contact', [ContactController::class,'index'])->name('contact');

//Backend routes
Route::group(['prefix' => 'admin','as'=>'admin.'], function (){
    Route::get('login', [LoginController::class,'index'])->name('login');
    Route::get('dashboard', [DashboardBackendController::class,'index'])->name('dashboard');
    Route::get('about-us', [AboutBackendController::class,'index'])->name('about.us');
    Route::get('blog', [BlogBackendController::class,'index'])->name('blog');
    Route::get('properties', [PropertiesBackendController::class,'index'])->name('properties');
    Route::get('contact', [ContactBackendController::class,'index'])->name('contact');
});