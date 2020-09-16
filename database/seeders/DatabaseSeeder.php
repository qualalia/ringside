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
        // Core permissions creation
        $this->call(RolesAndPermissionsSeeder::class);
        
        // Create some users
        $this->call(UserSeeder::class);
    }
}
