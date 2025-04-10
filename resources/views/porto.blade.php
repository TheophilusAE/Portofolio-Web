@extends('layouts.app')

@section('content')
    <nav>
        <img src="{{ asset('Asset/Black and White Modern Initial T Technology & Gaming Logo.png') }}" alt="logo" class="logo">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('porto') }}">Portfolio</a></li>
            <li><a href="{{ route('contact') }}">Contacts</a></li>    
        </ul>
        <i class="fa-solid fa-bars"></i>
    </nav>

    <div id="achievement"> 
        <div class="container">
            <h1 class="sub-tittle">My Achievement</h1> 
            <div class="achivement-list">
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Pengurus HIMTI 2025</h2>
                    <p>Menjadi Bagian dari Kepengurusan dari organisasi HIMTI khususnya di Binus@Malang</p> 
                    <a href="{{ asset('Asset/20250120_040433330_iOS.jpg') }}">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Duta Binusian 2410</h2>
                    <p>Saya Menjadi Seorang Duta Binusian pada semester ganjil di tahun 2024</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Duta Binusian 2420</h2>
                    <p>Saya Menjadi Seorang Duta Binusian pada semester ganjil di tahun 2025</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Freshmen Leader B28</h2>
                    <p>Saya berkesempatan membimbing mahasiswa B28 dalam fase adaptasi linkungan perkuliahan</p> 
                    <a href="{{ asset('images/serti.jpg') }}">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Freshmen Partner B28</h2>
                    <p>Saya berkesempatan mendampingi mahasiswa B28 dalam fase adaptasi linkungan perkuliahan dan sistem pembelajaran kampus</p> 
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>

    <div id="portofolio">
        <div class="container">
            <h1 class="sub-tittle">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="{{ asset('Asset/20250120_040433330_iOS.jpg') }}" alt="LDK OSIS">
                    <div class="layer">
                        <h3>Pengurus HIMTI Binus@Malang</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('Asset/WhatsApp Image 2025-04-10 at 18.14.37_37b26014.jpg') }}" alt="Kegiatan Sekolah">
                    <div class="layer">
                        <h3>Duta Binusian 2420</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('Asset/Screenshot_20250410_211456_Instagram.jpg') }}" alt="Class Meeting">
                    <div class="layer">
                        <h3>Duta Binusian 2420</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>
@endsection