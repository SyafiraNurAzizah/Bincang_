@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <section class="slider-container">
        <div class="slider-images">
            <div class="slider-img">
                <img src="{{ asset('/storage/images/1.png') }}" alt="1">
                <h1>The Ugly Duckling</h1>
                <div class="details">
                    <h2>The Ugly Duckling</h2>
                    <h3>Hans Christian Andersen</h3>
                    <p>Tidak masalah jika kau dilahirkan di kandang bebek, selama kau menetas dari telur angsa.</p>
                </div>
            </div>
            <div class="slider-img">
                <img src="{{ asset('/storage/images/2.png') }}" alt="2">
                <h1>The Art of War</h1>
                <div class="details">
                    <h2>The Art of War</h2>
                    <h3>Sun Tzu</h3>
                    <p>Tampilkan kelemahan ketika kamu sedang kuat, dan kuatlah meski kuat sedang lemah.</p>
                </div>
            </div>
            <div class="slider-img">
                <img src="{{ asset('/storage/images/3.png') }}" alt="3">
                <h1>Rembulan Tenggelam Di Wajahmu</h1>
                <div class="details">
                    <h2>Rembulan Tenggelam Di Wajahmu</h2>
                    <h3>Tere Liye</h3>
                    <p>Tidak ada niat yang baik yang boleh dicapai dengan cara buruk, dan sebaliknya tidak ada niat buruk yang berubah baik meski dilakukan dengan cara-cara baik.</p>
                </div>
            </div>
            <div class="slider-img active">
                <img src="{{ asset('/storage/images/4.png') }}" alt="4">
                <h1>Bumi Manusia</h1>
                <div class="details">
                    <h2>Bumi Manusia</h2>
                    <h3>Pramoedya Ananta Toer</h3>
                    <p>Sekali dalam hidup orang mesti menentukan sikap. Kalau tidak, dia takkan menjadi apa-apa.</p>
                </div>
            </div>
            <div class="slider-img">
                <img src="{{ asset('/storage/images/5.png') }}" alt="5">
                <h1>Perahu Kertas</h1>
                <div class="details">
                    <h2>Perahu Kertas</h2>
                    <h3>Dee Lestari</h3>
                    <p>Bagi saya, hidup terlalu singkat untuk dilewatkan dengan biasa-biasa saja.</p>
                </div>
            </div>
            <div class="slider-img">
                <img src="{{ asset('/storage/images/6.png') }}" alt="6">
                <h1>Sang Pemimpi</h1>
                <div class="details">
                    <h2>Sang Pemimpi</h2>
                    <h3>Andrea Hirata</h3>
                    <p>Yang terpenting, bukanlah seberapa besar mimpi kalian, melainkan seberapa besar upaya kalian mewujudkan mimpi itu.</p>
                </div>
            </div>
            <div class="slider-img">
                <img src="{{ asset('/storage/images/7.png') }}" alt="7">
                <h1>5 cm</h1>
                <div class="details">
                    <h2>5 cm</h2>
                    <h3>Donny Dhirgantoro</h3>
                    <p>Dan Tuhan memelihara ketidakpastian itu pada seluruh umat manusia agar manusia terus belajar, terus bermimpi dan ujung-ujungnya kita akan kembali padanya.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="welcome-message">
        <p >Halo!</p>
        <p class="message">Selamat datang di website <strong class="title"><a class="B">B</a>incang<a class="B">_</a></strong>! Mari berbincang bersama mengenai buku-buku yang memikat dan temukan rekomendasi terbaik untuk Anda.</p>
    </div>
    <hr class="horizontal-line">
    <h2 class="home">Rating Terbaik</h2>

    {{-- <script src="js/jQuery.js"></script>
    <script src="js/home.js"></script> --}}
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".slider-img").on("click", function () {
                $(".slider-img").removeClass("active");
                $(this).addClass("active");
            });
        });


        document.addEventListener("DOMContentLoaded", function () {
            const sliderImages = document.querySelectorAll('.slider-img');
            sliderImages.forEach((img, index) => {
                setTimeout(() => {
                    img.style.opacity = 1;
                    img.style.animation = `slideFromTop 1s ease forwards`;
                }, index * 100); // Delay each slide slightly
            });
        });
    </script>
@endpush