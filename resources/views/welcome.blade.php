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
                        <p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias
                            autem provident. Odit ab aliquam dolor eius.</p>
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
                        <h2 class="heading-colored">Bersama Bapak M. Suhendra</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut praesentium nihil hic
                            quam culpa magnam ducimus suscipit repellat quidem cumque, unde impedit, labore earum
                            eligendi perspiciatis nemo molestiae sequi veritatis. Veritatis, reprehenderit, eaque!
                            Rerum, libero ipsam enim, iusto adipisci quae repellendus officia consequatur ducimus
                            cupiditate impedit, aliquam numquam excepturi.</p>
                    </div>
                </div><br><br><br>
                <div class="row team-item gtco-team-reverse">
                    <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                        <div class="img-shadow">
                            <img src="aboutimg/e.png" class="img-responsive" alt="Photos" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                        <h2>Kacang Pariban</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores,
                            voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi?
                            Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi
                            reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem
                            possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
                        <p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio,
                            eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex
                            necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic,
                            voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur
                            fugit ipsam, dolorum excepturi adipisci.</p>
                    </div>
                </div> <br><br><br>
                <div class="row mb-1">
                    <div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img-shadow">
                            <img src="aboutimg/c.jpeg" class="img-responsive" alt="product">
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2 class="heading-colored">Bersama Bapak M. Suhendra</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut praesentium nihil hic
                            quam culpa magnam ducimus suscipit repellat quidem cumque, unde impedit, labore earum
                            eligendi perspiciatis nemo molestiae sequi veritatis. Veritatis, reprehenderit, eaque!
                            Rerum, libero ipsam enim, iusto adipisci quae repellendus officia consequatur ducimus
                            cupiditate impedit, aliquam numquam excepturi.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="gtco-practice-areas" data-section="practice-areas">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                        <h1>Produk Kami</h1>
                        <p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus
                            alias autem provident. Odit ab aliquam dolor eius.</p>
                        <p class="subtle-text animate-box" data-animate-effect="fadeIn">Produk <span>Kami</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="gtco-practice-area-item animate-box">
                            <div class="gtco-icon">
                                <img src="productimage/bandrek.png" alt="product" height="160px" class="img-responsive">
                            </div>
                            <div class="gtco-copy">
                                <h3>Bandrek Andaliamn</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque
                                    sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget
                                    ornare tortor leo eget erat. </p>
                            </div>
                        </div>

                        <div class="gtco-practice-area-item animate-box">
                            <div class="gtco-icon">
                                <img src="productimage/kulit.png" alt="product" height="160px" class="img-responsive">
                            </div>
                            <div class="gtco-copy">
                                <h3>Kulit Pangsit Kriuk</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque
                                    sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget
                                    ornare tortor leo eget erat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="gtco-practice-area-item animate-box">
                            <div class="gtco-icon">
                                <img src="productimage/kacang.png" alt="product" height="160px" class="img-responsive">
                            </div>
                            <div class="gtco-copy">
                                <h3>Kacang Pariban</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque
                                    sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget
                                    ornare tortor leo eget erat. </p>
                            </div>
                        </div>

                        <div class="gtco-practice-area-item animate-box">
                            <div class="gtco-icon">
                                <img src="productimage/kopi.jpg" alt="product" height="160px" class="img-responsive">
                            </div>
                            <div class="gtco-copy">
                                <h3>Kopi Tombak</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed scelerisque
                                    sapien. Sed sodales, libero non faucibus rutrum, purus tellus finibus diam, eget
                                    ornare tortor leo eget erat. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="gtco-our-team" data-section="our-team">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-8 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                        <h1>Produk Terbaik Kami</h1>
                        <p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus
                            alias autem provident. Odit ab aliquam dolor eius.</p>
                        <p class="subtle-text animate-box" data-animate-effect="fadeIn">Produk Terbaik</p>
                    </div>
                </div>
                <div class="row team-item gtco-team-reverse">
                    <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                        <div class="img-shadow">
                            <img src="aboutimg/a.jpeg" class="img-responsive" alt="Photos" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                        <h2>Bandrek Andaliman</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores,
                            voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi?
                            Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi
                            reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem
                            possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
                        <p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio,
                            eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex
                            necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic,
                            voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur
                            fugit ipsam, dolorum excepturi adipisci.</p>
                    </div>
                </div>

                <div class="row team-item gtco-team">
                    <div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                        <div class="img-shadow">
                            <img src="productimage/kopii.png" alt="product" height="160px" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <h2>Kopi Tombak</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores,
                            voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi?
                            Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi
                            reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem
                            possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
                        <p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio,
                            eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex
                            necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic,
                            voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur
                            fugit ipsam, dolorum excepturi adipisci.</p>
                    </div>
                </div>

                <div class="row team-item gtco-team-reverse">
                    <div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
                        <div class="img-shadow">
                            <img src="aboutimg/e.png" class="img-responsive" alt="Photos" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
                        <h2>Kacang Pariban</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus aliquid maiores,
                            voluptatum ex. Accusantium, eum distinctio laudantium. Perferendis dolor, corporis quasi?
                            Tempore quod molestiae quis cumque pariatur dolore vel sit, fugit delectus quasi
                            reprehenderit officia voluptate incidunt, culpa odit impedit qui dolorum fugiat. Quidem
                            possimus reprehenderit, quae recusandae voluptatibus magnam!</p>
                        <p>Ratione facilis quod laborum eaque illo dolore blanditiis nobis dicta voluptatem fugit optio,
                            eveniet non dolor quia delectus, sint, dignissimos atque porro consequuntur unde. Soluta ex
                            necessitatibus delectus saepe aliquam, culpa officiis doloremque, ipsa facere hic,
                            voluptatem accusantium veniam, quasi! Explicabo accusantium sint, corporis consequuntur
                            fugit ipsam, dolorum excepturi adipisci.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="gtco-contact" data-section="contact">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-6 col-md-offset-2 heading animate-box" data-animate-effect="fadeIn">
                        <h1>Contact</h1>
                        <p class="sub">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus
                            alias autem provident. Odit ab aliquam dolor eius.</p>
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
        <footer id="gtco-footer" role="contentinfo">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="pull-left">
                            <small class="block">&copy; 2022 DebaStore Group</small>
                        </p>
                        <p class="pull-right">
                        <ul class="gtco-social-icons pull-right">
                            <li><a href="#"><i class="icon-phone"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                        </p>
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
