<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Admin::create([
            'nama' => 'Fefy',
            'username' => 'Adminstrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('bkkypc'),
            'kontak' => '081563943793',
            'foto' => 'assets/avatar/Fefi.jpeg'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
