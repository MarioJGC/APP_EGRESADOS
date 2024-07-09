<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{


    public function run(): void
    {
        User::create([
            'name' => 'Maglioni Arana Caparachin',
            'email' => 'Marana@continental.edu.pe',
            'password' => bcrypt('Sistemas@Conti')
        ])->assignRole('Admin');
    }
}
