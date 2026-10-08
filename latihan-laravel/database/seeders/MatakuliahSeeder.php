<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $matkul = [
            ['kode' => 'TKO101', 'nama' => 'Pemrograman Web II', 'sks' => 3, 'semester' => 4],
            ['kode' => 'TKO102', 'nama' => 'Pemrograman Web I', 'sks' => 3, 'semester' => 2],
            ['kode' => 'TKO103', 'nama' => 'Internet of Things', 'sks' => 4, 'semester' => 5],
            ['kode' => 'TKO104', 'nama' => 'Sistem Mikrokontroler', 'sks' => 3, 'semester' => 3],
        ];

        foreach ($matkul as $m) {
            Matakuliah::create($m);
        }
    }
}