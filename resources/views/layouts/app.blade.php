<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SDN Pendrikan Lor 02 Semarang')</title>
    <meta name="description" content="Website Resmi SD Negeri Pendrikan Lor 02 Semarang.">
    <link rel="shortcut icon" href="{{ asset('images/favicon.jpeg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container navbar-container">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Logo">
            </a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ request()->routeIs('about') || request()->routeIs('teachers') ? 'active' : '' }}">Profil</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('about') }}">Profil & Visi Misi</a></li>
                        <li><a href="{{ route('teachers') }}">Guru & Tendik</a></li>
                    </ul>
                </li>
                
                <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Galeri</a></li>
                
                <li><a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? 'active' : '' }}">Berita</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Prestasi</a>
                    <ul class="dropdown-menu">
                        @if(isset($pengumumanLinks))
                            @foreach($pengumumanLinks as $link)
                                <li><a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Sosial Media</a>
                    <ul class="dropdown-menu">
                        @if(isset($sosmedLinks))
                            @foreach($sosmedLinks as $link)
                                <li><a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Hubungi Kami</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a></li>
                        <li><a href="{{ route('pengaduan') }}" class="{{ request()->routeIs('pengaduan') ? 'active' : '' }}">Pengaduan</a></li>
                    </ul>
                </li>

                
                <li style="margin-left: 1rem;">
                    <a href="https://spmb.semarangkota.go.id/" target="_blank" class="nav-btn-spmb" style="background: var(--primary); color: white; padding: 0.4rem 1.2rem; border-radius: 2rem; font-weight: 600; box-shadow: var(--shadow-sm);">SPMB</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="footer-title">SDN Pendrikan Lor 02</h3>
                    <p class="text-muted">Mewujudkan peserta didik yang beriman, cerdas, terampil, mandiri dan berwawasan global.</p>
                </div>
                <div>
                    <h3 class="footer-title">Tautan Penting</h3>
                    <ul class="footer-links">
                        <li><a href="https://www.kemdikbud.go.id/" target="_blank">Kemdikbud</a></li>
                        <li><a href="http://disdik.semarangkota.go.id/" target="_blank">Dinas Pendidikan</a></li>
                        <li><a href="http://ppd.semarangkota.go.id/" target="_blank">PPDB Kota Semarang</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-title">Kontak Kami</h3>
                    <ul class="footer-links">
                        <p style="color: var(--text-muted); display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
                            {{ isset($schoolProfile) ? $schoolProfile->address : 'Jl. Poncowolo Barat VIII No. 495' }}
                        </p>
                        <p style="color: var(--text-muted); display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/></svg>
                            {{ isset($schoolProfile) ? $schoolProfile->email : 'sdpelor02@hotmail.com' }}
                        </p>
                        <p style="color: var(--text-muted); display: flex; align-items: center; gap: 0.5rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>
                            {{ isset($schoolProfile) ? $schoolProfile->phone : '(024) 3539427' }}
                        </p>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; {{ date('Y') }} SD Negeri Pendrikan Lor 02. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 800,
        once: true,
        offset: 100,
      });
    </script>
    <!-- Floating Action Button (Global) -->
    <a href="mailto:{{ isset($schoolProfile) ? $schoolProfile->email : 'sdpelor02@hotmail.com' }}" class="fab-pengaduan" title="Hubungi Kami via Email">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
        </svg>
    </a>

    @stack('scripts')
</body>
</html>
