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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                        <img src="{{ asset('images/waputih.svg') }}" />
                    </a>
                    <a href="https://facebook.com/faravra" target="_blank">
                        <img src="{{ asset('images/facebookputih.svg') }}" />
                    </a>
                    <a href="https://tiktok.com/faravra" target="_blank">
                        <img src="{{ asset('images/tiktokputih.svg') }}" />
                    </a>
                    <a href="https://instagram.com/faravra" target="_blank">
                        <img src="{{ asset('images/igputih.svg') }}" />
                    </a>
                    <a href="https://youtube.com/faravra" target="_blank">
                        <img src="{{ asset('images/youtubeputih.svg') }}" />
                    </a>
                </div>
            </section>
        </header>

        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <div style="margin: 20px;">
            @foreach ($content as $c)
                {{ $c->content1 }} <br>
                {{ $c->content2 }}<br>
                {{ $c->content3 }}<br>
                <a href="{{ route('content.edit', $c->id) }}" class="btnredpanjang">Edit {{ $c->id }}</a>
            @endforeach

        </div>



        <section class="konten1">
            <span class="transparent">
                <img src="{{ asset('images/bgUtama.jpg') }}" class="imgKonten1" />
            </span>

            <div class="listKonten1">

                <p class="p2Konten1">Siap Berkarir di Jepang!</p>
                <button class="btnredpanjang">DAFTAR SEKARANG</button>
            </div>
        </section>

        <!-- <section class="pencarian">
                <div class="formPencarian">
                    <label class='labelPencarian'>Cari</label>
                    <div class='listPencarian'>
                        <input type='text' class='inputPencarian'/>
                        <button class='btnPencarian'>
                            <img src="{{ asset('images/search.svg') }}" />
                        </button>
                    </div>
                </div>
            </section> -->

        <div class='garisHorizontal'></div>

        <section class='visimisi'>
            <div class='listJudulVisimisi'>
                <p class='p1Visimisi'>Visi & Misi</p>
                <div class='garisHorizontalKecil'></div>
            </div>

            <div class='listKontenVisimisi'>
                <img src="{{ asset('images/pic1.webp') }}" class='gambarsementaraVisimisi'></img>
                <div class='containerVisimisi'>
                    <div class='cardVisimisi'>
                        <p class='judulCardVisimisi'>Visi</p>
                        <p class='textCardVisimisi'>Menjadi lembaga Pendidikan yang berkualitas dalam membentuk karakter
                            siswa yang ber-etos kerja tinggi</p>
                    </div>
                    <div class='cardVisimisi'>
                        <p class='judulCardVisimisi'>Misi</p>
                        <p class='textCardVisimisi'>Menyelenggarakan Pendidikan Bahasa jepang yang unggul dan kompetitif
                            dan
                            menciptakan alumni yang mampu melakukan perubahan yang lebih baik</p>
                        <!-- <ul class='listMisi'>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</li>
                            </ul> -->
                    </div>
                </div>
            </div>
        </section>

        <div class='garisHorizontal'></div>

        <section class='galeri'>
            <div class='listJudulVisimisi'>
                <p class='p1Visimisi'>Galeri</p>
                <div class='garisHorizontalKecil'></div>
            </div>

            <p class='p1Galeri'>Keberangkatan dan Kelulusan</p>

            <div class='containerGaleri'>
                <img class='sampleGaleri' src="{{ asset('images/andi.webp') }}" />
                <img class='sampleGaleri' src="{{ asset('images/fian.webp') }}" />
            </div>

            <div class='garisHorizontalKecil'></div>

            <p class='p1Galeri'>Foto Kegiatan</p>

            <div class='containerGaleri'>
                <img class='sampleGaleri' src="{{ asset('images/bersama1.webp') }}" />
                <img class='sampleGaleri' src="{{ asset('images/bersama2.webp') }}" />
            </div>
        </section>

        <div class='garisHorizontal'></div>


        <section class='programTD'>
            <div class='listJudulVisimisi'>
                <p class='p1Visimisi'>Program Belajar Di LPK Yawatan Sragen</p>
                <div class='garisHorizontalKecil'></div>
            </div>

            <div class='listProYD'>
                <div class='cardProYD'>
                    <div class='garisVred'></div>
                    <div class="contentProYD">
                        <p class='p1ProYD'>Magang Jepang Jalur Negeri / IM Japan</p>
                        <p class='p2ProYD'>Pembelajaran khusus untuk mempersiapkan siswa-siswa menghadapi seleksi IM
                            Japan,
                            menerapkan standar sesuai syarat seleksi demi menembus target lulus dengan waktu tersingkat
                            dan memperkecil kemungkinan kegagalan.</p>
                        <p class='selengkapnya'>Persyaratan Selengkapnya</p>
                    </div>
                </div>

                <div class='cardProYD'>
                    <div class='garisVred'></div>
                    <div class="contentProYD">
                        <p class='p1ProYD'>Magang Jepang Jalur Swasta / SO</p>
                        <p class='p2ProYD'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <p class='selengkapnya'>Persyaratan Selengkapnya</p>
                    </div>
                </div>
            </div>

            <div class='listProYD'>
                <div class='cardProYD'>
                    <div class='garisVred'></div>
                    <div class="contentProYD">
                        <p class='p1ProYD'>Program Belajar Bahasa Jepang N4 Untuk Persiapan Tokuteiginou / Visa Kerja
                        </p>
                        <p class='p2ProYD'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <p class='selengkapnya'>Persyaratan Selengkapnya</p>
                    </div>
                </div>

                <!-- <div class='cardProYD'>
                        <div class='garisVred'></div>
                        <div class="contentProYD">
                            <p class='p1ProYD'>Pemagangan IM (Negeri)</p>
                            <p class='p2ProYD'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            <p class='selengkapnya'>Persyaratan Selengkapnya</p>
                        </div>
                    </div>  -->
            </div>
        </section>

        <div class='garisHorizontal'></div>

        <!-- <section class='prosesKe'>
                <div class='listJudulVisimisi'>
                    <p class='p1Visimisi'>Proses Ke</p>
                    <div class='garisHorizontalKecil'></div>
                </div>

                <div class='listProses'>
                    <div class='adapterProses'>
                        <img src="{{ asset('images/report.svg') }}" class='iconProses'/>
                        <p class='p1Proses'>Selection 1</p>
                    </div>

                    <div class='adapterProses'>
                        <img src="{{ asset('images/report.svg') }}" class='iconProses'/>
                        <p class='p1Proses'>Selection 1</p>
                    </div>

                    <div class='adapterProses'>
                        <img src="{{ asset('images/report.svg') }}" class='iconProses'/>
                        <p class='p1Proses'>Selection 1</p>
                    </div>

                    <div class='adapterProses'>
                        <img src="{{ asset('images/report.svg') }}" class='iconProses'/>
                        <p class='p1Proses'>Selection 1</p>
                    </div>
                </div>
            </section> -->

        <div class='garisHorizontal'></div>

        <div style="width: 100%">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9580.797657654426!2d106.82686244598949!3d-6.176687062652464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1737467393618!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy"
                style="border: none; width:100%; height:400px; "referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div class='garisHorizontal'></div>

        <div class='ketengahdong'>
            <button class="btnwa" onclick="window.open('https://www.google.com', '_blank')">
                <img src="{{ asset('images/wa.svg') }}" />
                Obrolan di WhatsApp
            </button>
        </div>


        <div class='garisHorizontal'></div>

        <!-- <section class='listKata'>
                <p>Pemikiran Untuk Bisa Menjalankan </p>
                <p>Pemikiran Untuk Bisa Menjalankan </p>
                <p>Pemikiran Untuk Bisa Menjalankan </p>
            </section> -->

        <footer>
            <div class='cardFot'>
                <p class='p1Fot'>Tentang</p>
                <p class='p2Fot'>Lembaga Pendidikan Bahasa Jepang Akamaru, didirikan pada Bulan Januari Tahun 2016
                    oleh Suwarno dan Bayu Rohmanto S,Pd.</p>
            </div>

            <div class='cardFot'>
                <p class='p1Fot'>Tentang</p>
                <p class='p2Fot'>Kontak Kami</p>
            </div>

            <div class='cardFot'>
                <p class='p1Fot'>Tentang</p>
                <p class='p2Fot'>Jl. Raya Timur - Bangoan RT.24 RW.08, Kec. Ngrampal, Kab. Sragen, Jawa Tengah 57252
                    (Depan Polsek Ngrampal)</p>
            </div>
        </footer>

    </div>
</body>

</html>
