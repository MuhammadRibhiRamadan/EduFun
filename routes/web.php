<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\EduFunController;

Route::get('/', [EduFunController::class, 'home'])->name('home');
Route::get('/category/{id}', [EduFunController::class, 'category'])->name('category');
Route::get('/writers', [EduFunController::class, 'writers'])->name('writers');
Route::get('/writers/{id}', [EduFunController::class, 'showWriter'])->name('writer.show');
Route::get('/about', [EduFunController::class, 'about'])->name('about');
Route::get('/article/{id}', [EduFunController::class, 'show'])->name('article.show');
Route::get('/popular', [EduFunController::class, 'popular'])->name('popular');
