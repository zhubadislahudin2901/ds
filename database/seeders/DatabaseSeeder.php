<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name' => 'Bioskopy',
            'email' => 'bioskopy@gmail.com',
            'password' => Hash::make('123')
        ]);

    }
}
