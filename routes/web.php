<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Menu;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $users = User::all();
    return view('home', compact('users'));
})->name('home');

Route::get('/menu', function () {
    $menu = Menu::all();
    return view('menu', compact('menu'));
})->name('menu');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// Route::get('/menu', [MenuController::class, 'index'])
    // ->name('menu');
