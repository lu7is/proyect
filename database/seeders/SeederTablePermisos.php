<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablePermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
         //tabla roles
        'ver-rol',
        'crear-rol',
        'editar-rol',
        'borrar-rol',
        //tabla bodega
        'ver-bodega',
        'crear-bodega',
        'editar-bodega',
        'borrar-bodega'
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }

    }
}
