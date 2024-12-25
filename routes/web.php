<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Worked";
});

Route::get('/home', function () {
    return "Home";
});
