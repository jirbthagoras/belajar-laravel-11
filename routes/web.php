<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/validation/error", function(){
    throw new \App\Exceptions\ValidationError();
});
