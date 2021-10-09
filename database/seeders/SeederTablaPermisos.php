<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// spatie 

use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**php artisan db:seed --force
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            // tabla roles 
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            // tabla consultas

            'ver-consulta',
            'crear-consulta',
            'editar-consulta',
            'borrar-consulta',


        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
