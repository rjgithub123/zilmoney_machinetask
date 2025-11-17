<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;


Route::resource('/', EmployeesController::class)->name('employees');

//Route::get('employees', [EmployeesController::class, 'create'])->name('employees.create');
