<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware(['prevent.authenticated.access'])->group(function () {
    // Routes that should not be accessible if any guard is authenticated
    Route::get('/login', function () {
        return view('welcome');
    });

    Route::get('/', function () {
        return view('welcome');
    });
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::middleware(['auth:user'])->group(function () {

Route::get('/user/home', [\App\Http\Controllers\UserController::class, 'showHome'])->name('home');
Route::post('/user/transactions', [\App\Http\Controllers\UserController::class, 'store'])->name('user.transactions.store');
});
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/users', [\App\Http\Controllers\AdminController::class, 'showUsers'])->name('admin.users');
    Route::get('/admin/users/search', [\App\Http\Controllers\AdminController::class, 'searchUsers'])->name('admin.users.search');
    Route::get('/admin/users/create', [\App\Http\Controllers\AdminController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [\App\Http\Controllers\AdminController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/admins/create', [\App\Http\Controllers\AdminController::class, 'createAdmin'])->name('admin.admins.create');
    Route::post('/admin/admins', [\App\Http\Controllers\AdminController::class, 'storeAdmin'])->name('admin.admins.store');
    Route::get('/admin/admins', [\App\Http\Controllers\AdminController::class, 'showAdmins'])->name('admin.admins');
    Route::get('/admin/admins/search', [\App\Http\Controllers\AdminController::class, 'searchAdmins'])->name('admin.admins.search');
    Route::delete('/admin/users/{user}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/users/{user}', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin.users.show');
    Route::post('/admin/transactions/{id}', [\App\Http\Controllers\AdminController::class, 'storeAdminTransaction'])->name('admin.transactions.store');
    Route::delete('/transactions/{transaction}', [\App\Http\Controllers\AdminController::class, 'destroyTransaction'])->name('transactions.destroy');

});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
