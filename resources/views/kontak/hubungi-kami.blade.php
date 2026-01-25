@extends('kontak.layout')

@section('hero-title')
    Kontak - Call Center
@endsection

@section('content')
<!-- Call Center Content -->
<div id="callcenter-content" class="content-section">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Left Column -->
        <div>
            <!-- CALL CENTER 24 JAM Box -->
            <div class="call-center-box">
                <h2 class="text-xl font-bold mb-4">CALL CENTER 24 JAM</h2>
                <p class="text-3xl md:text-4xl font-bold">1500-XXX</p>
            </div>

            <!-- KONTAK & CALL CENTER Info Block -->
            <div class="info-card">
                <h3 class="text-xl font-bold text-gray-800 mb-4 uppercase">KONTAK & CALL CENTER</h3>
                <p class="text-gray-700 leading-relaxed mb-6">
                    PDAM Halmahera Selatan menyediakan layanan call center 24 jam untuk melayani kebutuhan informasi, pengaduan, dan bantuan teknis bagi pelanggan. Tim customer service kami siap membantu Anda kapan saja dengan pelayanan yang ramah dan profesional.
                </p>
                <button class="green-button">Jam Operasional:</button>
                <div class="text-gray-700 space-y-2">
                    <p>Senin - Kamis, Pukul 08.00 - 16.00 WIB</p>
                    <p>Jum'at, Pukul 08.00 - 11.00 WIB</p>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div>
            <!-- FORMULIR PENGADUAN ONLINE Block -->
            <div class="info-card" id="pengaduan">
                <h3 class="text-xl font-bold text-gray-800 mb-4 uppercase">FORMULIR PENGADUAN ONLINE</h3>
                <a href="/kontak/pengaduan-online" class="green-button">AJUKAN PENGADUAN</a>
                <div class="space-y-0">
                    <div class="pipeline-item">
                        <svg class="pipeline-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        <span class="text-gray-700">Pipeline Mercyhand 2022</span>
                    </div>
                    <div class="pipeline-item">
                        <svg class="pipeline-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        <span class="text-gray-700">Pipeline Mercyhand 2024</span>
                    </div>
                    <div class="pipeline-item">
                        <svg class="pipeline-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        <span class="text-gray-700">Pipalina Marcyhand 2023</span>
                    </div>
                    <div class="pipeline-item">
                        <svg class="pipeline-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                        <span class="text-gray-700">Pipeline Mercyhand 2025</span>
                    </div>
                </div>
            </div>

            <!-- ALAMAT KANTOR Block -->
            <div class="info-card">
                <h3 class="text-xl font-bold text-gray-800 mb-4 uppercase">ALAMAT KANTOR</h3>
                <div class="text-gray-700 leading-relaxed space-y-1">
                    <p>Jl. Raya Mandaon Labuya</p>
                    <p>Kelurahan Labuha</p>
                    <p>Kecamatan Labuha</p>
                    <p>Kabupaten Halmahera Selatan</p>
                    <p>Provinsi Maluku Utara</p>
                    <p>Kode Pos: 97791</p>
                </div>
                <div class="flex items-center gap-4 mt-6">
                    <div class="text-2xl font-bold text-blue-600">GV</div>
                    <div class="text-xl font-bold text-blue-600">pdam</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
