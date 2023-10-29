<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KategoriBerita;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "ADMIN SDI",
            "email"=> "admin@sdi.com",
            "password" => Hash::make("teknik_hijau"),
            "roles" => "admin"
        ]);

        for ($i=0; $i < 2; $i++) { 
            KategoriBerita::create([
                "nama" => "Kategori ".$i+1 
            ]);
        }

    }
}
