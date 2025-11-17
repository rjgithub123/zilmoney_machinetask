<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;


Route::resource('employees', EmployeesController::class);

//Route::resource('employees', EmployeesController::class)->names('employees');
