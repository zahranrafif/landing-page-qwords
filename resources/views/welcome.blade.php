<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Qwords Redesign</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <img src="https://www.qwords.com/wp-content/themes/qwords/assets/images/icons/logo-qw-light.webp"
                    width="100" height="40" class="d-inline-block align-top" alt="qwords">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-5 mb-lg-0 small fw-bolder fs-5 ">
                        <li class="nav-item"><a class="nav-link" href="index.html">Cloud Hosting</a></li>
                        <li class="nav-item"><a class="nav-link" href="resume.html">Server</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.html">Domain</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Email Suite</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Internet Access</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-warning rounded text-white fw-bolder">Login</button>
            </div>
        </nav>

        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Cloud Hosting</span>
                            </h2>
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Untuk</span>
                            </h2>
                            <h2 class="display-5 fw-bolder text-warning mb-4"><span
                                    class="text-gradient d-inline">Kesuksesan
                                    Websitemu!</span>
                            </h2>
                            <p class="text-muted mb-5">Qwords menawarkan layanan Cloud Hosting yang Cepat, Aman,
                                dan Dukungan
                                24 jam untuk memenuhi kebutuhan hosting Anda. Tersertifikasi ISO 27001 dengan Data
                                Center Tier 3.</p>
                            <h1 class="display-8 fw-bolder mb-5"><span
                                    class="text-gradient d-inline ">#QwordsYourSuccess</span>
                            </h1>
                            <button type="button"
                                class="btn btn-warning btn-lg text-white rounded fw-bolder text-">Pesan
                                Sekarang</button>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Card --}}
        <section class="bg-white py-5">
            <div class="container px-5">
                <div class="text-center ">
                    <h2 class="display-6 fw-bolder"><span class="text-black d-inline">Cloud Hosting Indonesia Diskon
                            Hingga 50%</span>
                    </h2>
                    <p class="text-black mb-5">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk
                        website anda
                    </p>
                    <section class="bg-grey shadow py-5">
                        <div class="container px-5">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h6 class="card-title text-start">Value Cloud Hosting
                                            </h6>
                                            <h5 class="card-title fw-bolder text-start">VCH1</h5>
                                            <h5 class="card-title text-start text-decoration-line-through">Rp 24.500
                                            </h5>
                                            <h3 class="card-title fw-bolder text-warning text-start">Rp 14.500
                                            </h3>
                                            <p class="card-text text-start">This is a wider card with supporting text
                                                below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer w-100">
                                            <button class="w-100 fw-bolder rounded text-white bg-warning">Pesan
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">

                                        <div class="card-body">
                                            <h6 class="card-title text-start">Unlimited Hosting

                                            </h6>
                                            <h5 class="card-title fw-bolder text-start">Signature</h5>
                                            <h5 class="card-title text-start text-decoration-line-through">Rp 109.000

                                            </h5>
                                            <h3 class="card-title fw-bolder text-warning text-start">Rp 89.900


                                            </h3>
                                            <p class="card-text text-start">This is a wider card with supporting text
                                                below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer w-100">
                                            <button class="w-100 fw-bolder rounded text-white bg-warning">Pesan
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">

                                        <div class="card-body">
                                            <h6 class="card-title text-start">High Performance

                                            </h6>
                                            <h5 class="card-title fw-bolder text-start">HPCH Bisnis 1
                                            </h5>
                                            <h5 class="card-title text-start text-decoration-line-through">Rp 90.000
                                            </h5>
                                            <h3 class="card-title fw-bolder text-warning text-start">Rp 79.000
                                            </h3>
                                            <p class="card-text text-start">This is a wider card with supporting text
                                                below as a
                                                natural
                                                lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer w-100">
                                            <button class="w-100 fw-bolder rounded text-white bg-warning">Pesan
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        {{-- End Card --}}

        {{-- Cari domain --}}
        <section class="bg-warning py-5">
            <div class="container px-5">
                <div class="text-center ">
                    <h2 class="display-6 fw-bolder"><span class="text-white d-inline">Cari Nama DomainMu</span>
                    </h2>
                    <p class="text-white mb-5">Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs
                        Anda.<br>
                        Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.</p>
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Cari nama domain Anda"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="button" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Cari domain --}}

        {{-- Layanan Card --}}
        <section class="bg-white py-5">
            <div class="container px-5">
                <div class="text-center ">
                    <h2 class="display-6 fw-bolder"><span class="text-black d-inline">Lihat Juga Layanan Kami Yang
                            Lain
                        </span>
                    </h2>
                    <p class="text-black mb-5">Optimalkan performa website bisnis Anda dengan berbagai layanan
                        berkualitas dari Qwords
                    </p>
                    <section class="bg-grey shadow py-5 rounded">
                        <div class="container px-5">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <a class="navbar-brand fw-bolder fs-5" href="#">
                                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/ssl.webp"
                                                    width="30" height="30" class="d-inline-block align-top"
                                                    alt="">
                                                SSL
                                            </a>
                                            <p class="card-text">Jadikan website Anda lebih terpercaya dan disukai oleh
                                                search engine dengan menggunakan SSL Certificate.</p>
                                            <h5 class="card-title">Mulai Dari</h5>
                                            <h4 class="card-title fw-bolder text-warning ">Rp.
                                                112.000/tahun
                                            </h4>
                                        </div>
                                        <div class="card-footer w-100">
                                            <button class="w-100 fw-bolder rounded text-white bg-warning">Pesan
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">

                                        <div class="card-body">
                                            <a class="navbar-brand fw-bolder fs-5" href="#">
                                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/dbstack.webp"
                                                    width="30" height="30" class="d-inline-block align-top"
                                                    alt="">
                                                Dedicated Server
                                            </a>
                                            <p class="card-text">Nikmati kelola Dedicated Server sendiri dengan
                                                akses
                                                remote dari seluruh dunia tanpa batas dan gangguan.
                                            </p>
                                            <h5 class="card-title">Mulai Dari</h5>
                                            <h4 class="card-title fw-bolder text-warning ">Rp.
                                                499.000/bulan
                                            </h4>
                                        </div>
                                        <div class="card-footer">
                                            <button class="w-100 fw-bolder rounded text-white bg-warning">Pesan
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">

                                        <div class="card-body">
                                            <a class="navbar-brand fw-bolder fs-5" href="#">
                                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/smallicons/disk.webp"
                                                    width="30" height="30" class="d-inline-block align-top"
                                                    alt="">
                                                Colocation Server
                                            </a>
                                            <p class="card-text">Akses cepat dari seluruh dunia dengan fasilitas 24x7
                                                full monitoring dengan cooling system terbaik serta fire extinguisher.
                                            </p>
                                            <h5 class="card-title">Mulai Dari</h5>
                                            <h4 class="card-title fw-bolder text-warning ">Rp.
                                                500.000/bulan
                                            </h4>
                                        </div>
                                        <div class="card-footer">
                                            <button class="w-100 fw-bolder rounded text-white bg-warning">Pesan
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        {{-- End Card --}}
    </main>

    {{-- Komitmen Qwords Card --}}
    <section class="bg-grey py-5">
        <div class="container px-5">
            <div class="text-center ">
                <h2 class="display-6 fw-bolder"><span class="text-black d-inline">Komitmen Qwords
                    </span>
                </h2>
                <p class="text-black mb-5">Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords
                </p>
                <section class="bg-warning shadow py-5 rounded">
                    <div class="container px-5">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/call.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">Layanan 24/7
                                        </h4>
                                        <p class="card-text">Tim Technical Support dan Customer Service Qwords siap
                                            membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live
                                            chat, Call Center, dan Support Ticket.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/book.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">Panduan Manual Lengkap
                                        </h4>
                                        <p class="card-text">Qwords dilengkapi dengan halaman knowledge base berisi
                                            tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses
                                            dengan mudah dan solutif</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">Up time 99.99%
                                        </h4>
                                        <p class="card-text">Uptime Network & Server di atas 99. 99% dengan konfigurasi
                                            server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1
                                            provider network serta multiple peering.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/guard.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">Jaminan keamanan

                                        </h4>
                                        <p class="card-text">Keamanan menjadi fokus utama kami di Qwords. Tindakan
                                            pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi
                                            perhatian utama kami.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/networkAlt.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">Clustered DNS
                                        </h4>
                                        <p class="card-text">DNS Server Cloud Hosting Qwords terhubung satu dengan yang
                                            lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling
                                            membackup antar server.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/diamond.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">High Enterprise Server
                                        </h4>
                                        <p class="card-text">Standar server Qwords adalah server kelas enterprise Dual
                                            Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa
                                            digunakan oleh perusahaan terkemuka.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/router.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">Tier 1 Network
                                        </h4>
                                        <p class="card-text">Tier 1 Network merupakan jaringan dunia tanpa transit
                                            network, yang membuat jaringan lebih cepat serta jalur routing yang lebih
                                            pendek dan ketersediaan backup network.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/new-icon/network.webp"
                                            width="100" height="100" class="d-inline-block align-top"
                                            alt="">
                                        <h4 class="card-title fw-bolder text-warning ">Peering Network
                                        </h4>
                                        <p class="card-text">Jaringan di Qwords terhubung langsung ke public peering
                                            seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman
                                            data semakin kecil.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- End Komitmen Qwords Card -->

    <!-- Bikin Website Impian Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/bw.webp"
                            class="rounded" alt="handal">
                    </div>
                    <div class="col order-1 text-start">
                        <p class="card-title fw-bolder text-warning mb-4 fs-1">Bikin website impian dengan mudah
                            disini
                            hanya
                            1jutaan
                        </p>
                        <p class="card-text fs-5 fw-bold">Bikin website impian include paket hosting Indonesia terbaik
                            hanya 1
                            jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website
                            Impian dengan mudah di sini, desain website elegan dan mudah dikelola</p>
                        <button type="button" class="btn btn-warning fw-bolder text-white">Lihat
                            Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Bikin Website Impian Section-->

    <!-- Garansi 30 Section-->
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col text-start">
                        <p class="card-title fw-bolder text-warning mb-4 fs-1">Garansi 30 Hari Uang Kembali
                        </p>
                        <p class="card-text fs-5 fw-bold">Untuk menjaga kepuasan pelanggan, kami memberikan garansi
                            uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>
                        <button type="button" class="btn btn-warning fw-bolder text-white">Lihat
                            Selengkapnya</button>
                    </div>
                    <div class="col order-1">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/illustrations/guarantee.webp"
                            class="rounded" alt="handal">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Garansi 30 Section -->

    <!-- Kata Mereka Section-->
    <section class="bg-white py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Apa Kata Mereka?</span>
                        </h2>
                        <p class="text-muted mb-5">Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia
                            dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-start">
                        <p class="card-title fw-bolder text-warning mb-2 fs-4">"Semoga Qwords dapat terus bertahan,
                            sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.
                        </p>
                        <p class="card-text fw">Kami, ID Cert, merupakan sebuah perusahaan yang bergerak
                            dalam bidang penyedia jasa informasi keamanan di Indonesia. Oleh karena itu, kami
                            membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up
                            selama 24 jam.</p>
                        <p class="card-title fw-bolder text-dark mb-3 fs-5">Budi Raharjo - Founder ID Cert
                        </p>
                        <button type="button" class="btn btn-warning fw-bolder text-white">Lihat Video
                            Selengkapnya</button>

                    </div>
                    <div class="col order-1">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi1.webp"
                            class="rounded" alt="handal">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col order-1">
                        <p class="card-title fw-bolder text-warning mb-2 fs-4">"Pelayanan Qwords sangat cepat dan
                            responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal.
                            Terbaik pokoknya, mah!
                        </p>
                        <p class="card-text fw">Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan
                            website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang
                            tinggi setelah menggunakan dukungan dari Qwords.</p>
                        <p class="card-title fw-bolder text-dark mb-3 fs-5">Kuns Kurniawan - PR Event Info BDG
                        </p>
                        <button type="button" class="btn btn-warning fw-bolder text-white">Lihat Video
                            Selengkapnya</button>

                    </div>
                    <div class="col text-start ">
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/photos/testi2.webp"
                            class="rounded" alt="handal">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kata Mereka Section-->

    <!-- Diliput Section-->
    <section class="bg-white py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Diliput Oleh</span>
                        </h2>
                    </div>
                    <div class="container text-center">
                        <div class="row align-items-center">
                            <div class="col">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Detikcom.webp"
                                    width="200" height="90" class="d-inline-block align-top mb-4"
                                    alt="">
                            </div>
                            <div class="col">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/Liputan6.webp"
                                    width="200" height="90" class="d-inline-block align-top mb-4"
                                    alt="">
                            </div>
                            <div class="col">
                                <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/TribunJogja.webp"
                                    width="200" height="90" class="d-inline-block align-top mb-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="container text-center">
                            <div class="row align-items-center">
                                <div class="col">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/antara.webp"
                                        width="200" height="90" class="d-inline-block align-top mb-4"
                                        alt="">
                                </div>
                                <div class="col">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/RM.webp"
                                        width="200" height="90" class="d-inline-block align-top mb-4"
                                        alt="">
                                </div>
                                <div class="col">
                                    <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/liputan/KoranBernas.webp"
                                        width="200" height="90" class="d-inline-block align-top mb-4"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning fw-bolder text-white">Lihat Semua
                            Liputan</button>
                    </div>
                </div>
            </div>
    </section>
    {{-- End Diliput Section --}}

    <!-- Pembayaran Section-->
    <section class="bg-white py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fs-3 fw-bolder"><span class="text-gradient d-inline">Pilih metode
                                e-payment
                                otomatis. Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi
                                bayar.</span>
                        </h2>
                    </div>
                    <div class="container text-center">
                        <div class="row align-items-center">

                            <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/all-payment.webp"
                                width="200" height="200" class="d-inline-block align-top mb-4" alt="">


                        </div>
                        <button type="button" class="btn btn-warning fw-bolder text-white">Lihat Panduan
                            Pembayaran</button>
                    </div>
                </div>
    </section>
    {{-- End Pembayaran Section --}}

    <!-- Hubungi kami Section-->
    <section class="bg-warning py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-white d-inline">Butuh Bantuan?</span>
                        </h2>
                        <p class="card-title fw-bolder text-white fs-5">Kami siap membantu anda 24 Jam
                        </p>
                    </div>
                    <div class="container text-center">
                        <div class="row align-items-center">
                            <div class="col">
                                <button type="button"
                                    class="btn btn-danger fw-bolder text-white">0804-1-808-888</button>
                            </div>
                            <div class="col">
                                <button type="button"
                                    class="btn btn-danger fw-bolder text-white">02139708800</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-danger fw-bolder text-white">+6281 7437
                                    111</button>
                            </div>
                            <div class="col">
                                <button type="button"
                                    class="btn btn-danger fw-bolder text-white">info@qwords.com</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Hubungi Kami Section --}}

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5 text-white">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/logo-dark.webp"
                            width="120" height="50" class="d-inline-block align-top mb-4" alt="">
                        <h5 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem"></i>PT Qwords Company International
                        </h5>
                        <p>
                            Cloud Web Hosting Indonesia. Domain & hosting terbaik dengan akses cepat yang didukung
                            layanan support 24/7
                        </p>
                        <img src="https://qwords.com/v2/wp-content/themes/qwords/assets/images/icons/bsi.webp"
                            width="150" height="70" class="d-inline-block align-top mb-4" alt="">

                        <h5 class="text-uppercase fw-bold mt-5">
                            Customer Care
                        </h5>
                        <p>
                            <a href="#!" class="text-reset">Pembayaran</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Faktur Pajak</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Bantuan 24 jam</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Qwords Rewards</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Knowledge Base</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Blog</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">FAQ</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Kontak</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h5 class="text-uppercase fw-bold mb-4">
                            Mengenai Kami
                        </h5>
                        <p>
                            <a href="#!" class="text-reset">Corporate Website</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Qwords History</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Qwords Differences</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Media Publication</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Network & Infrastructure</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Partner</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Career & Employment</a>
                        </p>

                        <h5 class="text-uppercase fw-bold mt-5">
                            MSA/SLA/AUP
                        </h5>
                        <p>
                            <a href="#!" class="text-reset">Master Service Agreementt</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Refund Policy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Privacy Policy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Product Life Cycle Policy</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Penggunaan Merek dan Logo</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Migrasi Ke Qwords</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h5 class="text-uppercase fw-bold mb-4">
                            Layanan Lainnya
                        </h5>
                        <p>
                            <a href="#!" class="text-reset">Extended Support</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Manage The Box Server</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Flexi Main Domain</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">FTP Backup</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Offline Backup</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Hosting Insurance</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Software License</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Digital Signature</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h5 class="text-uppercase fw-bold mb-4">Kantor Surabaya</h5>
                        <p><i class="fas fa-home"></i>Gedung Bursa Efek Indonesia Lt.10, Jl. Taman AIS Nasution
                            No.21, Surabaya 60271 - Indonesia 031 30008800</p>
                        <p>
                        <h6 class="text-uppercase fw-bold mb-4">Kantor Yogyakarta</h6>
                        <p><i class="fas fa-home"></i>Jl. Blotan no. 18 Kayen Wedomartani, Ngemplak, Sleman, Yogyakarta
                            55584 - Indonesia 0274 6058800</p>
                        <h6 class="text-uppercase fw-bold mb-4">Kantor Jakarta
                        </h6>
                        <p><i class="fas fa-home"></i>Gedung Cyber 1 Lantai 3, Jl.Kuningan Barat no.8, Jakarta 12710 -
                            Indonesia 021 39708800</p>
                        <h6 class="text-uppercase fw-bold mb-4">Kantor Bandung
                        </h6>
                        <p><i class="fas fa-home"></i>Jl. Terusan Setra Indah I No.19, Sukagalih, Sukajadi, Bandung
                            40163 - Indonesia 022 30508800

                        </p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <h6 class="text-uppercase fw-bold mb-4 mx-auto">Terdaftar di PSE, ICANN dan Partner Lainnya

                </h6>
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4 text-white " style="background-color: rgba(0, 0, 0, 0.05);">
            Copyright © 2023 PT. Qwords Company International

        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
