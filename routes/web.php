<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard');

Route::post('/item', [ItemController::class, 'insert'])->name('item.store');
Route::delete('/item/{id}', [ItemController::class, 'delete'])->name('item.destroy');
