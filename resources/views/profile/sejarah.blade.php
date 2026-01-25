@extends('profile.layout')

@section('hero-title')
    <span>Profil</span>
    <div class="w-24 h-1 bg-white mx-auto my-3"></div>
    <span>Sejarah</span>
@endsection

@section('content')
<!-- Sejarah Content -->
<div id="sejarah">
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <h2 class="sejarah-title">SEJARAH PDAM</h2>
                <div class="bg-white rounded-lg shadow-md p-8 md:p-12">
                    <!-- First Image -->
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800&q=80" alt="Pekerja PDAM" class="sejarah-image" />
                    
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="mb-6 text-lg">
                            PDAM Halmahera Selatan didirikan sebagai respons terhadap kebutuhan masyarakat akan penyediaan air bersih yang berkualitas di wilayah Halmahera Selatan. Sejak awal berdirinya, perusahaan telah berkomitmen untuk menjadi penyedia layanan air minum yang profesional dan terpercaya.
                        </p>
                        <p class="mb-6 text-lg">
                            Perjalanan perusahaan dimulai dengan fokus pada pengembangan infrastruktur air bersih dan peningkatan kapasitas produksi untuk memenuhi kebutuhan masyarakat yang terus berkembang. Melalui berbagai program pengembangan dan modernisasi, PDAM Halmahera Selatan terus memperluas jangkauan layanan dan meningkatkan kualitas air yang disediakan.
                        </p>
                    </div>

                    <!-- Second Image -->
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80" alt="Infrastruktur PDAM" class="sejarah-image" />
                    
                    <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                        <p class="mb-6 text-lg">
                            Sepanjang perjalanannya, perusahaan telah menghadapi berbagai tantangan dan terus berinovasi untuk memberikan layanan terbaik. Dengan dukungan dari pemerintah daerah dan partisipasi aktif masyarakat, PDAM Halmahera Selatan terus berkembang dan berkomitmen untuk menjadi perusahaan air minum yang unggul di wilayah Maluku Utara.
                        </p>
                        <p class="text-lg">
                            Saat ini, PDAM Halmahera Selatan terus berupaya meningkatkan kualitas pelayanan, memperluas jaringan distribusi, dan mengembangkan teknologi pengolahan air untuk memastikan setiap rumah tangga mendapatkan akses terhadap air bersih yang berkualitas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
