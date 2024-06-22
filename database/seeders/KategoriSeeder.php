<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            [
                'namaKategori' => 'kategori 1',
            ],
            [
                'namaKategori' => 'kategori 2',
            ],
            [
                'namaKategori' => 'kategori 3',
            ],
        ]);
    }
}
