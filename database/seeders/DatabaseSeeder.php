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
        $KS = new KamionSeeder();
        $VS = new VozacSeeder();

        $VS->run();
        $KS->run();
    }
}
