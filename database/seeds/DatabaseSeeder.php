<?php

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
        // 109
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        // 113
        $this->call(RolePermissionSeeder::class);
    }
}
