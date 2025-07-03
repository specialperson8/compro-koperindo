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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                        {{-- Ikon panah ini HANYA akan muncul di tampilan mobile --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down d-lg-none ms-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('korinity.index') }}">#Korinity</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link on-progress-link" href="#" style="cursor: pointer;">#Korinity</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
