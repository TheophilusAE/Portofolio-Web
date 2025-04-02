@extends('layouts.app')

@section('content')
    <nav>
        <img src="{{ asset('images/logotf-removebg-preview.png') }}" alt="logo" class="logo">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('achievement') }}">Achievement</a></li>
            <li><a href="{{ route('porto') }}">Portfolio</a></li>
            <li><a href="{{ route('contact') }}">Contacts</a></li>    
        </ul>
        <i class="fa-solid fa-bars"></i>
    </nav>

    <div id="header">
        <div class="container">
            <div class="header">
                <p>Undergraduate Computer Science</p>
                <h1>Hi, I'm <span>Theophilus Alexander Elvan</span> <br>from Indonesia</h1>
            </div>
        </div>
    </div>
@endsection