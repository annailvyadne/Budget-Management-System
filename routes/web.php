<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;

Route::resource('categories', CategoryController::class);
Route::resource('expenses', ExpenseController::class);
