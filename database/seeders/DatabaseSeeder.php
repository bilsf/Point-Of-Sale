<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(LaratrustSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Brogore',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ])->attachRole('admin');

        \App\Models\User::factory()->create([
            'name' => 'Brokasir',
            'username' => 'Kasir',
            'email' => '    kasir@gmail.com',
            'password' => Hash::make('4321'),
        ])->attachRole('kasir');

    
    }
}
