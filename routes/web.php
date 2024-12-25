<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

Route::get('/', function () {
    return view('excel');
});


Route::get('/export-users', [ExcelController::class, 'export'])->name('users.export');
Route::post('/import-users', [ExcelController::class, 'import'])->name('users.import');