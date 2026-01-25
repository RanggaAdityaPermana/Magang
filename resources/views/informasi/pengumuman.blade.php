@extends('informasi.layout')

@section('hero-title')
    Informasi - Pengumuman
    <div class="w-24 h-1 bg-white mx-auto mt-3"></div>
@endsection

@section('content')
<!-- Pengumuman Content -->
<div id="pengumuman">
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-bold text-gray-900 text-center mb-12 uppercase">DAFTAR PENGUMUMAN</h2>
            <div class="space-y-6">
                <!-- Announcement 1 -->
                <div class="bg-white rounded-lg announcement-card overflow-hidden flex">
                    <!-- Date Block -->
                    <div class="announcement-date-block flex items-center justify-center py-6">
                        <div class="text-center px-4">
                            <div class="text-sm font-semibold text-gray-800">Oct 28, 2025</div>
                        </div>
                    </div>
                    <!-- Content Block -->
                    <div class="flex-1 p-6">
                        <p class="text-gray-800 leading-relaxed mb-3">
                            [Nama Kota], [Tanggal] - PDAM menyampaikan kepada pelanggan bahwa akan terjadi gangguan distribusi air bersih di wilayah barat akibat adanya perbaikan jaringan pipa utama.
                        </p>
                        <p class="text-gray-800 font-semibold mb-2">Wilayah Terdampak:</p>
                        <ul class="text-gray-700 space-y-1 ml-4">
                            <li>• Kelurahan A</li>
                            <li>• Kelurahan B</li>
                            <li>• Kelurahan C</li>
                        </ul>
                    </div>
                </div>

                <!-- Announcement 2 -->
                <div class="bg-white rounded-lg announcement-card overflow-hidden flex">
                    <!-- Date Block -->
                    <div class="announcement-date-block flex items-center justify-center py-6">
                        <div class="text-center px-4">
                            <div class="text-sm font-semibold text-gray-800">July 28, 2025</div>
                        </div>
                    </div>
                    <!-- Content Block -->
                    <div class="flex-1 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Pembukaan Program Magang PDAM</h3>
                        <p class="text-gray-800 leading-relaxed">
                            PDAM membuka kesempatan bagi mahasiswa untuk mengikuti program magang pada beberapa bidang kerja. Program ini bertujuan memberikan pengalaman kerja dan pembelajaran di lingkungan PDAM. Informasi lebih lanjut dapat dilihat pada menu informasi - Magang.
                        </p>
                    </div>
                </div>

                <!-- Announcement 3 -->
                <div class="bg-white rounded-lg announcement-card overflow-hidden flex">
                    <!-- Date Block -->
                    <div class="announcement-date-block flex items-center justify-center py-6">
                        <div class="text-center px-4">
                            <div class="text-sm font-semibold text-gray-800">Jan 28, 2025</div>
                        </div>
                    </div>
                    <!-- Content Block -->
                    <div class="flex-1 p-6">
                        <h3 class="text-lg font-bold text-gray-800 mb-3">Pengingat Pembayaran Rekening Air</h3>
                        <p class="text-gray-800 leading-relaxed">
                            PDAM mengingatkan kepada seluruh pelanggan untuk melakukan pembayaran rekening air tepat waktu guna menghindari denda keterlambatan dan gangguan pelayanan. Pembayaran dapat dilakukan melalui loket resmi PDAM dan mitra pembayaran yang telah bekerja sama.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
