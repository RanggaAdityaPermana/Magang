@extends('informasi.layout')

@section('hero-title')
    Informasi - Magang
    <div class="w-24 h-1 bg-white mx-auto mt-3"></div>
@endsection

@section('content')
<!-- Magang Content -->
<div id="magang">
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-7xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12 uppercase">INFORMASI LOWONGAN MAGANG</h2>
            <div class="bg-white rounded-lg shadow-md p-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left Column: Posisi Magang yang Tersedia -->
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-6">Posisi Magang yang Tersedia:</h3>
                        <div class="space-y-4">
                            <!-- Card 1: Staf Administrasi -->
                            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 flex gap-4">
                                <div class="flex-shrink-0 w-16 h-16 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-800 mb-2">Staf Administrasi</h4>
                                    <p class="text-sm text-gray-700 leading-relaxed">
                                        Membantu tugas-tugas administrasi, pengarsipan dokumen, dan pelayanan administrasi umum di lingkungan PDAM.
                                    </p>
                                </div>
                            </div>

                            <!-- Card 2: Teknik Lingkungan -->
                            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 flex gap-4">
                                <div class="flex-shrink-0 w-16 h-16 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-800 mb-2">Teknik Lingkungan</h4>
                                    <p class="text-sm text-gray-700 leading-relaxed">
                                        Terlibat dalam pengelolaan dan pemantauan kualitas air, analisis lingkungan, serta pengembangan sistem pengolahan air.
                                    </p>
                                </div>
                            </div>

                            <!-- Card 3: Pengembangan Sistem IT -->
                            <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 flex gap-4">
                                <div class="flex-shrink-0 w-16 h-16 flex items-center justify-center">
                                    <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-gray-800 mb-2">Pengembangan Sistem IT</h4>
                                    <p class="text-sm text-gray-700 leading-relaxed">
                                        Mendukung pengembangan dan pemeliharaan sistem informasi, database, serta aplikasi yang digunakan dalam operasional PDAM.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Prosedur & Persyaratan -->
                    <div class="space-y-8">
                        <!-- Prosedur Pendaftaran -->
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-6">Prosedur Pendaftaran</h3>
                            <div class="relative pl-4">
                                <!-- Step 1 -->
                                <div class="flex items-start gap-4 mb-6 relative">
                                    <div class="flex-shrink-0 relative z-10">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 border-2 border-blue-500 flex items-center justify-center">
                                            <div class="w-3 h-3 rounded-full bg-white"></div>
                                        </div>
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-gray-700 leading-relaxed">Unggah Berkas pada link form berikut ini</p>
                                    </div>
                                    <div class="absolute left-4 top-8 w-0.5 h-20 bg-blue-500"></div>
                                </div>

                                <!-- Step 2 -->
                                <div class="flex items-start gap-4 mb-6 relative">
                                    <div class="flex-shrink-0 relative z-10">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 border-2 border-blue-500 flex items-center justify-center">
                                            <div class="w-3 h-3 rounded-full bg-white"></div>
                                        </div>
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-gray-700 leading-relaxed">Seleksi dan Wawancara</p>
                                    </div>
                                    <div class="absolute left-4 top-8 w-0.5 h-20 bg-blue-500"></div>
                                </div>

                                <!-- Step 3 -->
                                <div class="flex items-start gap-4 relative">
                                    <div class="flex-shrink-0 relative z-10">
                                        <div class="w-8 h-8 rounded-full bg-blue-500 border-2 border-blue-500 flex items-center justify-center">
                                            <div class="w-3 h-3 rounded-full bg-white"></div>
                                        </div>
                                    </div>
                                    <div class="flex-1 pt-1">
                                        <p class="text-gray-700 leading-relaxed">Penempatan Magang</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Persyaratan Umum -->
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-6">Persyaratan Umum</h3>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start gap-3">
                                    <span class="text-blue-500 mt-1">•</span>
                                    <span>SMK / Mahasiswa aktif atau lulusan baru (maksimal 1 tahun)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-blue-500 mt-1">•</span>
                                    <span>Minimal semester 5 (untuk mahasiswa)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-blue-500 mt-1">•</span>
                                    <span>Memiliki surat pengantar dari kampus (jika diwajibkan)</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-blue-500 mt-1">•</span>
                                    <span>Mampu bekerja secara individu maupun tim</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-blue-500 mt-1">•</span>
                                    <span>Berkomitmen mengikuti program magang sesuai jadwal</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-blue-500 mt-1">•</span>
                                    <span>Berperilaku baik dan mematuhi peraturan PDAM</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
