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
                    <h2>Kepengurusan OSIS</h2>
                    <p>Menjadi pengurus Sekbid yang ada di OSIS</p> 
                    <a href="{{ asset('images/serti.jpg') }}">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Olimpiade Sains Nasional OSN </h2>
                    <p>Saya mewakili sekolah dalam OSN 2022-2023 Bidang Biologi dan berhasil lolos ke tingkat Kabupaten</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Cipta Puisi</h2>
                    <p>Saya menjuarai lomba cipta puisi menempati juara ke-2</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Kepengurusan OSIS</h2>
                    <p>Menjadi pengurus Sekbid yang ada di OSIS</p> 
                    <a href="{{ asset('images/serti.jpg') }}">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Olimpiade Sains Nasional OSN </h2>
                    <p>Saya mewakili sekolah dalam OSN 2022-2023 Bidang Biologi dan berhasil lolos ke tingkat Kabupaten</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Cipta Puisi</h2>
                    <p>Saya menjuarai lomba cipta puisi menempati juara ke-2</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Kepengurusan OSIS</h2>
                    <p>Menjadi pengurus Sekbid yang ada di OSIS</p> 
                    <a href="{{ asset('images/serti.jpg') }}">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Olimpiade Sains Nasional OSN </h2>
                    <p>Saya mewakili sekolah dalam OSN 2022-2023 Bidang Biologi dan berhasil lolos ke tingkat Kabupaten</p>
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
                    <img src="{{ asset('images/Ldk.jpg') }}" alt="LDK OSIS">
                    <div class="layer">
                        <h3>LDK OSIS</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/fotbar.jpg') }}" alt="Kegiatan Sekolah">
                    <div class="layer">
                        <h3>Kegiatan Sekolah</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/Classmeet.jpg') }}" alt="Class Meeting">
                    <div class="layer">
                        <h3>Class Meeting</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/Ldk.jpg') }}" alt="LDK OSIS">
                    <div class="layer">
                        <h3>LDK OSIS</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/fotbar.jpg') }}" alt="Kegiatan Sekolah">
                    <div class="layer">
                        <h3>Kegiatan Sekolah</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/Classmeet.jpg') }}" alt="Class Meeting">
                    <div class="layer">
                        <h3>Class Meeting</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/Ldk.jpg') }}" alt="LDK OSIS">
                    <div class="layer">
                        <h3>LDK OSIS</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/fotbar.jpg') }}" alt="Kegiatan Sekolah">
                    <div class="layer">
                        <h3>Kegiatan Sekolah</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>
    <div class="copyright">
            <p>Copyright © Theophilus. 2025</p>
    </div>
@endsection