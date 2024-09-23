<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $roleest = Role::create(['name' => 'estudiante']);

        $docenteId = 2; // Cambia esto por el ID del docente que quieras asignar

        //Crear usuario para el docente
        $estudiuser = new User();
        $estudiuser->name = 'Jose Giovani Bascope';
        $estudiuser->email = 'itzumi.basco@gmail.com';
        $estudiuser->password = bcrypt('123456789');
        $estudiuser->save();

        //Asignar el rol de estudiante al usuario
        $estudiuser->assignRole($roleest);

        //Crear el estudiante y asignar el user_id y docente_id
        $estudiante = new Estudiante();
        $estudiante->user_id = $estudiuser->id;
        $estudiante->docente_id = $docenteId;
        $estudiante->save();

        $docenteId = 2; // Cambia esto por el ID del docente que quieras asignar

        //Crear usuario para el docente
        $estudiuser = new User();
        $estudiuser->name = 'Edith Camacho';
        $estudiuser->email = 'edith.camacho@gmail.com';
        $estudiuser->password = bcrypt('123456789');
        $estudiuser->save();

        //Asignar el rol de estudiante al usuario
        $estudiuser->assignRole($roleest);

        //Crear el estudiante y asignar el user_id y docente_id
        $estudiante = new Estudiante();
        $estudiante->user_id = $estudiuser->id;
        $estudiante->docente_id = $docenteId;
        $estudiante->save();


        $docenteId = 2;
        //Crear usuario para el docente
        $estudiuser = new User();
        $estudiuser->name = 'Evo morales';
        $estudiuser->email = 'evo.huevo@gmail.com';
        $estudiuser->password = bcrypt('123456789');
        $estudiuser->save();

        //Asignar el rol de estudiante al usuario
        $estudiuser->assignRole($roleest);
        
        //Crear el estudiante y asignar el user_id y docente_id
        $estudiante = new Estudiante();
        $estudiante->user_id = $estudiuser->id;
        $estudiante->docente_id = $docenteId;
        $estudiante->save();



        $docenteId = 2;
        //Crear usuario para el docente
        $estudiuser = new User();
        $estudiuser->name = 'Manfred Reyes Villa';
        $estudiuser->email = 'manfred.reyes@gmail.com';
        $estudiuser->password = bcrypt('123456789');
        $estudiuser->save();

        //Asignar el rol de estudiante al usuario
        $estudiuser->assignRole($roleest);

        //Crear el estudiante y asignar el user_id y docente_id
        $estudiante = new Estudiante();
        $estudiante->user_id = $estudiuser->id;
        $estudiante->docente_id = $docenteId;
        $estudiante->save();

        $docenteId = 3;
        //Crear usuario para el docente
        $estudiuser = new User();
        $estudiuser->name = 'Horacio Camacho';
        $estudiuser->email = 'horacio.camacho@gmail.com';
        $estudiuser->password = bcrypt('123456789');
        $estudiuser->save();

        //Asignar el rol de estudiante al usuario
        $estudiuser->assignRole($roleest);

        //Crear el estudiante y asignar el user_id y docente_id
        $estudiante = new Estudiante();
        $estudiante->user_id = $estudiuser->id;
        $estudiante->docente_id = $docenteId;
        $estudiante->save();
    }
}
