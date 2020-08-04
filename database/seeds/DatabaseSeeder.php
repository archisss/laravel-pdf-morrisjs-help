<?php

use App\Description;
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
    	Description::truncate();

        factory(Description::class, 20)->create();
    }
}
