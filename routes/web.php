<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Dashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('/article', [HomeController::class, 'article']);
Route::get('/post/create', [ArticleController::class, 'create']);
Route::post('/post/create', [ArticleController::class, 'store']);
Route::get('/post/edit/{id}', [ArticleController::class, 'edit']);
Route::get('/article/{slug}', [HomeController::class, 'detail']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/post', Posts::class);
});
