<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UsersController;


Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/catalogo', [SiteController::class, 'catalogo'])->name('site.catalogo');
Route::get('/encomendar', [SiteController::class, 'encomendar'])->name('site.encomendar');
Route::get('/contactos', [SiteController::class, 'contactos'])->name('site.contactos');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    Route::get('/stock', [StockController::class, 'index'])->name('stock');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/utilizadores', [UsersController::class, 'index'])->name('users.index');
    Route::get('/admin/utilizadores/novo', [UsersController::class, 'new'])->name('users.new');
    Route::post('/admin/utilizadores', [UsersController::class, 'store'])->name('users.store');
    Route::get('/admin/utilizadores/editar', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/admin/utilizadores', [UsersController::class, 'update'])->name('users.update');
});

require __DIR__.'/auth.php';
