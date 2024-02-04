<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProduk = [
            [
                'nama_produk' => 'Citato',
                'stok'=> 100,
                'harga'=> 1000,
                'desc'=> 'Cina tanpa toko',
                'foto'=>'default.png',
                'id_kategori'=> 1
            ]
            ];
            foreach($dataProduk as $key => $val){
               Produk::create($val);
            }
    }
}
