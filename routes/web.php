<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard route
Route::get('/dashboard', function () {
    $user = Auth::user();

    if ($user->user_type === 'admin') {
        return view('dashboard');
    } elseif ($user->user_type === 'user') {
        $users = User::where('user_type', 'user')->get();
        return view('backend-layouts.user-dashboard', ['users' => $users]);
    } else {
        abort(403, 'Unauthorized');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated routes
Route::middleware(['auth'])->group(function () {

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');  // নতুন
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    // category manage 
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('Categotory/Store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/Category/Edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/Category/Udate/{id}', [CategoryController::class, 'update'])->name('category.update');
    // Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    // Blog management
    // Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    // Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    // Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    // Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    // Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    // Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});

require __DIR__.'/auth.php';
