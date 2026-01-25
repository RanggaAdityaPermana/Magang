@extends('profile.layout')

@section('hero-title')
    <span>Profil</span>
    <div class="w-24 h-1 bg-white mx-auto my-3"></div>
    <span>Visi Misi</span>
@endsection

@section('content')
<!-- Visi Misi Content -->
<div id="visi-misi">
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="content-box">
                <!-- Visi -->
                <div class="mb-16">
                    <div class="section-icon visi-icon">
                        <!-- Water droplet with circular arrows icon -->
                        <svg class="w-16 h-16 text-white" viewBox="0 0 80 80" fill="none">
                            <!-- Water droplet -->
                            <path d="M40 12C40 12 28 24 28 36C28 48 34 54 40 60C46 54 52 48 52 36C52 24 40 12 40 12Z" fill="white"/>
                            <!-- Circular arrows around -->
                            <circle cx="40" cy="40" r="28" stroke="white" stroke-width="2.5" fill="none"/>
                            <circle cx="40" cy="40" r="28" stroke="white" stroke-width="2" fill="none" stroke-dasharray="3 4" opacity="0.8"/>
                            <!-- Arrow indicators -->
                            <path d="M40 12 L44 18 L40 16 Z" fill="white"/>
                            <path d="M68 40 L62 36 L66 40 Z" fill="white"/>
                            <path d="M40 68 L36 62 L40 64 Z" fill="white"/>
                            <path d="M12 40 L18 44 L16 40 Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="text-center mb-6">
                        <button class="visi-button">
                            Visi
                        </button>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg text-center max-w-4xl mx-auto">
                        Menjadi perusahaan penyedia layanan air minum yang profesional, andal, dan berkelanjutan, serta mampu memberikan pelayanan air bersih yang berkualitas, merata, dan berkesinambungan guna mendukung peningkatan kualitas hidup dan kesejahteraan masyarakat.
                    </p>
                </div>

                <!-- Misi -->
                <div>
                    <div class="section-icon misi-icon">
                        <!-- Water pipe/faucet icon -->
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 13v3m0 0v3m0-3h3m-3 0H9" />
                        </svg>
                    </div>
                    <div class="text-center mb-6">
                        <button class="misi-button">
                            Misi
                        </button>
                    </div>
                    <ol class="space-y-4 text-gray-700 leading-relaxed text-lg max-w-4xl mx-auto">
                        <li class="flex items-start gap-4">
                            <span class="font-bold text-blue-600 text-xl flex-shrink-0 w-8">1.</span>
                            <span class="flex-1">Menyediakan layanan air bersih yang berkualitas, aman, dan merata bagi seluruh lapisan masyarakat.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="font-bold text-blue-600 text-xl flex-shrink-0 w-8">2.</span>
                            <span class="flex-1">Meningkatkan kualitas pelayanan publik melalui pengelolaan sistem yang efektif, efisien, dan transparan.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="font-bold text-blue-600 text-xl flex-shrink-0 w-8">3.</span>
                            <span class="flex-1">Mengelola sumber daya air secara bertanggung jawab dan berkelanjutan untuk menjaga kelestarian lingkungan.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="font-bold text-blue-600 text-xl flex-shrink-0 w-8">4.</span>
                            <span class="flex-1">Mengembangkan kompetensi sumber daya manusia guna mendukung kinerja dan profesionalisme perusahaan.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <span class="font-bold text-blue-600 text-xl flex-shrink-0 w-8">5.</span>
                            <span class="flex-1">Meningkatkan kepuasan pelanggan melalui pelayanan yang responsif dan berorientasi pada kebutuhan masyarakat.</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
