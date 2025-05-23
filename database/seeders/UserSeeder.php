<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'dianayu.23005@mhs.unesa.ac.id'], // cari email ini
            [
                'name' => 'dianayu',
                'password' => Hash::make('dianayu'),
                'email_verified_at' => now(), // opsional, bisa NULL
            ]
        );
    }
}
