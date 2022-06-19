<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <base href="/public">
    @yield('style')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <style>
        footer {
            width: 100%;
            /* height: 50px;
    padding-left: 10px; */
            line-height: 50px;
            position: fixed;
            bottom: 0px;
        }
    </style>
</head>

<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0" href="{{ url('/') }}">
                        <img src="img/deba.png" height="15" alt="logo Deba" loading="lazy" />
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/list-menu') }}">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ url('/agen') }}">Agen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Pesan Tempat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/aboutususer') }}">About Us</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">SIGN UP FOR
                                    FREE</button></a>
                        @endif
                    @endguest
                    <!-- Icon -->
                    @if (Route::has('login'))
                        @auth
                            <?php
                            $pesanan_utama = App\Models\Pesanan::where('user_id', Auth::user()->id)
                                ->where('status', 0)
                                ->first();
                            if (!empty($pesanan_utama)) {
                                $notif = App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                            }
                            ?>
                            <a class="text-reset me-4" href="{{ 'checkout' }}">
                                <i class="fas fa-shopping-cart"></i>
                                @if (!empty($notif))
                                    <span
                                        class="badge rounded-pill badge-notification bg-danger">{{ $notif }}</span>
                                @endif
                            </a>
                            <!-- Avatar -->
                            <div class="dropdown">
                                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                    id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                        height="35" alt="Black and White Portrait of a Man" loading="lazy" />
                                    <strong class="d-none d-sm-block ms-3 text-dark">{{ Auth::user()->name }}</strong>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                    <li>
                                        <a class="dropdown-item" href="{{ url('profile') }}">My profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('history') }}">History Pesanan</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                    @endif
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('sweetalert::alert')
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-2" style="background-color: rgba(0, 0, 0, 0.2);">
            <section class="mb-1">
                © 2022 Copyright:
                <!-- Facebook -->
                <a class="btn btn-link btn-floating btn-lg text-dark" href="https://www.facebook.com/bandrekandaliman" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-link btn-floating btn-lg text-dark" href="https://twitter.com/login" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                <!-- Instagram -->
                <a class="btn btn-link btn-floating btn-lg text-dark" href="https://www.instagram.com/bandrek_andaliman/?hl=id" role="button"
                    data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
            </section>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</body>
<script>
    $(document).on('change', '.file-input', function() {


        var filesCount = $(this)[0].files.length;

        var textbox = $(this).prev();

        if (filesCount === 1) {
            var fileName = $(this).val().split('\\').pop();
            textbox.text(fileName);
        } else {
            textbox.text(filesCount + ' files selected');
        }
    });
</script>

</html>
