<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'Name' => 'required|string|max:255',
        'Email' => 'required|email|max:255',
        'Message' => 'required|string',
    ]);

    Contact::create([
        'name' => $request->Name,
        'email' => $request->Email,
        'message' => $request->Message,
    ]);

    return back()->with('success', 'Thank you for your message!');
});

Route::get('/porto', function () {
    return view('porto');
})->name('porto');