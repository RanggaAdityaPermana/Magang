@extends('informasi.layout')

@section('hero-title')
    Informasi - Kerja Sama
@endsection

@section('content')
<!-- Informasi Kerja Sama Content -->
<div id="kerjasama">
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="content-card">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Informasi Kerja Sama</h2>
                <div class="space-y-6">
                    <p class="text-gray-700 leading-relaxed">
                        PDAM Halmahera Selatan membuka peluang kerja sama dengan berbagai pihak untuk pengembangan infrastruktur air bersih dan peningkatan kualitas pelayanan. Kami mengundang institusi, perusahaan, dan organisasi yang memiliki visi sejalan untuk berkolaborasi.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Bidang Kerja Sama:</h4>
                            <ul class="space-y-2 text-gray-700">
                                <li>• Pengembangan Infrastruktur</li>
                                <li>• Teknologi Pengolahan Air</li>
                                <li>• Program CSR</li>
                                <li>• Riset dan Pengembangan</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-gray-800 mb-3">Kontak Kerja Sama:</h4>
                            <p class="text-gray-700 mb-2">Email: kerjasama@pdamhalmahera.go.id</p>
                            <p class="text-gray-700">Telepon: +62 888 888 888</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
