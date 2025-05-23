<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat 1 user dengan password yang bisa dipakai login
        $this->call(UserSeeder::class);


        // Panggil BookSeeder untuk menambahkan data buku
        $this->call(BookSeeder::class);
    }
}


