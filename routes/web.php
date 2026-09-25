<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/employee/create',[EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/store',[EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{employee}/edit',[EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}/update',[EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');