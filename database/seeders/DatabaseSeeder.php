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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\modelpedram2::factory(10)->create();
        \App\Models\modelpedram2::factory(10)->insert([
            'fname' => Str::random(10),
            'lname' => Str::random(10).'@gmail.com',
            'address' => Hash::make('password'),
        ]);
    }
}
