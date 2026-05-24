<?php
 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\KategoriController;
 
// Route default
Route::get('/', function () {
    return view('welcome');
});
 
// Route baru - return text
Route::get('/hello', function () {
    return 'Hello dari Laravel!';
});
 
// Route dengan HTML
Route::get('/info', function () {
    return '<h1>Sistem Perpustakaan</h1><p>Selamat datang!</p>';
});
 
// Route dengan JSON
Route::get('/buku', function () {
    return [
        'judul' => 'Laravel Programming',
        'pengarang' => 'John Doe',
        'harga' => 150000
    ];
});
 
// Route dengan multiple parameters
Route::get('/search/{kategori}/{keyword}', function ($kategori, $keyword) {
    return "Cari buku kategori: $kategori dengan keyword: $keyword";
});

Route::get('/anggota', function () {

    $anggota_list = [
        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081234567891',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '081234567892',
            'alamat' => 'Surabaya',
            'status' => 'Nonaktif'
        ],
        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Rina Lestari',
            'email' => 'rina@email.com',
            'telepon' => '081234567893',
            'alamat' => 'Semarang',
            'status' => 'Aktif'
        ],
        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Dedi Kurniawan',
            'email' => 'dedi@email.com',
            'telepon' => '081234567894',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ]
    ];

    return view('anggota.index', compact('anggota_list'));
});

Route::get('/anggota/{id}', function ($id) {

    $anggota_list = [
        1 => [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],
        2 => [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '081234567891',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],
        3 => [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '081234567892',
            'alamat' => 'Surabaya',
            'status' => 'Nonaktif'
        ],
        4 => [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Rina Lestari',
            'email' => 'rina@email.com',
            'telepon' => '081234567893',
            'alamat' => 'Semarang',
            'status' => 'Aktif'
        ],
        5 => [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Dedi Kurniawan',
            'email' => 'dedi@email.com',
            'telepon' => '081234567894',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ]
    ];

    if (!isset($anggota_list[$id])) {
        abort(404);
    }

    return view('anggota.show', ['anggota' => $anggota_list[$id]]);
});

Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);
Route::get('/buku/{id}', [PerpustakaanController::class, 'show']);
Route::get('/about', [PerpustakaanController::class, 'about']);
Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori.index');

Route::get('/kategori/{id}', [KategoriController::class, 'show'])
    ->name('kategori.show');

Route::get('/kategori/search/{keyword}', [KategoriController::class, 'search'])
    ->name('kategori.search');

// Route test koneksi database
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        $dbName = DB::connection()->getDatabaseName();

        return "Koneksi database berhasil!<br>Database: <strong>{$dbName}</strong>";
    } catch (\Exception $e) {
        return "Koneksi database gagal!<br>Error: " . $e->getMessage();
    }
});