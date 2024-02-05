<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'siswa',
                'email' => 'siswa@gmail.com',
                'email_verified_at' =>now(),
                'password' => bcrypt('siswa'),
                'role' => 'customer',
                'remember_token'=> Str::random(10),
            ],
            [
                'name' => 'kantin',
                'email' => 'kantin@gmail.com',
                'email_verified_at' =>now(),
                'password' => bcrypt('kantin'),
                'role' => 'kantin',
                'remember_token'=> Str::random(10),
            ],
            [
                'name' => 'bank',
                'email' => 'bank@gmail.com',
                'email_verified_at' =>now(),
                'password' => bcrypt('bank'),
                'role' => 'bank',
                'remember_token'=> Str::random(10),
            ],
            ];
            foreach($dataUser as $key => $val){
                User::create($val);
            }
    

   
        $dataWallet = [
            [
                'id_user'=> 1,
                'rekening'=> 1122334455,
               'saldo'=> 100000,
               'status'=> 'aktif',
            ],
            [
                'id_user'=> 2,
                'rekening'=> 123344566,
               'saldo'=> 100000,
               'status'=> 'aktif',
            ],
            [
                'id_user'=> 3,
                'rekening'=> 11234456677,
               'saldo'=> 100000,
               'status'=> 'aktif',
            ],
            ];
            foreach($dataWallet as $key => $val){
               Wallet::create($val);
            }
    

   
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
    
    
   
        $dataProduk = [
            [
                'nama_produk' => 'Citato',
                'stok'=> 100,
                'harga'=> 1000,
                'desc'=> 'Cina tanpa toko',
                'foto'=>'default.png',
                'id_kategori'=> 2
            ]
            ];
            foreach($dataProduk as $key => $val){
               Produk::create($val);
            }
        }   
}
