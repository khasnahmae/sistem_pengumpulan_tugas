<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Dosen',
                'email' => 'dosen@gmail.com',
                'role' => 'dosen',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('password'),
            ],
        ];
        foreach ($dataUser as $key => $item) {
            User::create($item);
        }
    }          
}

