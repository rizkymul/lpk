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

            <div class='persyaratan'>
                <p class='titlePersyaratan'>Persyaratan</p>

                <div class='garisHorizontal'></div>

                <div class='cardPersyaratan'>
                    <p class="titleProduk">MAGANG JEPANG JALUR NEGERI / IM JAPAN</p>
                    <img src="{{ asset('images/kegiatan1.jpg') }}" class="imgPersyaratan"/>
                    <p class="deskripsiProduk">Pembelajaran khusus untuk mempersiapkan siswa-siswa menghadapi seleksi IM Japan,
                    menerapkan standar sesuai syarat seleksi demi menembus target lulus dengan waktu tersingkat
                    dan memperkecil kemungkinan kegagalan.<p>
                    <div>
                        <span>SYARAT</span>
                        <ol class="centang">
                            <li>Pria / Wanita Usia 18 - 25 Tahun</li>
                            <li>Tinggi badan Pria Minimal 158 Cm, Wanita 150 Cm</li>
                            <li>Berat badan minimal Pria Minimal 50 Kg, Wanita 40 Kg</li>
                            <li>Lulusan SMA/ Sederajat</li>
                            <li>Mata normal</li>
                            <li>Tidak ada disfungsi organ tubuh</li>
                            <li>Tidak bertato atau bekas tato</li>
                        </ol>
                    </div>
                    <div>
                        <span>SYARAT ADMINISTRASI</span>
                        <ol class="titik">
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
                        </ol>
                    </div>
                    <img src="{{ asset('images/IMJAPAN.jpg') }}" class="fotoproduk" />
                    <div>
                        <span>TAHAPAN SELEKSI</span>
                        <ol class="bintang">
                            <li>Tes matematika</li>
                            <li>Kesemaptaan tubuh</li>
                            <li>Tes ketahanan fisik : <br/>
                            Pria Lari 2.6 KM dalam 13 Menit ,Wanita Lari 1,5 KM dalam 10 menit <br/>
                            Pria push up 35 kali, Wanita 20 kali </br>
                            Pria sit up 25 kali, Wanita 15 kali
                            </li>
                            <li>Lulus wawancara</li>
                            <li>Lulus medical check up</li>
                        </ol>
                    </div>
                    <img src="{{ asset('images/lulus2.jpg') }}" class="fotoproduk" />

                </div>

                <div class='garisHorizontal'></div> 

                <div class='cardPersyaratan'>
                    <p class="titleProduk">MAGANG JEPANG SWASTA / SO</p>
                    <img src="{{ asset('images/kegiatan2.jpg') }}" class="imgPersyaratan"/>
                    <p class="deskripsiProduk">Pembelajaran khusus untuk mempersiapkan siswa-siswa menghadapi seleksi magang jalur
                    swasta / S.O , pembelajaran yang fokus pada percakapan sehari hari dan metode wawancara
                    untuk menghadapi proses seleksi. Materi pembelajaran sampai dengan Bahasa Jepang level
                    N4.<p>
                    <div>
                        <span>SYARAT</span>
                        <ol class="centang">
                            <li>Pria / Wanita Usia 18 - 25 Tahun</li>
                            <li>Tinggi badan Pria Minimal 158 Cm, Wanita 150 Cm</li>
                            <li>Berat badan minimal Pria Minimal 50 Kg, Wanita 40 Kg</li>
                            <li>Lulusan SMA/ Sederajat</li>
                            <li>Tidak ada disfungsi organ tubuh</li>
                            <li>Tidak bertato atau bekas tato</li>
                        </ol>
                    </div>
                    <div>
                        <span>SYARAT ADMINISTRASI</span>
                        <ol class="titik">
                            <li>KTP</li>
                            <li>Kartu Keluarga</li>
                            <li>Akte Kelahiran</li>
                            <li>Ijazah SD, SLTP, SLTA / SMK dan D3/S1 (ASLI)</li>
                            <li>Pas poto 4x6 dan 3x4 @ 5 lembar</li>
                        </ol>
                    </div>
                    <img src="{{ asset('images/SWASTA.jpg') }}" class="fotoproduk" />
                    <div>
                        <span>TAHAPAN SELEKSI</span>
                        <ol class="bintang">
                            <li>Tes matematika dan psikotest</li>
                            <li>Kesemaptaan tubuh</li>
                            <li>Tes wawancara</li>
                            <li>Medical check up</li>
                        </ol>
                    </div>
                    <img src="{{ asset('images/lulus1.jpg') }}" class="fotoproduk" />
                </div>

                <div class='garisHorizontal'></div>

                <div class='cardPersyaratan'>
                    <p class="titleProduk">KELAS BAHASA JEPANG N4</p>
                    <img src="{{ asset('images/N4.jpg') }}" class="fotoproduk"/>
                    <p class="deskripsiProduk">Pembelajaran yang menargetkan untuk mencapai Level N4 atau JFT A2 guna siswa untuk
                    melengkapi syarat Tokuteiginou atau visa kerja, kurun waktu pembelajaran dengan target 3
                    bulan, jika belum bisa lulus akan mengulang tanpa biaya tanbahan.<p>
                    <div>
                        <span>SYARAT</span>
                        <ol class="centang">
                            <li>Pria / Wanita Usia 18 - 26 Tahun</li>
                            <li>Tinggi badan Pria Minimal 158 Cm, Wanita 150 Cm</li>
                            <li>Berat badan minimal Pria Minimal 50 Kg, Wanita 40 Kg</li>
                            <li>Lulusan SMA/ Sederajat</li>
                            <li>Tidak ada disfungsi organ tubuh</li>
                            <li>Tidak bertato atau bekas tato</li>
                        </ol>
                    </div>
                    <div>
                        <span>SYARAT ADMINISTRASI</span>
                        <ol class="titik">
                            <li>KTP</li>
                            <li>Kartu Keluarga</li>
                            <li>Akte Kelahiran</li>
                            <li>Ijazah SD, SLTP, SLTA / SMK dan D3/S1 (ASLI)</li>
                            <li>Pas poto 4x6 dan 3x4 @ 5 lembar</li>
                        </ol>
                    </div>
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
    </body>
</html>
