<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AssignAdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Encuentra al usuario con ID 1
        $user = User::find(1);

        // Asegúrate de que el usuario existe antes de asignar el rol
        if ($user) {
            // Asigna el rol "admin" al usuario si aún no lo tiene
            $user->assignRole('admin');
        }
    }
}
