<?php

use App\Http\Controllers\SenMailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail',[SenMailController::class,'sendMail']);
