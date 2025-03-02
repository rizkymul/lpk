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
                        <img src="{{ asset('images/report.svg') }}"/>
                        <img src="{{ asset('images/report.svg') }}"/>
                        <img src="{{ asset('images/report.svg') }}"/>
                        <img src="{{ asset('images/report.svg') }}"/>
                    </div>
                </section>
            </header>

            <div class='kontak'>
                <p class='titlePersyaratan'>Kontak</p>

                <img src="{{ asset('images/j1.png') }}" class="imgPersyaratan"/>

                <p class='hubungikami'>Hubungi Kami</p>
                <p class='hubungikamiKet'>Jangan ragu untuk menghubungi kami melalui informasi kontak di bawah ini, atau kirimkan pesan menggunakan formulir.</p>

                <div class='garisHorizontal'></div>

                <div class='containerKontak'>
                    <div class='cK1'>
                        <p class='hubungikami'>Joko Anwar</p>
                        <buttom class="btnwa">WA</buttom>
                    </div>
                    <div>
                        <p class='hubungikami'>Hubungi Kami</p>

                        <div class='labelNama'>
                            <label>Nama</label>
                            <span>(wajib)</span>
                        </div>
                        <input type='text' class='inputNama'/>

                        <div class='labelNama'>
                            <label>Silahkan Tinggalkan Pesan </label>
                            <span>(wajib)</span>
                        </div>
                        <textarea type='text' class='inputNama'></textarea>

                        <button class='btndaftardisini' style="margin-top: 32px">Kirim</button>
                    </div>

                </div>

                <div class='garisHorizontal'></div>

                <p class='hubungikami' style="color: #c8133e; margin-bottom: 80px">Terima Kasih Telah Menghubungi Kami</p>



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
