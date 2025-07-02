<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;

// Default route
Route::get('/', function () {
    return view('welcome');
});

// Route CRUD beneficiaries
Route::resource('beneficiaries', BeneficiaryController::class);
