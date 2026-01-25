@extends('kontak.layout')

@section('hero-title')
    Kontak - Pengaduan Online
@endsection

@section('content')
<!-- Pengaduan Online Form -->
<div id="pengaduan-content" class="content-section">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-8 md:p-12">
            <h2 class="text-2xl md:text-3xl font-bold text-black uppercase mb-8">FORMULIR PENGADUAN ONLINE</h2>
            
            <form class="space-y-6">
                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-gray-800 font-semibold mb-2">Nama Lengkap:</label>
                    <input type="text" placeholder="Nama Lengkap....." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- No. Handphone -->
                <div>
                    <label class="block text-gray-800 font-semibold mb-2">No. Handphone:</label>
                    <input type="tel" placeholder="No. Handphone...." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-800 font-semibold mb-2">Email:</label>
                    <input type="email" placeholder="Email...." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Alamat -->
                <div>
                    <label class="block text-gray-800 font-semibold mb-2">Alamat:</label>
                    <input type="text" placeholder="Alamat Lengkap....." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Isi Pengaduan -->
                <div>
                    <label class="block text-gray-800 font-semibold mb-2">Isi Pengaduan:</label>
                    <textarea rows="6" placeholder="Isi Pengaduan..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none"></textarea>
                </div>

                <!-- Tanggal -->
                <div>
                    <label class="block text-gray-800 font-semibold mb-2">Tanggal:</label>
                    <div class="relative">
                        <input type="date" placeholder="dd/mm/yyyy" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <!-- Disclaimer -->
                <div class="mt-8">
                    <p class="text-sm text-gray-700 leading-relaxed">
                        Form pengaduan online dirancang dengan cermat, memberikan kemudahan akses bagi masyarakat. Data yang dikumpulkan digunakan sebagai pedoman yang penting dilakukan petugas PDAM untuk melakukan tindak lanjut, khususnya melalui komunikasi WhatsApp, tanpa menwajibkan tatap muka sesuai surat pengurusan.
                    </p>
                </div>

                <!-- Submit Button -->
                <div class="text-center mt-8">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-12 rounded-lg text-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
