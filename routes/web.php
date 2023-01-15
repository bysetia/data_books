<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Models\Publisher;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
});
Route::get('/about', function (){
    return view('about');
});

Route::group(["prefix" => "/book"], function(){
    Route::get('/all', [BookController::class, 'index']);
    Route::get('/detail/{book}', [BookController::class, 'show']); //detail
    Route::post('/add', [BookController::class, 'store']); //add data
    Route::get('/create', [BookController::class, 'create']); //create data
    Route::delete('/delete/{book}', [BookController::class, 'destroy']); //delete data
    Route::get('/edit/{book}', [BookController::class, 'edit']); //edit
    Route::post('/update/{book}', [BookController::class, 'update']); //update
});

Route::group(["prefix" => "/publisher"], function(){
    Route::get('/all', [PublisherController::class, 'index']);
    Route::get('/detail/{publisher}', [PublisherController::class, 'show']);
});
