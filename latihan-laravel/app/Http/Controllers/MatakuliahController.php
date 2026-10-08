<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController
{
    private $matakuliah = [
        ['kode' => 'PW2', 'nama' => 'Pemrograman Web II', 'sks' => 3],
        ['kode' => 'BD', 'nama' => 'Basis Data', 'sks' => 3],
        ['kode' => 'JKS', 'nama' => 'Jaringan Komputer', 'sks' => 2],
        ['kode' => 'KTI', 'nama' => 'Kemanan TI', 'sks' => 2],
        ['kode' => 'ALGO', 'nama' => 'Algoritma & Pemrograman', 'sks' => 3],
    ];

    public function index(Request $request)
    {
        $q = $request->query('q');
        $daftarMatakuliah = $this->matakuliah;

        if ($q) {
            $daftarMatakuliah = array_filter($daftarMatakuliah, function ($item) use ($q) {
                return stripos($item['nama'], $q) !== false || stripos($item['kode'], $q) !== false;
            });
        }

        return view('matakuliah.index', [
            'daftarMatakuliah' => $daftarMatakuliah,
            'q' => $q
        ]);
    }

    public function show(string $kode)
    {
        $matakuliah = collect($this->matakuliah)->firstWhere('kode', $kode);

        if (!$matakuliah) {
            abort(404);
        }

        return view('matakuliah.show', ['matakuliah' => $matakuliah]);
    }
}