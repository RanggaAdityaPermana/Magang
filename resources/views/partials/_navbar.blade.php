<!-- Header -->
<header class="bg-blue-900 shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2">
                    <!-- Green logo with three M shapes -->
                    <div class="w-14 h-14 flex items-center justify-center">
                        <svg class="w-12 h-12" viewBox="0 0 100 100" fill="none">
                            <path d="M15 40 Q25 25 35 40 Q45 25 55 40 Q65 25 75 40 L75 60 Q65 75 55 60 Q45 75 35 60 Q25 75 15 60 Z" fill="#10B981" opacity="0.9"/>
                            <path d="M20 45 Q30 30 40 45 Q50 30 60 45 Q70 30 80 45 L80 55 Q70 70 60 55 Q50 70 40 55 Q30 70 20 55 Z" fill="#10B981" opacity="0.7"/>
                        </svg>
                    </div>
                    <div>
                        <div class="text-xs font-semibold text-white">TIRTA DHARMA</div>
                    </div>
                </div>
                <div class="text-xl font-bold text-white">PDAM HALMERA SELATAN</div>
            </div>
            
            <!-- Navigation -->
            <nav class="hidden md:flex items-center gap-6">
                <a href="/" class="text-white hover:text-blue-200 transition">Beranda</a>
                <div class="relative group" id="profil-dropdown">
                    <a href="/profile" class="text-white hover:text-blue-200 transition flex items-center gap-1">
                        Profil
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-menu" id="profil-dropdown-menu">
                        <a href="/profile/tentang-kami" class="dropdown-item">Tentang Kami</a>
                        <a href="/profile/visi-misi" class="dropdown-item">Visi Misi</a>
                        <a href="/profile/sejarah" class="dropdown-item">Sejarah</a>
                        <a href="/profile/struktur-organisasi" class="dropdown-item">Struktur Organisasi</a>
                    </div>
                </div>
                <div class="relative group" id="layanan-dropdown">
                    <a href="/layanan" class="text-white hover:text-blue-200 transition flex items-center gap-1">
                        Layanan
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-menu" id="layanan-dropdown-menu">
                        <a href="/layanan/tarif" class="dropdown-item">Tarif</a>
                        <a href="/layanan/daftar" class="dropdown-item">Daftar Meteran Air Online</a>
                    </div>
                </div>
                <div class="relative group" id="informasi-dropdown">
                    <a href="/informasi/berita" class="text-white hover:text-blue-200 transition flex items-center gap-1">
                        Informasi
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-menu" id="informasi-dropdown-menu">
                        <a href="/informasi/berita" class="dropdown-item">Berita</a>
                        <a href="/informasi/pengumuman" class="dropdown-item">Pengumuman</a>
                        <a href="/informasi/ketenagakerjaan" class="dropdown-item">Informasi Ketenagakerjaan</a>
                        <a href="/informasi/magang" class="dropdown-item">Magang</a>
                        <a href="/informasi/kerjasama" class="dropdown-item">Informasi Kerja Sama</a>
                        <a href="/informasi/maklumat" class="dropdown-item">Maklumat Pelayanan</a>
                    </div>
                </div>
                <a href="/galeri" class="text-white hover:text-blue-200 transition">Galeri</a>
                <div class="relative group" id="contact-dropdown">
                    <a href="/kontak" class="text-white hover:text-blue-200 transition flex items-center gap-1">
                        Contact
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-menu" id="contact-dropdown-menu">
                        <a href="/kontak" class="dropdown-item">Call Center</a>
                        <a href="/kontak#pengaduan" class="dropdown-item">Pengaduan Online</a>
                    </div>
                </div>
            </nav>
            
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white" id="mobile-menu-button" onclick="if(typeof toggleMobileMenu === 'function') toggleMobileMenu(); else { const menu = document.getElementById('mobile-menu'); if(menu) menu.classList.toggle('hidden'); }">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-blue-900 border-t border-blue-800">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex flex-col gap-4">
                <a href="/" class="text-white hover:text-blue-200 transition py-2">Beranda</a>
                <a href="/profile/tentang-kami" class="text-white hover:text-blue-200 transition py-2">Profil</a>
                <a href="/layanan" class="text-white hover:text-blue-200 transition py-2">Layanan</a>
                <a href="/informasi/berita" class="text-white hover:text-blue-200 transition py-2">Informasi</a>
                <a href="/galeri" class="text-white hover:text-blue-200 transition py-2">Galeri</a>
                <a href="/kontak" class="text-white hover:text-blue-200 transition py-2">Contact</a>
            </nav>
        </div>
    </div>
</header>
