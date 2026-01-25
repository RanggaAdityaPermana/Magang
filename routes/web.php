<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('beranda');
});

// Profile routes - redirect to tentang-kami as default
Route::get('/profile', function () {
    return redirect('/profile/tentang-kami');
});

Route::get('/profile/visi-misi', function () {
    return view('profile.visi-misi');
});

Route::get('/profile/tentang-kami', function () {
    // Load content from storage
    $filePath = storage_path('app/content.json');
    $tentangKami = null;
    
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        $posts = json_decode($content, true) ?: [];
        
        // Find post with kategori 'tentang-kami'
        foreach ($posts as $post) {
            if ($post['kategori'] === 'tentang-kami') {
                $tentangKami = $post;
                break;
            }
        }
    }
    
    return view('profile.tentang-kami', ['tentangKami' => $tentangKami]);
});

Route::get('/profile/sejarah', function () {
    return view('profile.sejarah');
});

Route::get('/profile/struktur-organisasi', function () {
    return view('profile.struktur-organisasi');
});

// Layanan routes - redirect to tarif as default
Route::get('/layanan', function () {
    return redirect('/layanan/tarif');
});

Route::get('/layanan/tarif', function () {
    // Load content from storage
    $filePath = storage_path('app/content.json');
    $tarifAir = null;
    
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        $posts = json_decode($content, true) ?: [];
        
        // Find post with kategori 'tarif-air'
        foreach ($posts as $post) {
            if ($post['kategori'] === 'tarif-air') {
                $tarifAir = $post;
                break;
            }
        }
    }
    
    return view('layanan.tarif', ['tarifAir' => $tarifAir]);
});

Route::get('/layanan/daftar', function () {
    return view('layanan.daftar');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    // TODO: Add authentication logic here
    // For now, redirect to dashboard after login
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/kelola-konten', function () {
    return view('admin.kelola-konten');
});

Route::post('/kelola-konten/create', function () {
    $filePath = storage_path('app/content.json');
    $posts = [];
    
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        $posts = json_decode($content, true) ?: [];
    }
    
    // Handle image uploads
    $images = [];
    if (request()->hasFile('images')) {
        $uploadPath = storage_path('app/public/posts');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }
        
        foreach (request()->file('images') as $file) {
            if ($file->isValid()) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($uploadPath, $filename);
                $images[] = $filename;
            }
        }
    }
    
    $newPost = [
        'id' => count($posts) > 0 ? max(array_column($posts, 'id')) + 1 : 1,
        'judul' => request('judul'),
        'deskripsi' => request('deskripsi') ?: '',
        'kategori' => request('kategori'),
        'images' => $images,
        'created_at' => date('Y-m-d H:i:s')
    ];
    
    $posts[] = $newPost;
    file_put_contents($filePath, json_encode($posts, JSON_PRETTY_PRINT));
    
    return response()->json(['success' => true, 'post' => $newPost]);
});

Route::get('/kelola-konten/posts', function () {
    $filePath = storage_path('app/content.json');
    
    if (!file_exists($filePath)) {
        return response()->json([]);
    }
    
    $content = file_get_contents($filePath);
    $posts = json_decode($content, true) ?: [];
    
    // Filter by kategori if needed
    $kategori = request('kategori');
    if ($kategori) {
        $posts = array_filter($posts, function($post) use ($kategori) {
            return $post['kategori'] === $kategori;
        });
        $posts = array_values($posts);
    }
    
    return response()->json($posts);
});

Route::match(['put', 'post'], '/kelola-konten/update/{id}', function ($id) {
    $filePath = storage_path('app/content.json');
    
    if (!file_exists($filePath)) {
        return response()->json(['success' => false, 'message' => 'File not found']);
    }
    
    $content = file_get_contents($filePath);
    $posts = json_decode($content, true) ?: [];
    
    $found = false;
    $updatedPost = null;
    foreach ($posts as &$post) {
        if ($post['id'] == $id) {
            $post['judul'] = request('judul');
            $post['deskripsi'] = request('deskripsi') ?: '';
            $post['kategori'] = request('kategori');
            
            // Handle new image uploads
            if (request()->hasFile('images')) {
                $uploadPath = storage_path('app/public/posts');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                
                $existingImages = $post['images'] ?? [];
                $newImages = [];
                
                foreach (request()->file('images') as $file) {
                    if ($file->isValid()) {
                        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                        $file->move($uploadPath, $filename);
                        $newImages[] = $filename;
                    }
                }
                
                $post['images'] = array_merge($existingImages, $newImages);
            }
            
            $post['updated_at'] = date('Y-m-d H:i:s');
            $updatedPost = $post;
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        return response()->json(['success' => false, 'message' => 'Post not found']);
    }
    
    file_put_contents($filePath, json_encode($posts, JSON_PRETTY_PRINT));
    
    return response()->json(['success' => true, 'post' => $updatedPost]);
});

Route::post('/kelola-konten/remove-image/{id}', function ($id) {
    $filePath = storage_path('app/content.json');
    
    if (!file_exists($filePath)) {
        return response()->json(['success' => false, 'message' => 'File not found']);
    }
    
    $content = file_get_contents($filePath);
    $posts = json_decode($content, true) ?: [];
    
    $found = false;
    foreach ($posts as &$post) {
        if ($post['id'] == $id) {
            $imageToRemove = request('image');
            $images = $post['images'] ?? [];
            $images = array_filter($images, function($img) use ($imageToRemove) {
                return $img !== $imageToRemove;
            });
            $post['images'] = array_values($images);
            
            // Delete file from storage
            $imagePath = storage_path('app/public/posts/' . $imageToRemove);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            
            $found = true;
            break;
        }
    }
    
    if (!$found) {
        return response()->json(['success' => false, 'message' => 'Post not found']);
    }
    
    file_put_contents($filePath, json_encode($posts, JSON_PRETTY_PRINT));
    
    return response()->json(['success' => true]);
});

Route::delete('/kelola-konten/delete/{id}', function ($id) {
    $filePath = storage_path('app/content.json');
    
    if (!file_exists($filePath)) {
        return response()->json(['success' => false, 'message' => 'File not found']);
    }
    
    $content = file_get_contents($filePath);
    $posts = json_decode($content, true) ?: [];
    
    // Find and delete images
    foreach ($posts as $post) {
        if ($post['id'] == $id && isset($post['images'])) {
            foreach ($post['images'] as $image) {
                $imagePath = storage_path('app/public/posts/' . $image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            break;
        }
    }
    
    $posts = array_filter($posts, function($post) use ($id) {
        return $post['id'] != $id;
    });
    
    $posts = array_values($posts);
    file_put_contents($filePath, json_encode($posts, JSON_PRETTY_PRINT));
    
    return response()->json(['success' => true]);
});

// Informasi routes - redirect to berita as default
Route::get('/informasi', function () {
    return redirect('/informasi/berita');
});

Route::get('/informasi/berita', function () {
    return view('informasi.berita');
});

Route::get('/informasi/pengumuman', function () {
    return view('informasi.pengumuman');
});

Route::get('/informasi/ketenagakerjaan', function () {
    return view('informasi.ketenagakerjaan');
});

Route::get('/informasi/magang', function () {
    return view('informasi.magang');
});

Route::get('/informasi/kerjasama', function () {
    return view('informasi.kerjasama');
});

Route::get('/informasi/maklumat', function () {
    return view('informasi.maklumat');
});

Route::get('/galeri', function () {
    return view('galeri');
});

// Kontak routes - redirect to hubungi-kami as default
Route::get('/kontak', function () {
    return redirect('/kontak/hubungi-kami');
});

Route::get('/kontak/hubungi-kami', function () {
    return view('kontak.hubungi-kami');
});

Route::get('/kontak/pengaduan-online', function () {
    return view('kontak.pengaduan-online');
});

Route::get('/debug', function () {
    return response()->json([
        'status' => 'Server is running',
        'php_version' => PHP_VERSION,
        'laravel_version' => app()->version(),
    ]);
});

Route::get('/test-db', function () {
    try {
        $db = DB::connection()->getPdo();
        return response()->json([
            'status' => 'OK',
            'database' => DB::connection()->getDatabaseName(),
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'Error',
            'message' => $e->getMessage(),
        ], 500);
    }
});

Route::get('/test-view', function () {
    try {
        $view = view('beranda');
        return response()->json([
            'status' => 'OK',
            'view' => 'beranda view loaded',
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'Error',
            'message' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ], 500);
    }
});
