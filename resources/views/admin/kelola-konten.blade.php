<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kelola Konten - PDAM Halmahera Selatan</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: #F3F4F6;
        }
        .header {
            background: white;
            padding: 16px 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .logo-icon {
            width: 50px;
            height: 50px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo-m {
            position: absolute;
            width: 20px;
            height: 30px;
            background: #10B981;
            clip-path: polygon(50% 0%, 0% 100%, 50% 85%, 100% 100%);
        }
        .logo-m:nth-child(1) {
            left: 5px;
            top: 10px;
            transform: rotate(-18deg);
        }
        .logo-m:nth-child(2) {
            left: 25px;
            top: 8px;
            transform: rotate(0deg);
        }
        .logo-m:nth-child(3) {
            left: 45px;
            top: 10px;
            transform: rotate(18deg);
        }
        .logo-circle {
            position: absolute;
            width: 24px;
            height: 24px;
            background: #3B82F6;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        .logo-text {
            font-size: 12px;
            font-weight: 600;
            color: #10B981;
        }
        .company-name {
            font-size: 20px;
            font-weight: 700;
            color: #1F2937;
        }
        .layout-container {
            display: flex;
            min-height: calc(100vh - 73px);
        }
        .sidebar {
            width: 250px;
            background: #1E3A8A;
            padding: 24px 0;
            display: flex;
            flex-direction: column;
        }
        .sidebar-logo {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .sidebar-logo-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 12px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .sidebar-logo-icon .logo-m {
            width: 24px;
            height: 36px;
        }
        .sidebar-logo-icon .logo-m:nth-child(1) {
            left: 8px;
            top: 12px;
        }
        .sidebar-logo-icon .logo-m:nth-child(2) {
            left: 32px;
            top: 10px;
        }
        .sidebar-logo-icon .logo-m:nth-child(3) {
            left: 56px;
            top: 12px;
        }
        .sidebar-logo-icon .logo-circle {
            width: 28px;
            height: 28px;
        }
        .sidebar-logo-text {
            font-size: 14px;
            font-weight: 600;
            color: white;
        }
        .sidebar-nav {
            flex: 1;
        }
        .sidebar-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 24px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 15px;
        }
        .sidebar-item:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        .sidebar-item.active {
            background: #3B82F6;
        }
        .sidebar-icon {
            width: 20px;
            height: 20px;
            font-size: 18px;
        }
        .sidebar-logout {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 16px;
            margin-top: 16px;
        }
        .main-content {
            flex: 1;
            padding: 32px;
            background: white;
        }
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 24px;
        }
        .primary-tabs {
            display: flex;
            gap: 0;
            border-bottom: 2px solid #E5E7EB;
            margin-bottom: 20px;
        }
        .primary-tab {
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            color: #6B7280;
            text-decoration: none;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
        .primary-tab:hover {
            color: #3B82F6;
        }
        .primary-tab.active {
            color: #3B82F6;
            border-bottom-color: #3B82F6;
        }
        .sub-tabs {
            display: flex;
            gap: 12px;
            margin-bottom: 24px;
        }
        .sub-tab {
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            color: #1F2937;
            text-decoration: none;
            background: white;
            border: 1px solid #D1D5DB;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        .sub-tab:hover {
            border-color: #3B82F6;
            color: #3B82F6;
        }
        .sub-tab.active {
            background: #3B82F6;
            color: white;
            border-color: #3B82F6;
        }
        .sub-tab {
            cursor: pointer;
        }
        .primary-tab {
            cursor: pointer;
        }
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        .create-button {
            background: #3B82F6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .create-button:hover {
            background: #2563EB;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }
        .content-item {
            background: white;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            padding: 24px;
            margin-bottom: 24px;
        }
        .content-heading {
            font-size: 20px;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 20px;
        }
        .content-field {
            margin-bottom: 16px;
        }
        .content-label {
            font-size: 14px;
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 8px;
            display: block;
        }
        .content-value {
            font-size: 16px;
            color: #1F2937;
            line-height: 1.6;
        }
        .content-images {
            display: flex;
            gap: 16px;
            margin-top: 8px;
        }
        .image-thumbnail {
            text-align: center;
        }
        .image-placeholder {
            width: auto;
            min-width: 150px;
            min-height: 150px;
            max-width: 100%;
            background: #F3F4F6;
            border: 1px solid #D1D5DB;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 8px;
            position: relative;
            overflow: hidden;
        }
        .logo-preview {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .logo-preview .logo-m {
            width: 30px;
            height: 45px;
        }
        .logo-preview .logo-m:nth-child(1) {
            left: 20px;
            top: 20px;
        }
        .logo-preview .logo-m:nth-child(2) {
            left: 60px;
            top: 18px;
        }
        .logo-preview .logo-m:nth-child(3) {
            left: 100px;
            top: 20px;
        }
        .logo-preview .logo-circle {
            width: 35px;
            height: 35px;
        }
        .building-preview {
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, #E5E7EB 0%, #D1D5DB 100%);
            display: flex;
            align-items: flex-end;
            justify-content: center;
            position: relative;
        }
        .building-shape {
            width: 80%;
            height: 60%;
            background: #9CA3AF;
            border-radius: 4px 4px 0 0;
            position: relative;
        }
        .building-window {
            position: absolute;
            width: 12px;
            height: 12px;
            background: #F3F4F6;
            border-radius: 2px;
        }
        .building-window:nth-child(1) { top: 15px; left: 15px; }
        .building-window:nth-child(2) { top: 15px; right: 15px; }
        .building-window:nth-child(3) { bottom: 15px; left: 15px; }
        .building-window:nth-child(4) { bottom: 15px; right: 15px; }
        .image-name {
            font-size: 12px;
            color: #6B7280;
        }
        .content-actions {
            display: flex;
            gap: 12px;
            margin-top: 24px;
        }
        .action-button {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .update-button {
            background: #3B82F6;
            color: white;
        }
        .update-button:hover {
            background: #2563EB;
        }
        .delete-button {
            background: #EF4444;
            color: white;
        }
        .delete-button:hover {
            background: #DC2626;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }
        .modal-content {
            background-color: white;
            margin: 5% auto;
            padding: 32px;
            border-radius: 12px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        .modal-title {
            font-size: 24px;
            font-weight: 700;
            color: #1F2937;
        }
        .close-modal {
            font-size: 28px;
            font-weight: 300;
            color: #6B7280;
            cursor: pointer;
            border: none;
            background: none;
        }
        .close-modal:hover {
            color: #1F2937;
        }
        .form-group-modal {
            margin-bottom: 20px;
        }
        .form-label-modal {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 8px;
        }
        .form-input-modal {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #D1D5DB;
            border-radius: 6px;
            font-size: 14px;
            color: #1F2937;
            background: white;
            transition: all 0.3s ease;
        }
        .form-input-modal:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .form-textarea-modal {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #D1D5DB;
            border-radius: 6px;
            font-size: 14px;
            color: #1F2937;
            background: white;
            min-height: 120px;
            resize: vertical;
            transition: all 0.3s ease;
        }
        .form-textarea-modal:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        .modal-actions {
            display: flex;
            gap: 12px;
            justify-content: flex-end;
            margin-top: 24px;
        }
        .modal-button {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .modal-button-cancel {
            background: #F3F4F6;
            color: #1F2937;
        }
        .modal-button-cancel:hover {
            background: #E5E7EB;
        }
        .modal-button-submit {
            background: #3B82F6;
            color: white;
        }
        .modal-button-submit:hover {
            background: #2563EB;
        }
        .posts-container {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .image-preview-item {
            position: relative;
            width: 100px;
            height: 100px;
            border: 1px solid #D1D5DB;
            border-radius: 6px;
            overflow: hidden;
        }
        .image-preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .image-preview-item .remove-image {
            position: absolute;
            top: 4px;
            right: 4px;
            background: #EF4444;
            color: white;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            cursor: pointer;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .current-image-item {
            display: inline-block;
            margin: 4px;
            position: relative;
        }
        .current-image-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 1px solid #D1D5DB;
            border-radius: 6px;
        }
        .current-image-item .remove-current-image {
            position: absolute;
            top: 4px;
            right: 4px;
            background: #EF4444;
            color: white;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            cursor: pointer;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo-container">
            <div class="logo-icon">
                <div class="logo-m"></div>
                <div class="logo-m"></div>
                <div class="logo-m"></div>
                <div class="logo-circle"></div>
            </div>
            <div class="logo-text">TIRTA DHARMA</div>
        </div>
        <div class="company-name">PDAM HALMERA SELATAN</div>
    </header>

    <!-- Layout Container -->
    <div class="layout-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <div class="sidebar-logo-icon">
                    <div class="logo-m"></div>
                    <div class="logo-m"></div>
                    <div class="logo-m"></div>
                    <div class="logo-circle"></div>
                </div>
                <div class="sidebar-logo-text">TIRTA DHARMA</div>
            </div>
            <nav class="sidebar-nav">
                <a href="/dashboard" class="sidebar-item">
                    <span class="sidebar-icon">🏠</span>
                    <span>Dashboard</span>
                </a>
                <a href="/kelola-konten" class="sidebar-item active">
                    <span class="sidebar-icon">🗂️</span>
                    <span>Kelola Konten</span>
                </a>
                <a href="#" class="sidebar-item">
                    <span class="sidebar-icon">💬</span>
                    <span>Pengaduan</span>
                </a>
                <a href="#" class="sidebar-item">
                    <span class="sidebar-icon">💦</span>
                    <span>Meteran Air Baru</span>
                </a>
            </nav>
            <div class="sidebar-logout">
                <a href="/login" class="sidebar-item">
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <h1 class="page-title">Kelola Konten</h1>
            
            <!-- Primary Tabs -->
            <div class="primary-tabs">
                <a href="#" class="primary-tab" data-tab="profil" onclick="switchPrimaryTab('profil'); return false;">Profil</a>
                <a href="#" class="primary-tab active" data-tab="layanan" onclick="switchPrimaryTab('layanan'); return false;">Layanan</a>
                <a href="#" class="primary-tab" data-tab="informasi" onclick="switchPrimaryTab('informasi'); return false;">Informasi</a>
                <a href="#" class="primary-tab" data-tab="galeri" onclick="switchPrimaryTab('galeri'); return false;">Galeri</a>
            </div>

            <!-- Sub Tabs for Profil -->
            <div id="sub-tabs-profil" class="sub-tabs" style="display: none;">
                <a href="#" class="sub-tab" data-sub="tentang-kami" onclick="switchSubTab('tentang-kami'); return false;">Tentang Kami</a>
                <a href="#" class="sub-tab" data-sub="visi-misi" onclick="switchSubTab('visi-misi'); return false;">Visi Misi</a>
                <a href="#" class="sub-tab" data-sub="sejarah" onclick="switchSubTab('sejarah'); return false;">Sejarah</a>
                <a href="#" class="sub-tab" data-sub="struktur-organisasi" onclick="switchSubTab('struktur-organisasi'); return false;">Struktur Organisasi</a>
            </div>

            <!-- Sub Tabs for Layanan -->
            <div id="sub-tabs-layanan" class="sub-tabs">
                <a href="#" class="sub-tab active" data-sub="tarif-air" onclick="switchSubTab('tarif-air'); return false;">Tarif Air</a>
                <a href="#" class="sub-tab" data-sub="daftar-meteran" onclick="switchSubTab('daftar-meteran'); return false;">Daftar Meteran Air Online</a>
            </div>

            <!-- Sub Tabs for Informasi -->
            <div id="sub-tabs-informasi" class="sub-tabs" style="display: none;">
                <a href="#" class="sub-tab" data-sub="berita" onclick="switchSubTab('berita'); return false;">Berita</a>
                <a href="#" class="sub-tab" data-sub="pengumuman" onclick="switchSubTab('pengumuman'); return false;">Pengumuman</a>
                <a href="#" class="sub-tab" data-sub="ketenagakerjaan" onclick="switchSubTab('ketenagakerjaan'); return false;">Ketenagakerjaan</a>
                <a href="#" class="sub-tab" data-sub="magang" onclick="switchSubTab('magang'); return false;">Magang</a>
            </div>

            <!-- Sub Tabs for Galeri -->
            <div id="sub-tabs-galeri" class="sub-tabs" style="display: none;">
                <a href="#" class="sub-tab active" data-sub="galeri" onclick="switchSubTab('galeri'); return false;">Galeri</a>
            </div>

            <!-- Content Header with Create Button -->
            <div class="content-header">
                <div></div>
                <button class="create-button" onclick="openCreateModal()">Create New Post</button>
            </div>

            <!-- Posts Container -->
            <div class="posts-container" id="posts-container">
                <!-- Posts will be loaded here via JavaScript -->
            </div>
        </main>
    </div>

    <!-- Create Post Modal -->
    <div id="createModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Create New Post</h2>
                <button class="close-modal" onclick="closeCreateModal()">&times;</button>
            </div>
            <form id="createPostForm" method="POST" action="/kelola-konten/create" enctype="multipart/form-data">
                @csrf
                <div class="form-group-modal">
                    <label class="form-label-modal" for="judul">Judul:</label>
                    <input type="text" id="judul" name="judul" class="form-input-modal" required placeholder="Masukkan judul post">
                </div>
                <div class="form-group-modal">
                    <label class="form-label-modal" for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-textarea-modal" placeholder="Masukkan deskripsi post (gunakan Enter untuk paragraf baru) - Opsional"></textarea>
                </div>
                <div class="form-group-modal">
                    <label class="form-label-modal" for="kategori">Kategori:</label>
                    <select id="kategori" name="kategori" class="form-input-modal" required>
                        <optgroup label="Profil">
                            <option value="tentang-kami">Tentang Kami</option>
                            <option value="visi-misi">Visi Misi</option>
                            <option value="sejarah">Sejarah</option>
                            <option value="struktur-organisasi">Struktur Organisasi</option>
                        </optgroup>
                        <optgroup label="Layanan">
                            <option value="tarif-air">Tarif Air</option>
                            <option value="daftar-meteran">Daftar Meteran Air Online</option>
                        </optgroup>
                        <optgroup label="Informasi">
                            <option value="berita">Berita</option>
                            <option value="pengumuman">Pengumuman</option>
                            <option value="ketenagakerjaan">Ketenagakerjaan</option>
                            <option value="magang">Magang</option>
                        </optgroup>
                        <optgroup label="Galeri">
                            <option value="galeri">Galeri</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group-modal">
                    <label class="form-label-modal" for="images">Images (Multiple):</label>
                    <input type="file" id="images" name="images[]" class="form-input-modal" accept="image/*" multiple>
                    <small style="color: #6B7280; font-size: 12px; display: block; margin-top: 4px;">Anda dapat memilih multiple gambar (maksimal 5 gambar)</small>
                    <div id="image-preview-create" style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: 12px;"></div>
                </div>
                <div class="modal-actions">
                    <button type="button" class="modal-button modal-button-cancel" onclick="closeCreateModal()">Cancel</button>
                    <button type="submit" class="modal-button modal-button-submit">Create Post</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Update Post Modal -->
    <div id="updateModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Update Post</h2>
                <button class="close-modal" onclick="closeUpdateModal()">&times;</button>
            </div>
            <form id="updatePostForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="update_post_id" name="id">
                <div class="form-group-modal">
                    <label class="form-label-modal" for="update_judul">Judul:</label>
                    <input type="text" id="update_judul" name="judul" class="form-input-modal" required placeholder="Masukkan judul post">
                </div>
                <div class="form-group-modal">
                    <label class="form-label-modal" for="update_deskripsi">Deskripsi:</label>
                    <textarea id="update_deskripsi" name="deskripsi" class="form-textarea-modal" required placeholder="Masukkan deskripsi post (gunakan Enter untuk paragraf baru)"></textarea>
                </div>
                <div class="form-group-modal">
                    <label class="form-label-modal" for="update_kategori">Kategori:</label>
                    <select id="update_kategori" name="kategori" class="form-input-modal" required>
                        <optgroup label="Profil">
                            <option value="tentang-kami">Tentang Kami</option>
                            <option value="visi-misi">Visi Misi</option>
                            <option value="sejarah">Sejarah</option>
                            <option value="struktur-organisasi">Struktur Organisasi</option>
                        </optgroup>
                        <optgroup label="Layanan">
                            <option value="tarif-air">Tarif Air</option>
                            <option value="daftar-meteran">Daftar Meteran Air Online</option>
                        </optgroup>
                        <optgroup label="Informasi">
                            <option value="berita">Berita</option>
                            <option value="pengumuman">Pengumuman</option>
                            <option value="ketenagakerjaan">Ketenagakerjaan</option>
                            <option value="magang">Magang</option>
                        </optgroup>
                        <optgroup label="Galeri">
                            <option value="galeri">Galeri</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group-modal">
                    <label class="form-label-modal" for="update_images">Images (Multiple):</label>
                    <input type="file" id="update_images" name="images[]" class="form-input-modal" accept="image/*" multiple>
                    <small style="color: #6B7280; font-size: 12px; display: block; margin-top: 4px;">Pilih gambar baru untuk mengganti (opsional). Anda dapat memilih multiple gambar (maksimal 5 gambar)</small>
                    <div id="current-images" style="margin-top: 12px;"></div>
                    <div id="image-preview-update" style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: 12px;"></div>
                </div>
                <div class="modal-actions">
                    <button type="button" class="modal-button modal-button-cancel" onclick="closeUpdateModal()">Cancel</button>
                    <button type="submit" class="modal-button modal-button-submit">Update Post</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Load posts on page load
        document.addEventListener('DOMContentLoaded', function() {
            loadPosts();
        });

        let currentPostId = null;
        let currentPrimaryTab = 'layanan';
        let currentSubTab = 'tarif-air';

        function switchPrimaryTab(tab) {
            currentPrimaryTab = tab;
            
            // Update primary tab active state
            document.querySelectorAll('.primary-tab').forEach(t => t.classList.remove('active'));
            document.querySelector(`.primary-tab[data-tab="${tab}"]`).classList.add('active');
            
            // Show/hide sub-tabs
            document.querySelectorAll('[id^="sub-tabs-"]').forEach(div => div.style.display = 'none');
            const subTabsDiv = document.getElementById(`sub-tabs-${tab}`);
            if (subTabsDiv) {
                subTabsDiv.style.display = 'flex';
                // Set first sub-tab as active
                const firstSubTab = subTabsDiv.querySelector('.sub-tab');
                if (firstSubTab) {
                    subTabsDiv.querySelectorAll('.sub-tab').forEach(t => t.classList.remove('active'));
                    firstSubTab.classList.add('active');
                    currentSubTab = firstSubTab.getAttribute('data-sub');
                }
            }
            
            loadPosts();
        }

        function switchSubTab(sub) {
            currentSubTab = sub;
            
            // Update sub-tab active state
            const subTabsDiv = document.getElementById(`sub-tabs-${currentPrimaryTab}`);
            if (subTabsDiv) {
                subTabsDiv.querySelectorAll('.sub-tab').forEach(t => t.classList.remove('active'));
                subTabsDiv.querySelector(`.sub-tab[data-sub="${sub}"]`).classList.add('active');
            }
            
            loadPosts();
        }

        function openCreateModal() {
            // Set default kategori based on current tab
            const kategoriSelect = document.getElementById('kategori');
            if (kategoriSelect) {
                const kategoriMap = {
                    'tentang-kami': 'tentang-kami',
                    'visi-misi': 'visi-misi',
                    'sejarah': 'sejarah',
                    'struktur-organisasi': 'struktur-organisasi',
                    'tarif-air': 'tarif-air',
                    'daftar-meteran': 'daftar-meteran',
                    'berita': 'berita',
                    'pengumuman': 'pengumuman',
                    'ketenagakerjaan': 'ketenagakerjaan',
                    'magang': 'magang',
                    'galeri': 'galeri'
                };
                const defaultKategori = kategoriMap[currentSubTab] || currentSubTab;
                if (kategoriSelect.querySelector(`option[value="${defaultKategori}"]`)) {
                    kategoriSelect.value = defaultKategori;
                }
            }
            document.getElementById('createModal').style.display = 'block';
        }

        function closeCreateModal() {
            document.getElementById('createModal').style.display = 'none';
            document.getElementById('createPostForm').reset();
            document.getElementById('image-preview-create').innerHTML = '';
            document.getElementById('images').value = '';
        }

        // Image preview for create form
        document.getElementById('images').addEventListener('change', function(e) {
            const preview = document.getElementById('image-preview-create');
            preview.innerHTML = '';
            const files = Array.from(e.target.files).slice(0, 5); // Max 5 images
            
            files.forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'image-preview-item';
                        div.innerHTML = `
                            <img src="${e.target.result}" alt="Preview">
                            <button type="button" class="remove-image" onclick="removeImagePreview(${index}, 'create')">×</button>
                        `;
                        preview.appendChild(div);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        function removeImagePreview(index, type) {
            const input = type === 'create' ? document.getElementById('images') : document.getElementById('update_images');
            const dt = new DataTransfer();
            const files = Array.from(input.files);
            
            files.forEach((file, i) => {
                if (i !== index) {
                    dt.items.add(file);
                }
            });
            
            input.files = dt.files;
            input.dispatchEvent(new Event('change'));
        }

        function openUpdateModal(id) {
            currentPostId = id;
            // Fetch post data
            fetch('/kelola-konten/posts')
                .then(response => response.json())
                .then(data => {
                    const post = data.find(p => p.id == id);
                    if (post) {
                        document.getElementById('update_post_id').value = post.id;
                        document.getElementById('update_judul').value = post.judul;
                        document.getElementById('update_deskripsi').value = post.deskripsi;
                        document.getElementById('update_kategori').value = post.kategori;
                        
                        // Display current images
                        const currentImagesDiv = document.getElementById('current-images');
                        if (post.images && post.images.length > 0) {
                            currentImagesDiv.innerHTML = '<label style="font-size: 12px; color: #6B7280; display: block; margin-bottom: 8px;">Current Images:</label>';
                            post.images.forEach((image, index) => {
                                const imgDiv = document.createElement('div');
                                imgDiv.className = 'current-image-item';
                                imgDiv.innerHTML = `
                                    <img src="/storage/posts/${image}" alt="Current image">
                                    <button type="button" class="remove-current-image" onclick="removeCurrentImage(${post.id}, '${image}')">×</button>
                                `;
                                currentImagesDiv.appendChild(imgDiv);
                            });
                        } else {
                            currentImagesDiv.innerHTML = '';
                        }
                        
                        document.getElementById('updateModal').style.display = 'block';
                    } else {
                        alert('Post tidak ditemukan');
                    }
                })
                .catch(error => {
                    console.error('Error loading post:', error);
                    alert('Gagal memuat data post');
                });
        }

        function closeUpdateModal() {
            document.getElementById('updateModal').style.display = 'none';
            document.getElementById('updatePostForm').reset();
            document.getElementById('image-preview-update').innerHTML = '';
            document.getElementById('current-images').innerHTML = '';
            document.getElementById('update_images').value = '';
            currentPostId = null;
        }

        // Image preview for update form
        document.getElementById('update_images').addEventListener('change', function(e) {
            const preview = document.getElementById('image-preview-update');
            preview.innerHTML = '';
            const files = Array.from(e.target.files).slice(0, 5); // Max 5 images
            
            files.forEach((file, index) => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'image-preview-item';
                        div.innerHTML = `
                            <img src="${e.target.result}" alt="Preview">
                            <button type="button" class="remove-image" onclick="removeImagePreview(${index}, 'update')">×</button>
                        `;
                        preview.appendChild(div);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        function removeCurrentImage(postId, imageName) {
            if (confirm('Apakah Anda yakin ingin menghapus gambar ini?')) {
                fetch(`/kelola-konten/remove-image/${postId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || document.querySelector('input[name="_token"]').value,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ image: imageName })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        openUpdateModal(postId); // Reload modal
                    } else {
                        alert('Gagal menghapus gambar');
                    }
                })
                .catch(error => {
                    console.error('Error removing image:', error);
                    alert('Gagal menghapus gambar');
                });
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const createModal = document.getElementById('createModal');
            const updateModal = document.getElementById('updateModal');
            if (event.target == createModal) {
                closeCreateModal();
            }
            if (event.target == updateModal) {
                closeUpdateModal();
            }
        }

        function loadPosts() {
            // Map current tab to kategori
            const kategoriMap = {
                'tentang-kami': 'tentang-kami',
                'visi-misi': 'visi-misi',
                'sejarah': 'sejarah',
                'struktur-organisasi': 'struktur-organisasi',
                'tarif-air': 'tarif-air',
                'daftar-meteran': 'daftar-meteran',
                'berita': 'berita',
                'pengumuman': 'pengumuman',
                'ketenagakerjaan': 'ketenagakerjaan',
                'magang': 'magang',
                'galeri': 'galeri'
            };
            
            const kategori = kategoriMap[currentSubTab] || currentSubTab;
            
            fetch(`/kelola-konten/posts?kategori=${kategori}`)
                .then(response => response.json())
                .then(data => {
                    const container = document.getElementById('posts-container');
                    container.innerHTML = '';
                    
                    if (data.length === 0) {
                        container.innerHTML = `<div class="content-item"><p>Belum ada post untuk kategori "${currentSubTab}". Klik "Create New Post" untuk membuat post baru.</p></div>`;
                        return;
                    }
                    
                    data.forEach((post, index) => {
                        const postElement = document.createElement('div');
                        postElement.className = 'content-item';
                        const paragraphs = post.deskripsi ? post.deskripsi.split('\n').filter(p => p.trim()).map(p => '<p>' + p.trim() + '</p>').join('') : '';
                        const deskripsiHtml = post.deskripsi ? `
                            <div class="content-field">
                                <span class="content-label">Deskripsi:</span>
                                <div class="content-value">${paragraphs}</div>
                            </div>
                        ` : '';
                        const imagesHtml = post.images && post.images.length > 0 ? `
                            <div class="content-field">
                                <span class="content-label">Image:</span>
                                <div class="content-images">
                                    ${post.images.map(img => `
                                        <div class="image-thumbnail">
                                            <div class="image-placeholder" style="background: white; padding: 8px; min-height: 200px; display: flex; align-items: center; justify-content: center;">
                                                <img src="/storage/posts/${img}" alt="${img}" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                                            </div>
                                            <div class="image-name">${img}</div>
                                        </div>
                                    `).join('')}
                                </div>
                            </div>
                        ` : '';
                        postElement.innerHTML = `
                            <h2 class="content-heading">post-${String(index + 1).padStart(2, '0')}</h2>
                            <div class="content-field">
                                <span class="content-label">Judul:</span>
                                <div class="content-value">${post.judul}</div>
                            </div>
                            ${deskripsiHtml}
                            ${imagesHtml}
                            <div class="content-actions">
                                <button class="action-button update-button" onclick="updatePost(${post.id})">Update</button>
                                <button class="action-button delete-button" onclick="deletePost(${post.id})">Delete</button>
                            </div>
                        `;
                        container.appendChild(postElement);
                    });
                })
                .catch(error => {
                    console.error('Error loading posts:', error);
                });
        }

        function deletePost(id) {
            if (confirm('Apakah Anda yakin ingin menghapus post ini?')) {
                fetch(`/kelola-konten/delete/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || document.querySelector('input[name="_token"]').value
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        loadPosts();
                        alert('Post berhasil dihapus!');
                    } else {
                        alert('Gagal menghapus post: ' + (data.message || 'Unknown error'));
                    }
                })
                .catch(error => {
                    console.error('Error deleting post:', error);
                    alert('Gagal menghapus post');
                });
            }
        }

        function updatePost(id) {
            openUpdateModal(id);
        }

        // Handle create form submission
        document.getElementById('createPostForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.disabled = true;
            submitButton.textContent = 'Creating...';
            
            // Add CSRF token to FormData
            formData.append('_token', document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || document.querySelector('input[name="_token"]').value);
            
            fetch('/kelola-konten/create', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                submitButton.disabled = false;
                submitButton.textContent = originalText;
                if (data.success) {
                    closeCreateModal();
                    loadPosts();
                    alert('Post berhasil dibuat!');
                } else {
                    alert('Gagal membuat post: ' + (data.message || 'Unknown error'));
                }
            })
            .catch(error => {
                console.error('Error creating post:', error);
                submitButton.disabled = false;
                submitButton.textContent = originalText;
                alert('Gagal membuat post');
            });
        });

        // Handle update form submission
        document.getElementById('updatePostForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const postId = document.getElementById('update_post_id').value;
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.disabled = true;
            submitButton.textContent = 'Updating...';
            
            // Add _method for PUT request
            formData.append('_method', 'PUT');
            
            // Add CSRF token to FormData
            formData.append('_token', document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || document.querySelector('input[name="_token"]').value);
            
            fetch(`/kelola-konten/update/${postId}`, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                submitButton.disabled = false;
                submitButton.textContent = originalText;
                if (data.success) {
                    closeUpdateModal();
                    loadPosts();
                    alert('Post berhasil diupdate!');
                } else {
                    alert('Gagal mengupdate post: ' + (data.message || 'Unknown error'));
                }
            })
            .catch(error => {
                console.error('Error updating post:', error);
                submitButton.disabled = false;
                submitButton.textContent = originalText;
                alert('Gagal mengupdate post');
            });
        });
    </script>
</body>
</html>
