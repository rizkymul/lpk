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

            <div class='persyaratan'>
                <p class='titlePersyaratan'>Persyaratan</p>

                <div class='garisHorizontal'></div>

                <div class='cardPersyaratan'>
                    <div class='topPers'>
                        <img src="{{ asset('images/j1.png') }}" class="imgPersyaratan"/>
                        <div style="
                            width: 450px;
                        " >
                            <p class='p1Pers'>MAGANG JEPANG JALUR NEGERI / IM JAPAN</p>

                            <p class='p2Pers'>Pembelajaran khusus untuk mempersiapkan siswa-siswa menghadapi seleksi IM Japan,
                            menerapkan standar sesuai syarat seleksi demi menembus target lulus dengan waktu tersingkat
                            dan memperkecil kemungkinan kegagalan.</p>
                            <p class='p2Pers'>Syarat</p>
                            <ul class='listMisi'>
                                <li>Pria / Wanita Usia 18 - 25 Tahun</li>
                                <li>Tinggi badan Pria Minimal 158 Cm, Wanita 150 Cm</li>
                                <li>Berat badan minimal Pria Minimal 50 Kg, Wanita 40 Kg</li>
                                <li>Lulusan SMA/ Sederajat</li>
                                <li>Mata normal</li>
                                <li>Tidak ada disfungsi organ tubuh</li>
                                <li>Tidak bertato atau bekas tato</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                    <p class='p2Pers' style="margin-top: 40px">Syarat Administrasi</p>
                            <ul class='listMisi'>
                                <li>KTP</li>
                                <li>Kartu Keluarga</li>
                                <li>Kartu Kuning (AK1)</li>
                                <li>Akte Kelahiran</li>
                                <li>Ijazah SD, SLTP, SLTA / SMK dan D3/S1 (ASLI)</li>
                                <li>Raport SLTA / SMK</li>
                                <li>Surat keterangan sehat dari Dokter</li>
                                <li>Surat ijin orang tua/wali/istri</li>
                                <li>Surat pernyataan belum pernah ikut magang di Jepang bermaterai</li>
                                <li>Surat Rekomendasi RT, RW, dan Kelurahan (Bisa dilihat contohnya pada menu Unduh)</li>
                                <li>Surat Keterangan Catatan Kepolisian (SKCK) untuk keterangan melamar pekerjaan</li>
                                <li>Photo keluarga berlatar belakang rumah ukuran 5 R 3 lembar</li>
                                <li>Pas poto 4x6 dan 3x4 @ 5 lembar</li>
                            </ul>
                    </div>
                </div>

                <div class='garisHorizontal'></div>

                <div class='cardPersyaratan'>
                    <div class='topPers'>
                        <img src="{{ asset('images/j2.png') }}" class="imgPersyaratan"/>
                        <div >
                            <p class='p1Pers'>Pemagangan IM Japan (Negeri)</p>
                            <ul class='listMisi'>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                    <p class='p2Pers'>Keuntungan Program IM Japan (Negeri)</p>
                    <ul class='listMisi'>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                    </ul>
                    </div>
                </div>

                <div class='garisHorizontal'></div>

                <div class='cardPersyaratan'>
                    <div class='topPers'>
                        <img src="{{ asset('images/j3.png') }}" class="imgPersyaratan"/>
                        <div >
                            <p class='p1Pers'>Pemagangan IM Japan (Negeri)</p>
                            <ul class='listMisi'>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                    <p class='p2Pers'>Keuntungan Program IM Japan (Negeri)</p>
                    <ul class='listMisi'>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                    </ul>
                    </div>
                </div>

                <div class='garisHorizontal'></div>

                <div class='cardPersyaratan'>
                    <div class='topPers'>
                    <img src="{{ asset('images/j4.png') }}" class="imgPersyaratan"/>
                        <div >
                            <p class='p1Pers'>Pemagangan IM Japan (Negeri)</p>
                            <ul class='listMisi'>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                                <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                    <p class='p2Pers'>Keuntungan Program IM Japan (Negeri)</p>
                    <ul class='listMisi'>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                        <li>Laki - laki / Perempuan umur 18 - 26 tahun</li>
                    </ul>
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
