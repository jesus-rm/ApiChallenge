<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ApiPostController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ApiVisitorController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/visitors', [VisitorController::class, 'index'])->name('visitors');
    Route::get('/visitors/{visitor}', [VisitorController::class, 'show'])->name('visitor.show');
    Route::delete('/visitors/{visitor}', [VisitorController::class, 'destroy'])->name('visitor.destroy');

    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');

    Route::get('/apipost', [ApiPostController::class, 'index'])->name('apipost');
    Route::get('/apipost/sinc', [ApiPostController::class, 'sinc'])->name('apipost.sinc');

    Route::get('/apivisitor', [ApiVisitorController::class, 'index'])->name('apivisitor');
    Route::get('/apivisitor/sinc', [ApiVisitorController::class, 'sinc'])->name('apivisitor.sinc');
});

/* Route::get('/visitors', [VisitorController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']); */
