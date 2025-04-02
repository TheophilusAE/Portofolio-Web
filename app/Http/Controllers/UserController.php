<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function portofolio(){
        return view('porto');
    }

    public function achievement(){
        return view('achievement');
    }

    public function contact(){
        return view('contact');
    }
}
