<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
