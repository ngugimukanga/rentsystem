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
        // $this->call(UserSeeder::class);
        factory(\App\Landlord::class, 10)->create();
        factory(\App\Apartment::class, 28)->create();
        factory(\App\Unit::class, 300)->create();
        factory(\App\Tenant::class, 180)->create();
        factory(\App\Lease::class, 180)->create();
        factory(\App\Payment::class, 100)->create();

    }
}
