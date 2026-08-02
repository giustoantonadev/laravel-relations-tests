<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel"></div>
                    <span class="ms-2 fw-bold">{{ config('app.name', 'Laravel') }}</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">{{ __('Admin') }}</a>
                        </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a></li>
                                <li><a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if(session('success') || session('error'))
        <div class="container mt-3">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
        </div>
        @endif

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
    <footer class="site-footer mt-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0 d-flex align-items-center">
                    <div class="logo_laravel"></div>
                    <div class="ms-3">
                        <div class="fw-bold">{{ config('app.name', 'Laravel') }}</div>
                        <div class="small text-muted">Built with ❤️ · {{ date('Y') }}</div>
                    </div>
                </div>

                <div class="col-md-3 mb-3 mb-md-0">
                    <h6 class="mb-2">Links</h6>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ route('courses.index') }}" class="footer-link">Courses</a></li>
                        <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
                        @auth
                        <li><a href="{{ route('admin.dashboard') }}" class="footer-link">Admin</a></li>
                        @endauth
                    </ul>
                </div>

                <div class="col-md-3 text-md-end">
                    <small class="text-muted">© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</small>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>