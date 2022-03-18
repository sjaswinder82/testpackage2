<?php

use Illuminate\Support\Facades\Route;

Route::get('/testpackage2', function () {
    return view('testpackage2::welcome');
});