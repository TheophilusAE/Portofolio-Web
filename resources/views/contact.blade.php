@extends('layouts.app')

@section('content')
    <nav>
        <img src="{{ asset('Asset\Black and White Modern Initial T Technology & Gaming Logo.png') }}" alt="logo" class="logo">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('porto') }}">Portfolio</a></li>
            <li><a href="{{ route('contact') }}">Contacts</a></li>    
        </ul>
        <i class="fa-solid fa-bars"></i>
    </nav>

    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-tittle">Contact Me</h1>
                    <p><i class="fa-regular fa-envelope"></i>Theophilus.a.e.k@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>+628113602527</p>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/thoouuuuuu?igsh=ajlnNml4M3c0MjAx"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/628113602527"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/in/theophilus-alexander-elvan-94a6a8291?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://line.me/ti/p/DYWhuU5y8I"><i class="fa-brands fa-line"></i></a>
                    </div>
                    <a href="{{ asset('Asset/CV Theophilus Alexander Elvan.pdf') }}" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form>
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © Theophilus. 2025</p>
        </div>
    </div>
@endsection