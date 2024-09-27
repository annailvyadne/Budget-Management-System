<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\SavingController;
use App\Http\Controllers\SinkingFundController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\BudgetController;

// Resource routes for various controllers
Route::resource('categories', CategoryController::class);
Route::resource('expenses', ExpenseController::class);
Route::resource('incomes', IncomeController::class);
Route::resource('savings', SavingController::class);
Route::resource('funds', SinkingFundController::class);
Route::resource('debts', DebtController::class);
Route::resource('budgets', BudgetController::class);
