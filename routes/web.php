<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;


Route::resource('/', EmployeesController::class)->names('employees');

//Route::resource('employees', EmployeesController::class)->names('employees');
