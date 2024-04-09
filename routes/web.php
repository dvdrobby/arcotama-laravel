<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\SocialController;


//route authentication
Route::get('/auth/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::post('/auth/logout', [LoginController::class, 'logout']);

//route main
Route::get('/', [LandingController::class, 'index']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/blog/{post:slug}', [BlogController::class, 'detail']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/overview', [LandingController::class, 'overview']);
Route::get('/clients', [LandingController::class, 'clients']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//route create slug
Route::get('/dashboard/posts/createSlug', [DashboardPostController::class, 'createSlug'])->middleware('auth');

//route post
Route::resource('/dashboard/posts/', DashboardPostController::class)->except(['index', 'show', 'edit', 'destroy'])->middleware('auth');
Route::delete('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/posts/{post:slug}/edit', [DashboardPostController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'update'])->middleware('auth');

//route contact
Route::get('/dashboard/contact/{contact}/edit' , [ContactController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/contact/{contact}' , [ContactController::class, 'update'])->middleware('auth');

//route social media link
Route::get('/dashboard/social/{social}/edit' , [SocialController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/social/{social}' , [SocialController::class, 'update'])->middleware('auth');

//route maps link
Route::get('/dashboard/map/{maps}/edit' , [MapsController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/map/{maps}' , [MapsController::class, 'update'])->middleware('auth');

//route maps link
Route::get('/dashboard/about/{about}/edit' , [AboutController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/about/{about}' , [AboutController::class, 'update'])->middleware('auth');

//route client
Route::get('/dashboard/client/{client}/edit' , [ClientController::class, 'edit'])->middleware('auth');
Route::get('/dashboard/client/create' , [ClientController::class, 'create'])->middleware('auth');
Route::post('/dashboard/client/' , [ClientController::class, 'store'])->middleware('auth');
Route::delete('/dashboard/client/{client}' , [ClientController::class, 'destroy'])->middleware('auth');
Route::put('/dashboard/client/{client}' , [ClientController::class, 'update'])->middleware('auth');

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'guest'], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });