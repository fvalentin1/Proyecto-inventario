<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AssignAdminRoleSeeder::class);
        $this->call(CarsSeeder::class);
    }
}
