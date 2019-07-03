<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // USERS
        Permission::create ([
            'name'          => 'Listar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista todos los usuarios',
            'grupo'         => 'usuarios',
        ]);
        Permission::create ([
            'name'          => 'Ver usuario',
            'slug'          => 'users.show',
            'description'   => 'Ver detalle de un usuario',
            'grupo'         => 'usuarios',
        ]);
        Permission::create ([
            'name'          => 'Editar usuario',
            'slug'          => 'users.edit',
            'description'   => 'Editar un usuario',
            'grupo'         => 'usuarios',
        ]);
        Permission::create ([
            'name'          => 'Deshabilitar / Habilitar usuarios',
            'slug'          => 'users.status',
            'description'   => 'Deshabilita o habilita cualquier usuario',
            'grupo'         => 'usuarios',
        ]);
        Permission::create ([
            'name'          => 'Crear usuario',
            'slug'          => 'users.create',
            'description'   => 'Crear un usuario',
            'grupo'         => 'usuarios',
        ]);

        
    }
}
