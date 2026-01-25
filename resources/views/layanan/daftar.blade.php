@extends('layanan.layout')

@section('content')
<!-- Hero Section -->
<section class="relative h-[300px] md:h-[400px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1920&q=80');">
    <div class="hero-overlay absolute inset-0 bg-blue-900 bg-opacity-60"></div>
    <div class="relative z-10 container mx-auto px-4 h-full flex items-center justify-center">
        <div class="text-center text-white">
            <div class="w-24 h-1 bg-white mx-auto mb-4"></div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold">Layanan - Daftar Meteran Air Online</h1>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="bg-gray-50 py-12">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="bg-white rounded-lg shadow-sm p-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-8 uppercase">Formulir Daftar Meteran Air Online</h2>
            
            <form class="space-y-6">
                <div>
                    <label class="form-label">Nama Lengkap:</label>
                    <input type="text" class="form-input" placeholder="Nama Lengkap..." required>
                </div>

                <div>
                    <label class="form-label">No. Handphone:</label>
                    <input type="tel" class="form-input" placeholder="No. Handphone..." required>
                </div>

                <div>
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-input" placeholder="Email..." required>
                </div>

                <div>
                    <label class="form-label">Alamat:</label>
                    <textarea class="form-input" rows="4" placeholder="Alamat Lengkap..." required></textarea>
                </div>

                <div>
                    <label class="form-label">Tanggal:</label>
                    <div class="relative">
                        <input type="date" class="form-input" required>
                    </div>
                </div>

                <div class="text-sm text-gray-600 mt-6 p-4 bg-gray-50 rounded-lg">
                    <p>Dengan mengisi formulir ini, Anda menyetujui syarat dan ketentuan yang berlaku. Data yang Anda berikan akan digunakan untuk keperluan administrasi sambungan air baru.</p>
                </div>

                <div class="pt-4">
                    <button type="submit" class="submit-button">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
