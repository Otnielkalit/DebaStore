<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <nav class="navbar fixed-top navbar-light bg-light">
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
                                        <a class="navbar-brand mt-2 mt-lg-0" href="#">
                                            <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"height="23" alt="MDB Logo" loading="lazy" />
                                        </a>
                                    </div>
                                    <!-- Collapsible wrapper -->

                                    <!-- Right elements -->
                                    <div class="d-flex align-items-center">
                                        <!-- Icon -->

                                        <?php
                                        $pesanan_utama = App\Models\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                                        if (!empty($pesanan_utama))
                                            {
                                                $notif = App\Models\PesananDetail::where('pesanan_id' ,$pesanan_utama->id)->count();
                                            }
                                        ?>
                                        <a class="text-reset me-4" href="{{ 'checkout' }}">
                                            <i class="fas fa-shopping-cart"></i>
                                            @if (!empty($notif))
                                            <span class="badge rounded-pill badge-notification bg-danger">{{ $notif }}</span>
                                            @endif
                                        </a>
                                        <!-- Avatar -->
                                        <div class="dropdown">
                                            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="35" alt="Black and White Portrait of a Man" loading="lazy"/>
                                                    <strong class="d-none d-sm-block ms-3">{{ Auth::user()->name }}</strong>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('profile') }}">My profile</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="{{ url('history') }}">History Pesanan</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Right elements -->
                                </div>
                                <!-- Container wrapper -->
                            </nav>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('sweetalert::alert')
</body>
</html>
