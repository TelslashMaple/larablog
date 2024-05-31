<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TopicController;
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
Route::get('', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/topics', [TopicController::class, 'store'])->name('topics.store');

Route::get('/topics/{topic}', [TopicController::class, 'show'])->name('topics.show');

Route::get('/topics/{topic}/edit', [TopicController::class, 'edit'])->name('topics.edit');

Route::put('/topics/{topic}', [TopicController::class, 'update'])->name('topics.update');

Route::delete('/topics/{topic}', [TopicController::class, 'destroy'])->name('topics.destroy');

Route::post('/topics/{topic}/comments', [CommentController::class, 'store'])->name('topics.comment.store');




Route::get('terms', function () {
    return view('dashboard');
});
