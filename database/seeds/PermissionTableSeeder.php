<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission= new Permission;
        $permission->name = 'Moderador_Permission';
        $permission->display_name = 'Permisos de Usuario';
        $permission->description = 'Acceso al modulo de permisos.';
        $permission ->save();
    }
}
