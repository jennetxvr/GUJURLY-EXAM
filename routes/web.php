<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $users = User::all();
    return view('home', compact('users'));
})->name('home');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');
