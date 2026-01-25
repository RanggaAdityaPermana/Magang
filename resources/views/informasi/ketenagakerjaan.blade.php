@extends('informasi.layout')

@section('hero-title')
    <span>Informasi</span>
    <div class="w-24 h-1 bg-white mx-auto my-3"></div>
    <span>Ketenagakerjaan</span>
@endsection

@section('content')
<!-- Informasi Ketenagakerjaan Content -->
<div id="ketenagakerjaan">
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bg-white rounded-lg shadow-md p-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-8">Jumlah Tenaga Kerja PDAM Halmahera Selatan</h2>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-6 py-4 text-left">
                                    <div class="border-b-2 border-green-500 pb-2 inline-block text-gray-800 font-semibold">Status Tenaga Kerja</div>
                                </th>
                                <th class="border border-gray-300 px-6 py-4 text-left">
                                    <div class="border-b-2 border-green-500 pb-2 inline-block text-green-500 font-semibold">Jumlah</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-6 py-4 text-gray-800">Direksi</td>
                                <td class="border border-gray-300 px-6 py-4 text-green-500 font-semibold">2</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-6 py-4 text-gray-800">Pegawai Tetap</td>
                                <td class="border border-gray-300 px-6 py-4 text-green-500 font-semibold">15</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-6 py-4 text-gray-800">Pegawai Kontrak</td>
                                <td class="border border-gray-300 px-6 py-4 text-green-500 font-semibold">8</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-6 py-4 text-gray-800 font-semibold">Jumlah</td>
                                <td class="border border-gray-300 px-6 py-4 text-green-500 font-semibold">25</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
