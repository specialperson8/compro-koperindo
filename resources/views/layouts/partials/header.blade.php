@php
    $isHomePage = request()->is('/');
@endphp

<nav id="main-navbar"
     class="navbar navbar-expand-lg fixed-top
            @if($isHomePage) navbar-dark @else navbar-light bg-white shadow-sm @endif">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <span style="color: #FF6600;">KOPER</span><span class="logo-suffix">INDO</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                {{-- Dropdown Tentang Kami --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"  aria-expanded="false">
                        Tentang Kami
                    </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('page.show', 'tentang-kami') }}">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="{{ route('page.show', 'visi-misi') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('page.show', 'bisnis') }}">Bisnis</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="{{ route('posts.by_category', 'inovasi') }}">Inovasi</a></li>
                    </ul>
                </li>
                {{-- Link-link lain yang sudah benar --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.by_category', 'budaya-perusahaan') }}">Budaya Perusahaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('careers.index') }}">Karir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.by_category', 'infrastruktur') }}">Infrastruktur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('korinity.index') }}">#Korinity</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
