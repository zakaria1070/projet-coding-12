<?php

use Illuminate\Database\Seeder;
use App\Home;


class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Home::class,1)->create();
    }
}
