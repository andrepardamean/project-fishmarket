<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'nelayan',
            'email' => 'nelayan01@gmail.com',
            'password' => Hash::make('17el4ya17'),
            'level' => 'admin',
            'jenis_kelamin' => 'Laki-laki',
            'nomor_hp' => '62895418128121',
            'alamat' => 'jalan pramuka Gg H. Ramlah'
        ]);
    }
}
