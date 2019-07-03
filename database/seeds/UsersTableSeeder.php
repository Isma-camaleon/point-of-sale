<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use POS\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create ([
            'name'      => 'Admin',
            'slug'      => 'admin',
            'special'   => 'all-access',
        ]);
       
        Role::create ([
            'name'      => 'Acceso denegado',
            'slug'      => 'deny_access',
            'special'   => 'no-access',
            'description' => 'Sin acceso a los módulos',
        ]);
        
        $user= User::create([
            'name'      => 'Ismael Cuevas',
            'email'     => 'ismael.c.26a@gmail.com',
            'password'  => '$2y$10$YzFjd8owYGlKN5wz08YWJe0O2Gq6Vm6Tyhwf4yjI3oYWlSuPe.9EW',
        ]);
        $user->roles()->sync(1);


    }
}
