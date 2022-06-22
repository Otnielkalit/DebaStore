<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Debastore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords"
        content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="welcome/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="welcome/css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="welcome/css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="welcome/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="welcome/css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="welcome/css/owl.carousel.min.css">
    <link rel="stylesheet" href="welcome/css/owl.theme.default.min.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="welcome/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="welcome/css/style.css">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Modernizr JS -->
    <script src="welcome/js/modernizr-2.6.2.min.js"></script>
</head>

<body>

    <div class="gtco-loader"></div>

    <div id="page">
        <nav class="gtco-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-12">
                        <div id="gtco-logo">
                            <a href="{{ url('/') }}">Deba<em>Store</em></a>
                        </div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            @if (Route::has('login'))
                                @auth
                                <li class="btn-cta"><a href="{{ url('/home') }}" class="btn-cta"><span>Home</span></a></li>
                                @else
                                    <li class="btn-cta"><a href="{{ route('login') }}"class="btn-cta"><span>Login</span></a></li>

                                    @if (Route::has('register'))
                                        <li class="btn-cta"><a href="{{ route('register') }}"><span>Register</span></a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
        <section id="gtco-hero" class="gtco-cover" style="background-image: url(aboutimg/b.jpeg);"
            data-section="home" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center">
                        <div class="display-t">
                            <div class="display-tc">
                                <h1 class="animate-box" data-animate-effect="fadeIn">Selamat Datang di DebaStore</h1>
                                <p class="gtco-video-link animate-box" data-animate-effect="fadeIn"><i
                                        class="icon-controller-play"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gtco-about" data-section="about">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                        <h1>Selamat Datang di DebaStore</h1>
                        <p class="subtle-text animate-box" data-animate-effect="fadeIn">Welcome</p>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img-shadow">
                            <img src="aboutimg/c.jpeg" class="img-responsive" alt="product">
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2 class="heading-colored">Latar Belakang</h2>
                        <p>Ijinkan kami memperkenalkan diri dari UMKM ‘deba group’ Desa Hutapaung Kecamatan Polllung, Kabupaten Humbang Hasundutan Provinsi Sumatera Utara (profile terlampir). Adapun UMKM ‘deba group’ saya dirikan awalnya untuk mengggali potensi lokal di desa kami, serta memperkenalkan potensi tersebut ke luar. Berawal dari akhir 2016 kami membuka bisnis sarapan pagi, serta membuka Loket Pengiriman JNE Express Pollung. Kemudian akhir 2017, usaha sarapan pagi tersebut kami tingkatkan menjadi Rumah Makan Nasional (Lapo Mangan Nasional). Diawal 2018 melihat begitu besarnya potensi hasil Pertanian di kampung serta cuaca yang sejuk/dingin, kami menambah jasa menjadi Kode Kopi (coffeeshop speciality) serta mengeluarkan produk baru berupa BANDREK ANDALIMAN segar/cair.
                            Untuk meningkatkan penjualan kami mencoba memproduksi Bandrek andaliman tersebut dalam bentuk bubuk dalam kemasan sachet pcs, dan ternyata mendapat respon baik dari masyarakat. Jaringan UMKM semakin terjalin dengan adanya JNE yg semakin mempermudah distribusi #Bandal ke beberapa daerah. Perijinan dan lainnya kami lengkapi, merk kami daftarkan di Kemenhumham.
                            Kemudian kami terkendala di harga produksi yang agak tinggi dikarenakan masih di skala mikro/kecil. Untuk meningkatkan quantity dan menurunkan biaya produksi kami terkendala alat (mesin sachet & sealer) serta modal untuk beli bahan baku agar biaya produksi semakin kecil dan harga jual sesuai dengan keinginan konsumen.
                            </p>
                    </div>
                </div><br><br><br>
                <div class="row team-item gtco-team-reverse">
                    <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                        <div class="img-shadow">
                            <img src="img/bandrek.jpg" style="width: 100%;" class="img-responsive" alt="Photos" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                        <h2>Maksud dan Tujuan</h2>
                        <p>Adapun maksud dan tujuan proposal ini adalah untuk meningkatkan produksi secara intensifikasi dan ekstensifikasi. Penambahan skala produksi serta penemuan produk baru yang mengangkat potensi lokal.</p>
                        <p>Dalam segi kemasan kami jua akan meningkatkan kualitas serta turut serta mendukung promosi potensi PARIWISATA di daerah Kawasan Danau Toba. Dengan cara kami menampilkan gambar-gambar destinasi pariwisata Kawasan Danau Toba di setiap Kemasan Kami.</p>
                    </div>
                </div> <br><br><br>
                <div class="row mb-1">
                    <div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img-shadow">
                            <img src="img/gambar1.jpg" style="width: 100%;height:100%;" class="img-responsive" alt="product">
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2>JUMLAH AGEN & JANGKAUAN DISTRIBUSI & METODE PROMOSI.</h2>
                        <p>Jangkauan distribusi hingga sekarang telah mencapai 18 Propinsi dan 2 negara (Malaysia & Perancis) dengan metode Agen – Reseler – beli putus.
                            Adapun Jumlah Agen Resmi kami yang telah mendaftar ada 30 Agen (Produktif 12 Agen) di 8 Propinsi & Kota Kabupaten. Sumut 14 Agen, Sumsel 3 Agen, Kepri 4 Agen, Jabodetabek 6, Kalsel 1 Agen, Bali 1 Agen, Papua Barat 1 Agen, Malaysia/Penang 1 Agen.
                            Metode promosi dan penjualan yang kami lakukan adalah :
                            -	Titip jual di beberapa toko oleh-oleh dio kawasan danau toba (batikta, siholta, Taman Eden 100, dan lainnya)
                            -	Media sosial, akun Fanpge, Instragram, WA.
                            -	Online Shop marketplace, Tokopedia, Lazada, Shopee,Blanja, dll
                            -	Bundling Produk, paket penjualan bersama umkm lainnya.. beli sambal dapat bandal, beli bandal dapat keripik, dll
                            -	Komplimen, kerjasama dengan beberapa umkm jasa, seperti Penyewaan Tenda di Baktiraja Camping akan mendapatkan Bandrek andaliman saset GRATIS
                            </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="gtco-about" data-section="about">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                        <h1>About Us</h1>
                        <p class="subtle-text animate-box" data-animate-effect="fadeIn">Welcome</p>
                    </div>
                </div>
                @foreach ($dataAboutUs as $item)
                <div class="row mb-1" style="margin-left: 20px;">
                    <div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img-shadow">
                            <img src="aboutusimage/{{ $item->gambar }}" width="100%" height="100%" class="img-responsive" alt="product">
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2>{{ $item->judul }}</h2>
                        <p>{{$item->deskripsi}}</p>
                    </div>
                </div><br><br><br>
                @endforeach
            </div>
        </section>

        <section id="gtco-contact" data-section="contact">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-6 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                        <h1>Contact</h1>
                        <p class="sub">Jika ada pertanyaan terkait toko kami, bisa menghubungi kami pada nomor dibawah ini</p>
                        <p class="subtle-text animate-box" data-animate-effect="fadeIn">Contact</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-push-6 animate-box">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5086.907373970723!2d98.71762905804279!3d2.3350194502143786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e252ebe3e90e9%3A0xf5b5c24020b9df4c!2sBandrek%20Andaliman!5e1!3m2!1sid!2sid!4v1654255804608!5m2!1sid!2sid"
                            width="1350" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="col-md-4 col-md-pull-6 animate-box">
                        <div class="gtco-contact-info">
                            <ul>
                                <li class="address"><a href="https://www.google.com/maps/place/Bandrek+Andaliman/@2.3346893,98.7226768,3404m/data=!3m1!1e3!4m5!3m4!1s0x0:0xf5b5c24020b9df4c!8m2!3d2.3346893!4d98.7226768?hl=id" target="_blank">
                                    Jl. Sisingamangaraja desa No.km.10.5, Huta Paung, Kec. Pollung, Kabupaten Humbang
                                    Hasundutan, Sumatera Utara 22457</a>
                                </li>
                                <li class="phone"><a href="s">0822-6250-5752</a></li>
                                <li class="email"><a href="mailto:info@yoursite.com">bandrekandaliman@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="footer-divider">
        <div class="footer-commons">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 order-sm-0 order-md-0 dcd-bg-gray py-5">
                        <div class="py-lg-5">
                            <img src="img/deba.png" alt="Dicoding Logo" style="max-height: 37px;" width="130" height="95">
                            <p class="mt-3" style="font-size: 15px;">Deba Store<br>
                                Jl. Sisingamangaraja desa No.km.10.5, Huta Paung<br>
                                Kec. Pollung, Kabupaten Humbang Hasundutan, <br>Sumatera Utara 22457</p>
                            <dl>
                                <dd>
                                    <a href="https://www.facebook.com/bandrekandaliman" class="social-media-link p-1 p-md-0 mr-2 text-muted" target="_blank" rel="noopener"><svg width="20" height="20" viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path>
                                        </svg></a>
                                                                    <a href="https://www.instagram.com/bandrek_andaliman/?hl=id" class="social-media-link p-1 p-md-0 mr-2 text-muted" target="_blank" rel="noopener"><svg width="20" height="20" viewBox="0 0 448 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                        </svg></a>
                                        </a>
                                                                    <a href="https://www.youtube.com/watch?v=yUGt1u5MIqU&list=PLB6B1Nm3HGWJ_yTZTZZA9NpAFmKFsaK27" class="social-media-link p-1 p-md-0 mr-2 text-muted" target="_blank" rel="noopener"><svg width="20" height="20" viewBox="0 0 576 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                                        </svg>
                                    </a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 order-sm-2 order-md-1 bg-white py-5">
                        <div class="row justify-content-end py-lg-5">
                            <div class="col-md-3 col-sm-6 mt-3 mt-md-0">
                                <dl>
                                    <dd><a class="d-inline-block py-2 py-md-1" style="margin-left:350px;" href="{{ url('/hubungi-kami') }}">Hubungi.Kami</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="dcd-bg-gray border-top">
            <div class="container">
                <div class="row py-3">
                    <div class="text-muted">
                        &copy; 2022 Debastore
                        <span class="">|</span>
                        Debastore adalah toko yang memproduksi makanan dan minuman khas Batak.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    <!-- jQuery -->
    <script src="welcome/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="welcome/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="welcome/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="welcome/js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="welcome/js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="welcome/js/jquery.magnific-popup.min.js"></script>
    <script src="welcome/js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="welcome/js/main.js"></script>
</body>

</html>
