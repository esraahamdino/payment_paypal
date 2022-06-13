<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PayPalController;

 

Route::get('/', function () {
    return view('welcome');
});

Route::get('go-payment', [PayPalController::class, 'goPayment'])->name('payment.go');

Route::get('payment',[PayPalController::class, 'payment'])->name('payment');
Route::get('cancel',[PayPalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');