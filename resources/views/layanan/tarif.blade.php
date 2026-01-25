@extends('layanan.layout')

@section('content')
<!-- Hero Section -->
<section class="relative h-[300px] md:h-[400px] bg-cover bg-center page-content" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&q=80');">
    <div class="hero-overlay absolute inset-0 bg-blue-900 bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 h-full flex items-center justify-center">
        <div class="text-center text-white">
            <div class="w-24 h-1 bg-white mx-auto mb-4"></div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold">Layanan - Tarif</h1>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-4 max-w-6xl">
        <!-- Informasi Tarif Air -->
        <div class="mb-12">
            <div class="bg-white rounded-lg shadow-md p-8">
                @if(isset($tarifAir) && $tarifAir)
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">{{ $tarifAir['judul'] }}</h2>
                    
                    @if(isset($tarifAir['deskripsi']) && $tarifAir['deskripsi'])
                        <div class="mb-6 text-gray-700 leading-relaxed">
                            @php
                                $paragraphs = explode("\n", $tarifAir['deskripsi']);
                            @endphp
                            @foreach($paragraphs as $paragraph)
                                @if(trim($paragraph))
                                    <p class="mb-4">{{ trim($paragraph) }}</p>
                                @endif
                            @endforeach
                        </div>
                    @endif
                    
                    @if(isset($tarifAir['images']) && count($tarifAir['images']) > 0)
                        <div class="mb-6">
                            @foreach($tarifAir['images'] as $image)
                                <div class="mb-4">
                                    <img src="/storage/posts/{{ $image }}" alt="{{ $tarifAir['judul'] }}" class="w-full h-auto rounded-lg shadow-sm">
                                    <p class="text-sm text-gray-500 mt-2">{{ $image }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <!-- Default Table -->
                        <div class="overflow-x-auto">
                            <table class="table-custom w-full">
                                <thead>
                                    <tr>
                                        <th>Katagori Tarif</th>
                                        <th>Pemakaian Air (m3)</th>
                                        <th>Tarif per-m3 (Rp)</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Golongan A</td>
                                        <td>0 - 10</td>
                                        <td>2.500</td>
                                        <td>Tarif dasar</td>
                                    </tr>
                                    <tr>
                                        <td>Golongan B</td>
                                        <td>> 10</td>
                                        <td>3.000</td>
                                        <td>Tarif Lanjutan</td>
                                    </tr>
                                    <tr>
                                        <td>Golongan C</td>
                                        <td>> 10</td>
                                        <td>100.000</td>
                                        <td>Fasilitas Umum</td>
                                    </tr>
                                    <tr>
                                        <td>Golongan D</td>
                                        <td>> 10</td>
                                        <td>10.000</td>
                                        <td>Usaha Kecil Menengah</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif
                @else
                    <!-- Default Content -->
                    <h2 class="text-2xl font-bold text-blue-900 mb-6">Informasi Tarif Air</h2>
                    <div class="overflow-x-auto">
                        <table class="table-custom w-full">
                            <thead>
                                <tr>
                                    <th>Katagori Tarif</th>
                                    <th>Pemakaian Air (m3)</th>
                                    <th>Tarif per-m3 (Rp)</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Golongan A</td>
                                    <td>0 - 10</td>
                                    <td>2.500</td>
                                    <td>Tarif dasar</td>
                                </tr>
                                <tr>
                                    <td>Golongan B</td>
                                    <td>> 10</td>
                                    <td>3.000</td>
                                    <td>Tarif Lanjutan</td>
                                </tr>
                                <tr>
                                    <td>Golongan C</td>
                                    <td>> 10</td>
                                    <td>100.000</td>
                                    <td>Fasilitas Umum</td>
                                </tr>
                                <tr>
                                    <td>Golongan D</td>
                                    <td>> 10</td>
                                    <td>10.000</td>
                                    <td>Usaha Kecil Menengah</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        <!-- Informasi Pembayaran Tagihan -->
        <div>
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Informasi Pembayaran Tagihan</h2>
                <div class="overflow-x-auto">
                    <table class="table-custom w-full">
                        <thead>
                            <tr>
                                <th>Metode Pembayaran</th>
                                <th>Cara Pembayaran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Loket PDAM</td>
                                <td>Datang langsung ke kantor PDAM</td>
                                <td>Jam kerja sesuai keterangan</td>
                            </tr>
                            <tr>
                                <td>Bank Mitra</td>
                                <td>Pembayaran melalui Teller Bank</td>
                                <td>Membawa nomor pelanggan</td>
                            </tr>
                            <tr>
                                <td>ATM / Mobile Banking</td>
                                <td>Transfer atau menu pembayaran PDAM</td>
                                <td>Berlaku sesuai Bank mitra</td>
                            </tr>
                            <tr>
                                <td>Agen Pembayaran</td>
                                <td>Minimarket / PPOB</td>
                                <td>Tersedia biaya administrasi</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
