<?php

use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('Login');
});

Route::post('/login', [Controller::class, 'Login']);

Route::get('/register', function () {
    return view('Register');
});

Route::post('/register', [Controller::class, 'Register']);