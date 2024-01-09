<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

include __DIR__.'/frontend.php';
include __DIR__.'/backend.php';