<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Publisher;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Dashboard\DashboardBookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::group(["prefix" => "/book"], function () {
    Route::get('/all', [BookController::class, 'index']);
    Route::get('/detail/{book}', [BookController::class, 'show']); //detail
    Route::post('/add', [BookController::class, 'store']); //add data
    Route::get('/create', [BookController::class, 'create']); //create data
    Route::delete('/delete/{book}', [BookController::class, 'destroy']); //delete data
    Route::get('/edit/{book}', [BookController::class, 'edit']); //edit
    Route::post('/update/{book}', [BookController::class, 'update']); //update

});

Route::group(["prefix" => "/publisher"], function () {
    Route::get('/all', [PublisherController::class, 'index']);
    Route::get('/detail/{publisher}', [PublisherController::class, 'show']);
});

Route::group(["prefix" => "/login"], function () {
    Route::get('/', [LoginController::class, 'index']);
    Route::post('/authenticate', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::group(["prefix" => "/register"], function () {
    Route::get('/', [RegisterController::class, 'index']);
    Route::post('/create', [RegisterController::class, 'create']);
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::group(["prefix" => "/dashboard"], function () {
    // Route::get('/home', function(){
    //     return view('dashboard.index');
    // });
    Route::group(["prefix" => "/book"], function () {
        Route::get('/all', [DashboardBookController::class, 'index'])->name('dashboard')->middleware('auth');
        Route::get('/detail/{book}', [DashboardBookController::class, 'show'])->name('dashboard')->middleware('auth');
        Route::get('/create', [DashboardBookController::class, 'create'])->name('dashboard')->middleware('auth');
        Route::get('/add', [DashboardBookController::class, 'store'])->middleware('auth');
        Route::get('/delete/{book}', [DashboardBookController::class, 'destroy'])->middleware('auth');
        Route::get('/edit/{book}', [DashboardBookController::class, 'edit'])->name('dashboard')->middleware('auth');
        Route::get('/update/{book}', [DashboardBookController::class, 'update'])->middleware('auth');
    });
});
