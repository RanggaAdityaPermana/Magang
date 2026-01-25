@extends('informasi.layout')

@section('hero-title')
    <div class="w-24 h-1 bg-white mx-auto mb-3"></div>
    Informasi - Maklumat Pelayanan
@endsection

@section('content')
<!-- Maklumat Pelayanan Content -->
<div id="maklumat">
    <section class="py-12 water-background min-h-screen">
        <div class="container mx-auto px-4 max-w-5xl relative z-10">
            <div class="bg-white border-2 border-gray-200 rounded-lg shadow-lg p-12">
                <!-- Main Heading -->
                <h2 class="text-3xl md:text-4xl font-bold text-black text-center mb-6 uppercase tracking-wide">
                    MAKLUMAT PELAYANAN INFORMASI PUBLIK
                </h2>
                
                <!-- Descriptive Paragraph -->
                <p class="text-base md:text-lg text-black text-center mb-8 leading-relaxed">
                    PERUMDA PDAM HALMAHERA SELATAN BERUPAYA UNTUK MEMBERIKAN PELAYANAN INFORMASI PUBLIK SECARA SANTUN, SEDERHANA, MUDAH, AKURAT, SERTA SESUAI ATURAN PERUNDANG-UNDANGAN YANG BERLAKU
                </p>
                
                <!-- Separator -->
                <div class="border-t-2 border-dashed border-gray-400 my-8"></div>
                
                <!-- Working Hours Section -->
                <div class="mb-8">
                    <h3 class="text-xl md:text-2xl font-bold text-black text-center mb-6 uppercase">
                        HARI JAM PELAYANAN
                    </h3>
                    <div class="text-center space-y-2 text-base md:text-lg text-black">
                        <p>SENIN S.D KAMIS 07.30 WIB - 15.30 WIB</p>
                        <p class="ml-8">(BUKA LOKET SAMPAI 14.30 WIB)</p>
                        <p class="mt-4">JUM'AT 07.30 WIB - 14.30 WIB</p>
                        <p class="ml-8">(BUKA LOKET SAMPAI 13.30 WIB)</p>
                    </div>
                </div>
                
                <!-- Tariff Section -->
                <div class="mt-12">
                    <h4 class="text-lg md:text-xl font-bold text-black text-center mb-4">
                        *TARIF PELAYANAN INFORMASI PERUMDA PDAM HALMAHERA SELATAN
                    </h4>
                    <p class="text-5xl md:text-6xl font-bold text-black text-center mb-4 uppercase tracking-wider">
                        GRATIS
                    </p>
                    <p class="text-base md:text-lg text-black text-center">
                        APABILA TERDAPAT PENGGANDAAN INFORMASI/DOKUMEN DIBEBANKAN KE PEMOHON
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
