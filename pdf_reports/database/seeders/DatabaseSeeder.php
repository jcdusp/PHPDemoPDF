<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::factory(10)->create();
        \App\Models\User::create([
            'name' =>'Jayachandran E',
            'email'=>'jayachandrane@gmail.com',
            'password'=>Hash::make('policy=2006')
        ]);

        \App\Models\User::create([
            'name' => 'Antoni A',
            'email' => 'antoni@gmail.com',
            'password'=>Hash::make('policy=2007')
        ]);
    }
}
