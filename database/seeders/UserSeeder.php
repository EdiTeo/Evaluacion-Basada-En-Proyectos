<?php

namespace Database\Seeders;

use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roleadmin = Role::create(['name' => 'admin']);
        $roledoc = Role::create(['name' => 'docente']);


 // 
/*         $permission = Permission::create(['name' => 'ver:role']);
        $permission = Permission::create(['name' => 'crear:role']);
        $permission = Permission::create(['name' => 'editar:role']);
        $permission = Permission::create(['name' => 'eliminar:role']);

        $permission = Permission::create(['name' => 'ver:permiso']);

        $permission = Permission::create(['name' => 'ver:usuario']);
        $permission = Permission::create(['name' => 'crear:usuario']);
        $permission = Permission::create(['name' => 'editar:usuario']);
        $permission = Permission::create(['name' => 'eliminar:usuario']);
 */
        //Crear Usuario Admin
        $user = new User();
        $user->name = 'Cesar Amilcar Canaza';
        $user->email = 'cesar.canaza14@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        
        //Asignar Rol a usuario
        $user->assignRole($roleadmin);

        //Crear Usuario Docente
        $user = new User();
        $user->name = 'Flores Villarroel Corina';
        $user->email = 'corina.flv@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        
        //Asignar Rol a usuario
        $user->assignRole($roledoc);

        //Crear el docente y asignar el user_id
        $docente = new Docente();
        $docente->user_id= $user->id;
        $docente->save();


        //Crear Usuario Docente
        $user = new User();
        $user->name = 'Escalera Fernandez David';
        $user->email = 'david.esca@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        
        //Asignar Rol a usuario
        $user->assignRole($roledoc);

        //Crear el docente y asignar el user_id
        $docente = new Docente();
        $docente->user_id= $user->id;
        $docente->save();

        //Crear Usuario Docente
        $user = new User();
        $user->name = 'Blanco Coca Leticia';
        $user->email = 'leti.blaco@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        
        //Asignar Rol a usuario
        $user->assignRole($roledoc);

        //Crear el docente y asignar el user_id
        $docente = new Docente();
        $docente->user_id= $user->id;
        $docente->save();
        
        
        //Crear Usuario Docente
        $user = new User();
        $user->name = 'Rodriguez Bilbao Erika Patricia';
        $user->email = 'patty.rb@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        
        //Asignar Rol a usuario
        $user->assignRole($roledoc);

        //Crear el docente y asignar el user_id
        $docente = new Docente();
        $docente->user_id= $user->id;
        $docente->save();        






/*         $docenteId = 1; // Cambia esto por el ID del docente que quieras asignar
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



        $user = new User();
        $user->name = 'Jannik Amilces Canaza';
        $user->email = 'jannik.canaza14@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->assignRole($roleest);


        $user = new User();
        $user->name = 'Narces Canaza Garcia';
        $user->email = 'narces.canaza14@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->assignRole($roleest);


        $user = new User();
        $user->name = 'Amilcar Canaza Salas';
        $user->email = 'amilcar.canaza@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();
        $user->assignRole($roledoc); */

    }
}
