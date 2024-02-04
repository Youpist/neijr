<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
