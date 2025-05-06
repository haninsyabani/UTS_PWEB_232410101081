<?php

namespace App\Models;

class Barang
{
    public static function getAll()
    {
        return [
            ['id' => 1, 'nama' => 'Gitar Akustik', 'kategori' => 'musik', 'kondisi' => 'baik', 'jumlah' => 5, 'lokasi' => 'Sekretariat'],
            ['id' => 2, 'nama' => 'Piano Elektrik', 'kategori' => 'musik', 'kondisi' => 'baik', 'jumlah' => 2, 'lokasi' => 'Sekretariat'],
            ['id' => 3, 'nama' => 'Tenda Panggung', 'kategori' => 'teater', 'kondisi' => 'rusak', 'jumlah' => 1, 'lokasi' => 'Sekretariat'],
            ['id' => 4, 'nama' => 'Kamera DSLR', 'kategori' => 'fotografi', 'kondisi' => 'baik', 'jumlah' => 3, 'lokasi' => 'Sekretariat'],
            ['id' => 5, 'nama' => 'Microphone Wireless', 'kategori' => 'musik', 'kondisi' => 'hilang', 'jumlah' => 0, 'lokasi' => 'Sekretariat'],
            ['id' => 6, 'nama' => 'Kostum Tari', 'kategori' => 'tari', 'kondisi' => 'baik', 'jumlah' => 10, 'lokasi' => 'Gudang Ruang Rapat 1'],
            ['id' => 7, 'nama' => 'Speaker PA System', 'kategori' => 'psm', 'kondisi' => 'baik', 'jumlah' => 4, 'lokasi' => 'Sekretariat'],
            ['id' => 8, 'nama' => 'Tripod Kamera', 'kategori' => 'fotografi', 'kondisi' => 'rusak', 'jumlah' => 2, 'lokasi' => 'Sekretariat'],
            ['id' => 9, 'nama' => 'Proyektor', 'kategori' => 'teater', 'kondisi' => 'baik', 'jumlah' => 1, 'lokasi' => 'Gudang Ruang Rapat 1'],
            ['id' => 10, 'nama' => 'Laptop Editing Video', 'kategori' => 'fotografi', 'kondisi' => 'baik', 'jumlah' => 5, 'lokasi' => 'Gudang Ruang Rapat 1'],
            ['id' => 11, 'nama' => 'Lampu Panggung', 'kategori' => 'teater', 'kondisi' => 'hilang', 'jumlah' => 0, 'lokasi' => 'Gudang Ruang Rapat 1'],
            ['id' => 12, 'nama' => 'Gitar Elektrik', 'kategori' => 'musik', 'kondisi' => 'baik', 'jumlah' => 6, 'lokasi' => 'Sekretariat'],
            ['id' => 13, 'nama' => 'Stand Mikrofon', 'kategori' => 'musik', 'kondisi' => 'baik', 'jumlah' => 8, 'lokasi' => 'Anngoota'],
            ['id' => 14, 'nama' => 'Buku Teater', 'kategori' => 'teater', 'kondisi' => 'baik', 'jumlah' => 30, 'lokasi' => 'Anggota'],
            ['id' => 15, 'nama' => 'Kamera Video', 'kategori' => 'fotografi', 'kondisi' => 'baik', 'jumlah' => 7, 'lokasi' => 'Anggota'],
            ['id' => 16, 'nama' => 'Alat Musik Drum', 'kategori' => 'musik', 'kondisi' => 'rusak', 'jumlah' => 2, 'lokasi' => 'Studio Ilkom'],
            ['id' => 17, 'nama' => 'Peralatan Tari Tradisional', 'kategori' => 'tari', 'kondisi' => 'baik', 'jumlah' => 12, 'lokasi' => 'Sekretariat'],
            ['id' => 18, 'nama' => 'Kamera Mirrorless', 'kategori' => 'fotografi', 'kondisi' => 'baik', 'jumlah' => 3, 'lokasi' => 'Sekretariat'],
            ['id' => 19, 'nama' => 'Alat Musik Keyboard', 'kategori' => 'musik', 'kondisi' => 'hilang', 'jumlah' => 0, 'lokasi' => 'Studio'],
            ['id' => 20, 'nama' => 'Lampu Sorot', 'kategori' => 'teater', 'kondisi' => 'hilang', 'jumlah' => 6, 'lokasi' => 'Sekretariat'],
        ];
    }
}
