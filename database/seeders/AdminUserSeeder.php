<?php

namespace Database\Seeders;
use App\Models\User;
use Spatie\Permission\Models\Role;;
use Spatie\Permission\Models\Permission;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    
    public function run()
    {
        Role::firstOrCreate(
            ['name' => 'Administrateur'],
            ['name' => 'Administrateur']);
        Role::firstOrCreate(['name' => 'Utilisateur'],
            ['name' => 'Utilisateur']);

        User::firstOrCreate(
            ['email' => 'flo@gmail.com'],  //si la valeur existe déja le seeder du dessous ne fera rien...
            ['name' => 'Flo', 'email' => 'flo@gmail.com',  'password' => bcrypt('azerty')])->assignRole('Administrateur');
    }
}
