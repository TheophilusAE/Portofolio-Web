<?php

use Illuminate\Support\Facades\Route;
use App\Http\Contorllers\UserController;

Route::get ('/home',function(){
    return view ('home');
})->name('home');

Route::get ('/about',function(){
    return view ('about');
})->name('about');

Route::get ('/contact',function(){
    return view ('contact');
})->name('contact');

Route::get ('/achievement',function(){
    return view ('achievement');
})->name('achievement');

Route::get ('/porto',function(){
    return view ('porto');
})->name('porto');