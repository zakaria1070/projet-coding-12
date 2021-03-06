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
        $this->call(UserSeeder::class);
        $this->call(AccueilSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(TestimonialSeeder::class);
    }
}
