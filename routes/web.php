<?php

use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('admin.admin.add');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// ----------------------------------------------------------------

Route::get('/web', [HomeController::class, 'index'])->name('web.index');



Route::get('/web/blog', [PostController::class, 'index'])->name('web.blog');
Route::get('/web/blog/{slug}', [PostController::class, 'show'])->name('web.blog.show');
Route::get('/web/blog/category/{id}', [CategoryController::class, 'show'])->name('web.blog.category');



Route::get('/web/contact', [ContactController::class, 'index'])->name('web.contact.index');
Route::post('/web/contact', [ContactController::class, 'store'])->name('web.contact.store');
