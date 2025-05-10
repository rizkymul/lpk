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
        {{-- @vite(['resources/css/app.css' , 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
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

            <div class='kontak'>
                <p class='titlePersyaratan'>Struktur</p>

                <p class='hubungikami'>Struktur Organisasi LPK Akamaru Sragen</p>
                <div class='garisHorizontal'></div>

                <div class='strukturLead'>
                    <img src="{{ asset('images/o1.png') }}" class="imgPersyaratan"/>
                    <div class='sText'>
                        <p class='p1Struktur'>Joko Anwar</p>
                        <p class='p2Struktur'>Direktur/Pemimpin LPK Akamaru</p>
                    </div>
                </div>

                <div class='garisHorizontal'></div>

                <div class='listStruktur'>

                    <div class='cardStruktur' >
                        <div class='strukturLead'>
                            <img src="{{ asset('images/o2.png') }}" class="imgPersyaratan"/>
                            <div class='sText'>
                                <p class='p1Struktur'>Joko Anwar</p>
                                <p class='p2Struktur'>Direktur/Pemimpin LPK Akamaru</p>
                            </div>
                        </div>

                        <div class='strukturLead'>
                            <img src="{{ asset('images/o3.png') }}" class="imgPersyaratan"/>
                            <div class='sText'>
                                <p class='p1Struktur'>Joko Anwar</p>
                                <p class='p2Struktur'>Direktur/Pemimpin LPK Akamaru</p>
                            </div>
                        </div>
                    </div>

                    <div class='cardStruktur' >
                        <div class='strukturLead'>
                            <img src="{{ asset('images/o1.png') }}" class="imgPersyaratan"/>
                            <div class='sText'>
                                <p class='p1Struktur'>Joko Anwar</p>
                                <p class='p2Struktur'>Direktur/Pemimpin LPK Akamaru</p>
                            </div>
                        </div>

                        <div class='strukturLead'>
                        <img src="{{ asset('images/o2.png') }}" class="imgPersyaratan"/>
                            <div class='sText'>
                                <p class='p1Struktur'>Joko Anwar</p>
                                <p class='p2Struktur'>Direktur/Pemimpin LPK Akamaru</p>
                            </div>
                        </div>
                    </div>

                    <!-- <div class='cardStruktur'  style="margin-bottom: 80px">
                        <div class='strukturLead'>
                            <div class='sampleGaleri'></div>
                            <div class='sText'>
                                <p class='p1Struktur'>Joko Anwar</p>
                                <p class='p2Struktur'>Direktur/Pemimpin LPK Akamaru</p>
                            </div>
                        </div>

                        <div class='strukturLead'>
                            <div class='sampleGaleri'></div>
                            <div class='sText'>
                                <p class='p1Struktur'>Joko Anwar</p>
                                <p class='p2Struktur'>Direktur/Pemimpin LPK Akamaru</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <footer>
                <div class='cardFot'>
                    <p class='p1Fot'>Tentang</p>
                    <p class='p2Fot'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>

                <div class='cardFot'>
                    <p class='p1Fot'>Tentang</p>
                    <p class='p2Fot'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>

                <div class='cardFot'>
                    <p class='p1Fot'>Tentang</p>
                    <p class='p2Fot'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                </div>
            </footer>

        </div>
    </body>
</html>
