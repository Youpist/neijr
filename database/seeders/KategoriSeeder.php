<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataKategori = [
            [
                'nama_kategori'=> 'Lainnya',
            ],
            [
                'nama_kategori'=> 'Makanan',
            ],
            ];
            foreach($dataKategori as $key => $val){
               Kategori::create($val);
            }
    }
}
