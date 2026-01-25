@extends('informasi.layout')

@section('hero-title')
    <span>Informasi</span>
    <div class="w-24 h-1 bg-white mx-auto my-3"></div>
    <span>Berita</span>
@endsection

@section('content')
<!-- Berita Content -->
<div id="berita">
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column - Featured Article -->
                <div class="lg:col-span-2">
                    <article class="bg-white rounded-lg shadow-md p-8">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80" alt="PDAM Tingkatkan Pelayanan" class="article-image">
                        <h2 class="article-title">PDAM Tingkatkan Pelayanan Distribusi Air Bersih di Wilayah Perkotaan</h2>
                        <div class="article-date">Dec 11, 2025</div>
                        <div class="article-content">
                            <p>
                                Perusahaan Daerah Air Minum (PDAM) terus berkomitmen meningkatkan kualitas pelayanan air bersih kepada masyarakat. Salah satu upaya yang dilakukan adalah dengan optimalisasi sistem distribusi air di sejumlah wilayah perkotaan yang mengalami peningkatan kebutuhan air bersih.
                            </p>
                        </div>
                        <a href="#" class="read-more-btn">Read More</a>
                    </article>
                </div>

                <!-- Right Column - Recent Posts Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                        <h3 class="sidebar-title">Recent Post</h3>
                        
                        <div class="recent-post-item">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=200&q=80" alt="Post 1" class="recent-post-thumbnail">
                            <div class="recent-post-content">
                                <a href="#" class="recent-post-title">PDAM Tingkatkan Pelayanan Distribusi Air Bersih di Wilayah Perkotoan</a>
                                <div class="recent-post-date">Dec 11, 2025</div>
                            </div>
                        </div>

                        <div class="recent-post-item">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=200&q=80" alt="Post 2" class="recent-post-thumbnail">
                            <div class="recent-post-content">
                                <a href="#" class="recent-post-title">PEMBERITAHUAN GANGGUAN SEMENTARA LAYANAN PEMBAYARAN TAGIHAN AIR</a>
                                <div class="recent-post-date">July 22, 2026</div>
                            </div>
                        </div>

                        <div class="recent-post-item">
                            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=200&q=80" alt="Post 3" class="recent-post-thumbnail">
                            <div class="recent-post-content">
                                <a href="#" class="recent-post-title">PERBAIKAN PIPA TRANSMISI DI IPA PENGOK</a>
                                <div class="recent-post-date">June 22, 2028</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
