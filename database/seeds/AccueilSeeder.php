<?php

use Illuminate\Database\Seeder;
use App\Accueil;

class AccueilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Accueil::class,1)->create();
    }
}
