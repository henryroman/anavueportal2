<?php

// database/seeders/DatabaseSeeder.php
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
        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            ItemSeeder::class
        ]);


        \App\Models\User::factory(30)->create();
    

        // Debug statement to list all seeders
        $seeders = get_declared_classes();
        foreach ($seeders as $seeder) {
            if (strpos($seeder, 'Database\\Seeders') !== false) {
                echo $seeder . "\n";
            }
        }
    }
}
