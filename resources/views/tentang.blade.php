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

            <div class='kontak'>
                <p class='titlePersyaratan'>Tentang</p>

                <p class='hubungikami'>Sejarah</p>
                <p class='hubungikamiKet'>Lembaga Pendidikan Bahasa Jepang Akamaru, didirikan pada Bulan Januari Tahun 2016 oleh Suwarno dan Bayu Rohmanto S,Pd. Sebelum berdirinya LPK Akamaru, Suwarno serta Bayu Rohanto S,Pd. merupakan instruktur/pengajar Bahasa Jepang di LPK Hinomaru Sragen serta merupakan alumni dari LPK Hinomaru Sragen tersebut. Berbekal pengalaman mengajar selama 1 Tahun, Suwarno mengadakan kursus bahasa Jepang regular kepada anak muda di sekitar lingkungan daerahnya. Serta mengikutkan seleksi yang diadakan oleh Kemenaker bekerja sama dengan IM Japan. Mulai saat itu peminat kursus semakin meningkat, sehingga Suwarno mengajak Bayu Rohmanto untuk kerja sama mendirikan LPK yang diberi nama AKAMARU.
                    <br/>
                    <br/>
                LPK Akamaru pertama kali berdiri di Widodo, Ds. Dukuh, Kec. Tangen, Kab. Sragen selama 2 tahun. Dan mulai bulan Okober 2017 LPK Akamaru berpindah tempat Bangoan, RT/RW. 24/08, Ds. Bener, Kec. Ngrampal, Kab. Sragen sampai sekarang. Saat itu berdirinya LPK ini tak lain untuk mempersiapkan dan meningkatkan keahlian sumber daya manusia yang sesuai dengan tuntutan dunia kerja khususnya kerja ke Jepang. Selain itu berdirinya LPK juga sebagai wadah bagi pengembangan ilmu pengetahuan terapan yang praktis dan terpadu yang mengacu pada pengembangan wawasan dan ketrampilan praktisi serta menjadi wadah bagi alumni untuk berwirausaha. Tidak heran bila LPK dapat memenuhi kebutuhan masyarakat akan pengembangan wawasan ilmu pengetahuan.</p>   
                <div class='garisHorizontal'></div>

                <p class='hubungikami'>Kurikulum Dan Metode Pengajaran</p>
                <p class='hubungikamiKet'>Sebagai acuan untuk dapat mengikuti keinginan dan harapan dari IM Japan dan Yayasan SO kami menggunakan modul Minna No Nihon Go dan IM Japan Tekisuto</p>   

                <div class='garisHorizontal'></div>

                <p class='hubungikami'>Perijinan</p>
                <p class='hubungikamiKet'>Ijin DMPTSP Kab. Sragen: 563/623/27/2018</p>   
                <p class='hubungikamiKet'>NIB: 8120012281103</p>   
                <p class='hubungikamiKet'>VIN: 2006331402</p>   

                <div class='garisHorizontal'></div>

                <p class='hubungikami'>Contact Person</p>

                <button class='btnredpanjang' style="margin-bottom: 80px">Hubungi Kami</button>

                

                
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
