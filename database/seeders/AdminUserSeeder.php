<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'flo@gmail.com'],  //si la valeur existe déja le seeder du dessous ne fera rien...
            ['name' => 'Flo', 'email' => 'flo@gmail.com',  'password' => bcrypt('azerty')]);
    }
}
