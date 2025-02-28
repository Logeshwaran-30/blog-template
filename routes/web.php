<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return <h1>hello</h1
// });


Route::get('/', function () {
    return view('Welcome');
});

// Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
// Route::get('/all', [BlogController::class, 'allPosts'])->name('posts.all');
// Route::get('/{slug}', [BlogController::class, 'show'])->name('blogs.show');
// Route::get('/category/{category}', [BlogController::class, 'display'])->name('blogs.display');


Route::prefix('blogs')->group(function () {
    Route::get('/featured', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/all', [BlogController::class, 'allPosts'])->name('posts.all');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/category/{category}', [BlogController::class, 'display'])->name('blogs.display');
    Route::get('/tag/{tag}', [BlogController::class, 'showByTag'])->name('blogs.tag');
});









require __DIR__.'/auth.php';
