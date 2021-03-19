<?php

use Illuminate\Database\Seeder;
use \App\User;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\Models\User::factory(10)->create();
    }
}
