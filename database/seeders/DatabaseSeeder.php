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
        // \App\Models\User::factory(1)->create();
        $this->call(ServiceSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ProjectImageSeeder::class);
    }
}
