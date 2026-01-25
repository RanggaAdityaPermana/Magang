@extends('profile.layout')

@section('hero-title')
    <span>Profil</span>
    <div class="w-24 h-1 bg-white mx-auto my-3"></div>
    <span>Tentang Kami</span>
@endsection

@section('content')
<!-- Tentang Kami Content -->
<div id="tentang-kami">
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left Column - Text Content -->
                <div class="space-y-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-black uppercase mb-6">
                        @if(isset($tentangKami) && $tentangKami)
                            {{ strtoupper($tentangKami['judul']) }}
                        @else
                            PROFIL PERUSAHAAN & KEGIATAN PDAM
                        @endif
                    </h2>
                    <div class="space-y-4 text-gray-800 leading-relaxed text-base">
                        @if(isset($tentangKami) && $tentangKami)
                            @php
                                $paragraphs = explode("\n", $tentangKami['deskripsi']);
                            @endphp
                            @foreach($paragraphs as $paragraph)
                                @if(trim($paragraph))
                                    <p>{{ trim($paragraph) }}</p>
                                @endif
                            @endforeach
                        @else
                            <p>
                                Perusahaan Daerah Air Minum (PDAM) Halmahera Selatan adalah badan usaha milik daerah yang bertugas menyediakan layanan air bersih bagi masyarakat di wilayah Halmahera Selatan, Maluku Utara. Sebagai perusahaan daerah, PDAM Halmahera Selatan berkomitmen untuk memberikan pelayanan yang profesional, transparan, dan berkelanjutan.
                            </p>
                            <p>
                                PDAM Halmahera Selatan terus berupaya meningkatkan kualitas pelayanan air bersih kepada masyarakat melalui pengembangan infrastruktur, modernisasi sistem distribusi, dan peningkatan kapasitas produksi. Kami mengedepankan prinsip transparansi, akuntabilitas, dan partisipasi masyarakat dalam setiap aktivitas operasional perusahaan.
                            </p>
                            <p>
                                Sebagai penyedia layanan air bersih, PDAM Halmahera Selatan memahami betapa pentingnya akses terhadap air bersih bagi kehidupan sehari-hari masyarakat. Oleh karena itu, kami senantiasa berupaya untuk memastikan bahwa setiap pelanggan mendapatkan layanan yang terbaik dengan standar kualitas yang tinggi dan harga yang terjangkau.
                            </p>
                            <p>
                                PDAM Halmahera Selatan juga aktif dalam program-program peningkatan kualitas pelayanan, transparansi informasi, dan komunikasi dengan masyarakat. Kami berkomitmen untuk terus mengembangkan diri dan memberikan kontribusi positif bagi kesejahteraan masyarakat dan pembangunan daerah.
                            </p>
                        @endif
                    </div>
                </div>

                <!-- Right Column - Images -->
                <div class="space-y-6">
                    @if(isset($tentangKami) && $tentangKami && isset($tentangKami['images']) && count($tentangKami['images']) > 0)
                        @foreach($tentangKami['images'] as $index => $image)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="/storage/posts/{{ $image }}" alt="Image {{ $index + 1 }}" class="w-full h-auto object-cover">
                            </div>
                        @endforeach
                    @else
                        <!-- Default Images -->
                        <!-- Top Image - Building with PDAM -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&q=80" alt="Gedung PDAM" class="w-full h-auto object-cover">
                        </div>

                        <!-- Bottom Image - Logo TIRTA DHARMA -->
                        <div class="bg-white rounded-lg shadow-md p-8 flex flex-col items-center justify-center">
                            <svg class="w-32 h-32 mb-4" viewBox="0 0 100 100" fill="none">
                                <path d="M15 40 Q25 25 35 40 Q45 25 55 40 Q65 25 75 40 L75 60 Q65 75 55 60 Q45 75 35 60 Q25 75 15 60 Z" fill="#10B981" opacity="0.9"/>
                                <path d="M20 45 Q30 30 40 45 Q50 30 60 45 Q70 30 80 45 L80 55 Q70 70 60 55 Q50 70 40 55 Q30 70 20 55 Z" fill="#10B981" opacity="0.7"/>
                            </svg>
                            <div class="text-xl font-semibold text-green-600">TIRTA DHARMA</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
