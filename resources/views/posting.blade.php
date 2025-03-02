<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @vite(['resources/css/app.css' , 'resources/js/app.js'])
    </head>

    <body>
        <div class='main'>
            <header class='topbar'>
                <section class='logoTopbar'>
                    <p class='p1Topbar'>LPK Yawata Sragen</p>
                    <p class='p2Topbar'>Siap Berkarir di Jepang!</p>
                </section>

                <section class='menuTopbar'>
                    <div class='listmenuTopbar'>
                        <a href="{{ route('beranda') }}">Beranda</a>
                        <a href="{{ route('posting') }}">Posting</a>
                        <a href="{{ route('persyaratan') }}">Persyaratan</a>
                        <a href="{{ route('kontak') }}">Kontak</a>
                        <a href="{{ route('struktur') }}">Struktur</a>
                        <a href="{{ route('tentang') }}">Tentang</a>
                    </div>
                    <!-- <div class='appearMobile menu'>
                        <p>Menu</p>
                        <img src={report} />
                    </div> -->
                    <div class='listiconTopbar'>
                        <a href="https://instagram.com/faravra" target="_blank">
                        <img src="{{ asset('images/waputih.svg') }}"/>
                        </a>
                        <a href="https://facebook.com/faravra" target="_blank">
                        <img src="{{ asset('images/facebookputih.svg') }}"/>
                        </a>
                        <a href="https://tiktok.com/faravra" target="_blank">
                        <img src="{{ asset('images/tiktokputih.svg') }}"/>
                        </a>
                        <a href="https://instagram.com/faravra" target="_blank">
                        <img src="{{ asset('images/igputih.svg') }}"/>
                        </a>
                        <a href="https://youtube.com/faravra" target="_blank">
                        <img src="{{ asset('images/youtubeputih.svg') }}"/>
                        </a>
                    </div>
                </section>
            </header>

            <div class='post'>
                <p class='p1Post'>Pemikiran Untuk Memberikan Sebuah Kesempatan</p>
                <img src="{{ asset('images/pic1.webp') }}" class='gambarsementaraVisimisi'></img>
                <p class='p2Post'>Ketika kamu menetapkan pikiran untuk mencapai sesuatu, kamu harus memberi kesempatan dirimu sendiri untuk menyelesaikannya.</p>
                <button class='btndaftardisini'>Bisa Daftar Disini</button>
                <div class='listAuthor'>
                    <div class='adapterAuthor'>
                        <img src="{{ asset('images/report.svg') }}"/>
                        <p>akamarusragen</p>
                    </div>
                    <div class='adapterAuthor'>
                        <img src="{{ asset('images/report.svg') }}"/>
                        <p>akamarusragen</p>
                    </div>
                    <div class='adapterAuthor'>
                        <img src="{{ asset('images/report.svg') }}"/>
                        <p>akamarusragen</p>
                    </div>
                    <div class='adapterAuthor'>
                        <img src="{{ asset('images/report.svg') }}"/>
                        <p>akamarusragen</p>
                    </div>
                </div>
            </div>

            <footer>
                <div class='cardFot'>
                    <p class='p1Fot'>Tentang</p>
                    <p class='p2Fot'>Lembaga Pendidikan Bahasa Jepang Akamaru, didirikan pada Bulan Januari Tahun 2016 oleh Suwarno dan Bayu Rohmanto S,Pd.</p>
                </div>

                <div class='cardFot'>
                    <p class='p1Fot'>Tentang</p>
                    <p class='p2Fot'>Kontak Kami</p>
                </div>

                <div class='cardFot'>
                    <p class='p1Fot'>Tentang</p>
                    <p class='p2Fot'>Jl. Raya Timur - Bangoan RT.24 RW.08, Kec. Ngrampal, Kab. Sragen, Jawa Tengah 57252 (Depan Polsek Ngrampal)</p>
                </div>
            </footer>

        </div>
    </body>
</html>
