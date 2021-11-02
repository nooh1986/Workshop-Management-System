<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CutController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OverTimeController;
use App\Http\Controllers\StatementController;
use App\Http\Controllers\EmployeePaymentController;


Route::get('/', function () {
    return view('auth.login');
})->name('log');

Auth::routes();

Route::group(['middleware' => 'auth:web'],function(){

    Route::get('/dashboard' , [ProfileController::class , 'dashboard'])->name('dashboard');

    Route::resource('company' , CompanyController::class);

    Route::resource('expense' , ExpenseController::class);

    Route::resource('cut' , CutController::class);
    Route::post('end' , [CutController::class , 'end'])->name('end');

    Route::resource('payment' , PaymentController::class);

    Route::resource('employee' , EmployeeController::class);

    Route::resource('employee-payment' , EmployeePaymentController::class);

    Route::resource('over-time' , OverTimeController::class);

    Route::resource('absence' , AbsenceController::class);

    Route::get('monthly' , [StatementController::class , 'monthly'])->name('monthly');
    Route::post('monthly-salaries' , [StatementController::class , 'monthly_salaries'])->name('monthly-salaries');

    Route::get('employee-salaries' , [StatementController::class , 'employee'])->name('employee');
    Route::post('employee-salaries' , [StatementController::class , 'employee_salaries'])->name('employee-salaries');

    Route::get('corporate-account' , [StatementController::class , 'corporate'])->name('corporate');
    Route::post('corporate-account' , [StatementController::class , 'corporate_account'])->name('corporate-account');

    Route::get('profile' , [ProfileController::class , 'profile'])->name('profile');
    Route::post('profile' , [ProfileController::class , 'update'])->name('update');

});    