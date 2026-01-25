@extends('profile.layout')

@section('hero-title')
    <span>Profil</span>
    <div class="w-24 h-1 bg-white mx-auto my-3"></div>
    <span>Struktur Organisasi</span>
@endsection

@section('content')
<!-- Struktur Organisasi Content -->
<div id="struktur-organisasi">
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="sejarah-title">STRUKTUR ORGANISASI</h2>
                <div class="bg-white rounded-lg shadow-md p-8 md:p-12">
                    <div class="text-center mb-10">
                        <p class="text-gray-700 text-lg mb-6 leading-relaxed">
                            Struktur organisasi PDAM Halmahera Selatan dirancang untuk mendukung efektivitas dan efisiensi dalam pelaksanaan tugas dan fungsi perusahaan.
                        </p>
                    </div>
                    
                    <!-- Organizational Chart -->
                    <div class="space-y-8">
                        <!-- Level 1: Direktur -->
                        <div class="flex justify-center">
                            <div class="bg-gradient-to-br from-blue-600 to-blue-700 text-white rounded-xl shadow-xl p-8 text-center min-w-[280px] transform hover:scale-105 transition-transform">
                                <h3 class="font-bold text-xl mb-2">Direktur</h3>
                                <p class="text-sm opacity-90">Pimpinan Perusahaan</p>
                            </div>
                        </div>

                        <!-- Connecting Lines -->
                        <div class="flex justify-center">
                            <div class="w-1 h-8 bg-blue-300"></div>
                        </div>

                        <!-- Level 2: Manager -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform">
                                <h4 class="font-semibold text-lg mb-2">Manager Operasional</h4>
                                <p class="text-sm opacity-90">Pengelolaan Operasional</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform">
                                <h4 class="font-semibold text-lg mb-2">Manager Keuangan</h4>
                                <p class="text-sm opacity-90">Pengelolaan Keuangan</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition-transform">
                                <h4 class="font-semibold text-lg mb-2">Manager SDM & Umum</h4>
                                <p class="text-sm opacity-90">SDM & Administrasi</p>
                            </div>
                        </div>

                        <!-- Connecting Lines -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="flex justify-center">
                                <div class="w-1 h-6 bg-green-300"></div>
                            </div>
                            <div class="flex justify-center">
                                <div class="w-1 h-6 bg-green-300"></div>
                            </div>
                            <div class="flex justify-center">
                                <div class="w-1 h-6 bg-green-300"></div>
                            </div>
                        </div>

                        <!-- Level 3: Divisi -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg shadow-md p-5 text-center transform hover:scale-105 transition-transform">
                                <h5 class="font-semibold mb-2">Divisi Produksi</h5>
                                <p class="text-xs opacity-90">Pengolahan Air</p>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg shadow-md p-5 text-center transform hover:scale-105 transition-transform">
                                <h5 class="font-semibold mb-2">Divisi Distribusi</h5>
                                <p class="text-xs opacity-90">Jaringan Distribusi</p>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg shadow-md p-5 text-center transform hover:scale-105 transition-transform">
                                <h5 class="font-semibold mb-2">Divisi Pelayanan</h5>
                                <p class="text-xs opacity-90">Pelayanan Pelanggan</p>
                            </div>
                            <div class="bg-gradient-to-br from-green-500 to-green-600 text-white rounded-lg shadow-md p-5 text-center transform hover:scale-105 transition-transform">
                                <h5 class="font-semibold mb-2">Divisi Teknik</h5>
                                <p class="text-xs opacity-90">Pemeliharaan</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 text-center">
                        <p class="text-gray-600 text-base leading-relaxed">
                            Setiap unit dalam struktur organisasi bekerja secara sinergis untuk mencapai tujuan perusahaan dalam memberikan pelayanan air bersih yang berkualitas kepada masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
