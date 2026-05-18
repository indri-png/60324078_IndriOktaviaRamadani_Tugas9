<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_list = [
            ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Buku pemrograman dan coding', 'jumlah_buku' => 25],
            ['id' => 2, 'nama' => 'Database', 'deskripsi' => 'Buku tentang database dan SQL', 'jumlah_buku' => 15],
            ['id' => 3, 'nama' => 'Web Design', 'deskripsi' => 'Desain UI/UX dan frontend', 'jumlah_buku' => 20],
            ['id' => 4, 'nama' => 'Networking', 'deskripsi' => 'Jaringan komputer dan internet', 'jumlah_buku' => 10],
            ['id' => 5, 'nama' => 'AI & Data Science', 'deskripsi' => 'Kecerdasan buatan dan data', 'jumlah_buku' => 12],
        ];

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori_list = [
            1 => ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Buku pemrograman dan coding'],
            2 => ['id' => 2, 'nama' => 'Database', 'deskripsi' => 'Buku tentang database dan SQL'],
            3 => ['id' => 3, 'nama' => 'Web Design', 'deskripsi' => 'Desain UI/UX dan frontend'],
            4 => ['id' => 4, 'nama' => 'Networking', 'deskripsi' => 'Jaringan komputer dan internet'],
            5 => ['id' => 5, 'nama' => 'AI & Data Science', 'deskripsi' => 'Kecerdasan buatan dan data'],
        ];

        $buku_list = [
            1 => [
                ['judul' => 'PHP Dasar', 'pengarang' => 'Budi', 'tahun' => 2023],
                ['judul' => 'Laravel Pemula', 'pengarang' => 'Andi', 'tahun' => 2024],
            ],
            2 => [
                ['judul' => 'MySQL Guide', 'pengarang' => 'Siti', 'tahun' => 2022],
                ['judul' => 'Database Design', 'pengarang' => 'Rina', 'tahun' => 2023],
            ],
            3 => [
                ['judul' => 'UI Design', 'pengarang' => 'Dedi', 'tahun' => 2024],
                ['judul' => 'HTML & CSS', 'pengarang' => 'Ayu', 'tahun' => 2023],
            ],
            4 => [
                ['judul' => 'Networking Basic', 'pengarang' => 'Rudi', 'tahun' => 2022],
                ['judul' => 'Internet Concept', 'pengarang' => 'Bambang', 'tahun' => 2023],
            ],
            5 => [
                ['judul' => 'AI Intro', 'pengarang' => 'Lina', 'tahun' => 2024],
                ['judul' => 'Data Science', 'pengarang' => 'Eka', 'tahun' => 2023],
            ],
        ];

        if (!isset($kategori_list[$id])) {
            abort(404);
        }

        return view('kategori.show', [
            'kategori' => $kategori_list[$id],
            'buku_list' => $buku_list[$id]
        ]);
    }

    public function search($keyword)
    {
        $kategori_list = [
            ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Buku pemrograman dan coding', 'jumlah_buku' => 25],
            ['id' => 2, 'nama' => 'Database', 'deskripsi' => 'Buku tentang database dan SQL', 'jumlah_buku' => 15],
            ['id' => 3, 'nama' => 'Web Design', 'deskripsi' => 'Desain UI/UX dan frontend', 'jumlah_buku' => 20],
            ['id' => 4, 'nama' => 'Networking', 'deskripsi' => 'Jaringan komputer dan internet', 'jumlah_buku' => 10],
            ['id' => 5, 'nama' => 'AI & Data Science', 'deskripsi' => 'Kecerdasan buatan dan data', 'jumlah_buku' => 12],
        ];

        $hasil = array_filter($kategori_list, function ($item) use ($keyword) {
            return stripos($item['nama'], $keyword) !== false;
        });

        return view('kategori.search', compact('keyword', 'hasil'));
    }
}